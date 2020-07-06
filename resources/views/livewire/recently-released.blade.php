<div wire:init="loadRecentlyReleased" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($recentlyReleased as $game)
        <div class="game bg-gray-800 rounded-lg md:flex p-6 shadow-md">
            <div class="relative flex-none">
                <a href="">
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
                <a href=""
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
        <div>
            Loading...
        </div>
    @endforelse
</div>
