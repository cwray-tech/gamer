@extends('.layouts.app')

@section('content')
    <div class="container px-4 mx-auto">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="/images/ff7.jpg" alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div style="right:-20px; bottom: -20px"
                         class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Game Name</a>
                <p class="text-gray-400 mt-1">Playstation 4</p>
            </div>

        </div>
        <div class="lg:flex my-10">
            <div class="recently-reviewed lg:w-3/4 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg md:flex p-6 shadow-md">
                        <div class="relative flex-none">
                            <a href="">
                                <img src="/images/ff7.jpg" alt="game cover"
                                     class="md:w-48 w-full hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div style="right:-20px; bottom: -20px"
                                 class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <div class="md:ml-12">
                            <a href="" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Game Name</a>
                            <p class="text-gray-400 mt-1">Playstation 4</p>
                            <p class="mt-6 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi eligendi explicabo nisi, nostrum odit officia qui quia reprehenderit totam ut voluptate! Accusamus amet animi deserunt dolorem ea eaque earum eos esse et eveniet excepturi, exercitationem illo ipsam iusto minus numquam odio officia quaerat quia quod repudiandae unde vero, vitae!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-8 mt-8">
                    <div class="game flex">
                        <a href="">
                            <img src="/images/cyberpunk.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="">
                            <img src="/images/cyberpunk.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">2020</div>
                        </div>
                    </div>

                </div>
                <h2 class="text-blue-500 uppercase mt-12 tracking-wide font-semibold">Coming Soon</h2>
                <div class="most-anticipated-container space-y-8 mt-8">
                    <div class="game flex">
                        <a href="">
                            <img src="/images/cyberpunk.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="">
                            <img src="/images/cyberpunk.jpg" alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">2020</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
