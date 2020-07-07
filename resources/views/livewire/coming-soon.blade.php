<div wire:init="loadComingSoon" class="coming-soon-container space-y-8 mt-8">
    @forelse($comingSoon as $game)
        <div class="game flex">
            <a href="{{ route('games.show', $game['slug']) }}" class="w-1/4">
                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover"
                     class="w-full hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="ml-4 w-3/4">
                <a href="{{ route('games.show', $game['slug']) }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
            </div>
        </div>
        @empty
        @foreach(range(1,3) as $game)
            <div class="game flex align-content-center">
                <div class="w-1/4">
                    <div class="bg-gray-800 w-full h-20">
                    </div>
                </div>
                <div class="ml-4 w-3/4">
                    <div
                        class="block text-base rounded w-full leading-tight text-transparent text-lg bg-gray-800 mt-4">
                        Title
                    </div>
                    <p class="text-transparent inline-block bg-gray-700 rounded mt-2">
                        PS4, PC, Switch
                    </p>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
