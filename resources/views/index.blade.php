@extends('.layouts.app')

@section('content')
    <div class="container px-4 mx-auto">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <div
            class="popular-games overflow-hidden text-sm grid grid-cols-2  lg:grid-cols-5 gap-12 border-b border-gray-800 pb-16">
            @foreach($popularGames as $game)
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
            @endforeach
        </div>
        <div class="lg:flex my-10">
            <div class="recently-reviewed lg:w-3/4 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Released</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @foreach($recentlyReleased as $game)
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
                    @endforeach
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-8 mt-8">
                    @foreach($mostAnticipated as $game)
                    <div class="game flex">
                        <a href="">
                            <img src="{{ $game['cover']['url'] }}" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">{{ $game['name'] }}</a>
                            <div class="text-gray-400 text-sm mt-1">2020</div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <h2 class="text-blue-500 uppercase mt-12 tracking-wide font-semibold">Coming Soon</h2>
                <div class="most-anticipated-container space-y-8 mt-8">
                    @foreach($comingSoon as $game)
                    <div class="game flex">
                        <a href="" class="w-1/4">
                            <img src="{{ $game['cover']['url'] }}" alt="game cover"
                                 class="w-full hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">{{ $game['name'] }}</a>
                            <div class="text-gray-400 text-sm mt-1">2020</div>
                        </div>
                    </div>
@endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
