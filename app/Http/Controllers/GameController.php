<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    private $games;
    private $developers = [];

    public function __construct()
    {
        $this->games = Storage::json('Videogames.json');

        foreach ($this->games as $game) {
            if (isset($game['Developer']) && !in_array($game['Developer'], $this->developers)){
                array_push($this->developers, $game['Developer']);
            }
        }

        sort($this->developers);
    }

    public function index()
    {
        return view('games', 
        [
            'games' => $this->games,
            'developers' => $this->developers
        ]);
    }

    public function show($Year)
    {
        $gameDetails = null;
        foreach($this->games as $game){
            if($game['Year'] == $Year){
                $gameDetails = $game;
                break;
            }
        }

        return view('game', [
            'game' => $gameDetails
        ]);
    }

    public function searchByName(Request $request)
    {
        $filteredGames = [];

        // Filter games by name or developer
        foreach ($this->games as $game) {
            // If searching by game name
            if (isset($request->name) && str_contains(strtolower($game['Videogame']), strtolower($request->name))) {
                $filteredGames[] = $game;
            }
            // If searching by developer
            if (isset($request->developer) && $game['Developer'] == $request->developer) {
                $filteredGames[] = $game;
            }
        }

    return view('games', [
        'games' => $filteredGames,
        'developers' => $this->developers
    ]);
}

    public function searchByDeveloper(Request $request)
    {
        $filteredGames = $this->games;

        if ($request->has('developer') && $request->input('developer') != '') {
            $filteredGames = array_filter($filteredGames, function($game) use ($request) {
                return strtolower($game['Developer']) == strtolower($request->input('developer'));
            });
        }

        return view('games', [
            'games' => $filteredGames,
            'developers' => $this->developers
        ]);
    }
}