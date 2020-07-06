<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMostAnticipated()
    {
        $now = Carbon::now()->timestamp;
        $fourMonthsFromNow = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, first_release_date, popularity, summary, platforms.abbreviation, rating, cover.url;
             where platforms = (48,49,138,6)
             & first_release_date > {$now}
             & first_release_date < {$fourMonthsFromNow};
             sort popularity desc;
             limit 2;"
        ])->get('https://api-v3.igdb.com/games/')->json();
    }
    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
