<div wire:init="loadPopularGames"
     class="popular-games overflow-hidden text-sm grid grid-cols-2  lg:grid-cols-5 gap-12 border-b border-gray-800 pb-16">
    @forelse($popularGames as $game)
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}"
                         alt="game cover"
                         class="hover:opacity-75 w-full transition ease-in-out duration-150">
                </a>
                @if(isset($game['rating']))
                    <div style="right:-20px; bottom: -20px"
                         class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full">{{ round($game['rating']). '%' }}</div>
                    </div>
                @endif
            </div>
            <a href=""
               class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{ $game['name'] }}</a>
            <p class="text-gray-400 mt-1">
                @foreach($game['platforms'] as $platform)
                    @if(array_key_exists('abbreviation', $platform))
                        {{ $platform['abbreviation'] }},
                    @endif
                @endforeach
            </p>
        </div>
    @empty
        @foreach(range(1,10) as $game)
            <div class="game mt-8">
                <div>
                    <div class="bg-gray-800 w-full h-56">
                    </div>
                </div>
                <div
                    class="block text-base rounded font-semibold leading-tight text-transparent text-lg bg-gray-700 mt-4">
                    Title
                </div>
                <p class="text-transparent inline-block bg-gray-700 rounded mt-2">
                    PS4, PC, Switch
                </p>
            </div>
        @endforeach
    @endforelse
</div>
