@extends('layouts.app')

@section('title', 'Games')
    
@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center">Game List</h1>

    <!-- Search Form -->
    <div class="row mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('games.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Search by game name" value="{{ request()->get('name') }}">
            
                    <select name="developer" class="form-select">
                        <option value="">Select Developer</option>
                        @foreach ($developers as $developer)
                            <option value="{{ $developer }}" {{ request()->get('developer') == $developer ? 'selected' : '' }}>
                                {{ $developer }}
                            </option>
                        @endforeach
                    </select>
            
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Game List -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($games as $game)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $game['Image'] }}" class="card-img-top" alt="{{ $game['Videogame'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game['Videogame'] }}</h5>
                        <p class="card-text">{{ Str::limit($game['Description'], 100) }}</p>
                        <p class="card-text"><strong>Year:</strong> {{ $game['Year'] }}</p>
                        <p class="card-text"><strong>Developer:</strong> {{ $game['Developer'] }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('games.show', ['Year' => $game['Year']]) }}" class="btn btn-info">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

   
</div>
@endsection