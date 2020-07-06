<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReleased extends Component
{
    public $recentlyReleased = [];
    public function loadRecentlyReleased()
    {
        $now = Carbon::now()->timestamp;

        $this->recentlyReleased = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, first_release_date, popularity, summary, platforms.abbreviation, rating, cover.url;
             where platforms = (48,49,138,6) & first_release_date < {$now};
             sort first_release_date desc;
             limit 2;"
        ])->get('https://api-v3.igdb.com/games/')->json();
    }

    public function render()
    {
        return view('livewire.recently-released');
    }
}
