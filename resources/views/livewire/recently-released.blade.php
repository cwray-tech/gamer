<div wire:init="loadRecentlyReleased" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($recentlyReleased as $game)
        <div class="game bg-gray-800 rounded-lg md:flex p-6 shadow-md">
            <div class="relative flex-none">
                <a href="{{ route('games.show', $game['slug']) }}">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                         alt="game cover"
                         class="md:w-48 w-full hover:opacity-75 transition ease-in-out duration-150">
                </a>
                @if(isset($game['rating']))
                    <div style="right:-20px; bottom: -20px"
                         class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full">{{ round($game['rating']). '%' }}</div>
                    </div>
                @endif
            </div>
            <div class="md:ml-12">
                <a href="{{ route('games.show', $game['slug']) }}"
                   class="block text-lg font-semiboindex.blade.phpld leading-tight hover:text-gray-400 mt-4">{{ $game['name']}}</a>
                <p class="text-gray-400 mt-1">
                    @foreach($game['platforms'] as $platform)
                        @if(array_key_exists('abbreviation', $platform))
                            {{ $platform['abbreviation'] }},
                        @endif
                    @endforeach
                </p>
                <p class="mt-6 text-gray-400">
                    {{ $game['summary']  }}
                </p>
            </div>
        </div>
        @empty
        @foreach(range(1,3) as $game)
            <div class="game bg-gray-800 rounded-lg md:flex p-6 shadow-md">
                <div class="relative flex-none">
                    <div class="bg-gray-700 w-48 h-56">
                    </div>
                </div>
                <div class="md:ml-12">
                    <div
                        class="block text-base rounded w-full leading-tight text-transparent text-lg bg-gray-600 mt-4">
                        Title will be here
                    </div>
                    <p class="text-transparent inline-block bg-gray-700 rounded mt-2">
                        PS4, PC, Switch
                    </p>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
