@extends('layouts.app')

@section('title', $game['Videogame'] ?? 'Game Details')


@section('content')
    
    <form action="{{ route('games.searchByName') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by game name" name="name" value="{{ request()->input('name') }}">
            <button class="btn btn-outline-secondary" type="submit">Search by Name</button>
        </div>
    </form>

    
    <form action="{{ route('games.searchByDeveloper') }}" method="GET">
        <div class="input-group mb-3">
            <select name="developer" class="form-control">
                <option value="">Select Developer</option>
                @foreach ($developers as $developer)
                    <option value="{{ $developer }}" {{ request()->input('developer') == $developer ? 'selected' : '' }}>{{ $developer }}</option>
                @endforeach
            </select>
            <button class="btn btn-outline-secondary" type="submit">Search by Developer</button>
        </div>
    </form>







@section('content')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $game['Image'] }}" class="img-fluid rounded-start" alt="{{ $game['Videogame'] }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $game['Videogame'] }}</h5>
                    <p class="card-text">Year: {{ $game['Year'] }}</p>
                    <p class="card-text">Platforms: {{ $game['Platforms'] }}</p>
                    <p class="card-text">Developer: {{ $game['Developer'] }}</p>
                    <p class="card-text">Publisher: {{ $game['Publisher'] }}</p>
                    <p class="card-text">Wikipedia: {{ $game['Wikipedia_Profile'] }}</p>
                    <p class="card-text">Description: {{ $game['Description'] }}</p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection