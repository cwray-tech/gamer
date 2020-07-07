<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $now = Carbon::now()->timestamp;
        $this->popularGames = Cache::remember('popular-games', 7, function () use ($before, $now) {
            return Http::withHeaders(config('services.idgb'))->withOptions([
                'body' => "fields name, slug, first_release_date, popularity, platforms.abbreviation, rating, cover.url;
            where platforms = (48,49,138,6)
            & (first_release_date >= {$before}
            & first_release_date < {$now});
            sort popularity desc;"
            ])->get('https://api-v3.igdb.com/games/')->json();
        });
    }

    public function render()
    {
        return view('livewire.popular-games', [
            $this->popularGames
        ]);
    }
}
