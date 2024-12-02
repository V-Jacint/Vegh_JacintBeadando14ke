<div class="card">
    <img src="{{ $game['Image'] }}" class="card-img-top" alt="{{ $game['Videogame'] }}">
    <div class="card-body">
        <h5 class="card-title">{{ $game['Videogame'] }}</h5>
        <p class="card-text">
            {{ $game['Videogame'] }}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width: 18px; height: 18px;" class="text-warning">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
            </svg>
        </p>
            <a href="{{ route('games.show', ['Year' => $game['Year']]) }}" class="btn btn-info">Read More</a>
    </div>
</div>