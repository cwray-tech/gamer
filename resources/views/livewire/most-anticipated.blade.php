<div wire:init="loadMostAnticipated" class="most-anticipated-container space-y-8 mt-8">
    @forelse($mostAnticipated as $game)
        <div class="game flex align-content-center">
            <a href="" class="w-1/4">
                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover"
                     class="w-full hover:opacity-75 transition ease-in-out duration-150">
            </a>
            <div class="ml-4 w-3/4">
                <a href="" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
            </div>
        </div>
        @empty
        <div>
            Loading...
        </div>
    @endforelse

</div>