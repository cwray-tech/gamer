<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{
    public $comingSoon = [];

    public function loadComingSoon()
    {
        $now = Carbon::now()->timestamp;
        $oneMonthFromNow = Carbon::now()->addMonth()->timestamp;

        $this->comingSoon = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, slug, first_release_date, popularity, summary, platforms.abbreviation, rating, cover.url;
             where platforms = (48,49,138,6)
             & first_release_date > {$now}
             & first_release_date < {$oneMonthFromNow};
             sort first_release_date desc;
             limit 4;"
        ])->get('https://api-v3.igdb.com/games/')->json();
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
