@extends('.layouts.app')

@section('content')
    <div class="container px-4 mx-auto">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <livewire:popular-games>

        <div class="lg:flex my-10">
            <div class="recently-reviewed lg:w-3/4 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Released</h2>
                <livewire:recently-released>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <livewire:most-anticipated>
                <h2 class="text-blue-500 uppercase mt-12 tracking-wide font-semibold">Coming Soon</h2>
                <livewire:coming-soon>
            </div>
        </div>
    </div>

@endsection
