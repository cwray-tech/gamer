@extends('.layouts.app')

@section('content')
    <div class="container px-4 mx-auto">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="">
                        <img src="/images/search.svg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div style="right:-20px; bottom: -20px" class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                    </div>
                </div>
                <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Game Name</a>
                <p class="text-gray-400 mt-1">Playstation 4</p>
            </div>

        </div>
        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi eligendi explicabo nisi, nostrum odit officia qui quia reprehenderit totam ut voluptate! Accusamus amet animi deserunt dolorem ea eaque earum eos esse et eveniet excepturi, exercitationem illo ipsam iusto minus numquam odio officia quaerat quia quod repudiandae unde vero, vitae!
            </div>
            <div class="most-anticipated w-1/4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aliquid animi, architecto asperiores atque cumque dignissimos dolorem doloribus earum, error esse excepturi ipsa ipsam iste itaque labore libero magni molestiae natus necessitatibus, nemo non nostrum odio odit omnis porro possimus quibusdam quo recusandae repudiandae similique veritatis vero voluptatem voluptatum!
            </div>
        </div>
    </div>

@endsection
