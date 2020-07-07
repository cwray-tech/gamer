<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SimilarGames extends Component
{
    public $similarGames = [];
    public $slug;

    public function mount($game)
    {
        $this->slug = $game['slug'];
    }

    public function loadSimilarGames()
    {
        $game = Http::withHeaders(config('services.idgb'))
            ->withOptions([
                'body' => "fields similar_games.*, similar_games.platforms.abbreviation, similar_games.cover.url;
            where slug=\"{$this->slug}\";",
            ])->get('https://api-v3.igdb.com/games/')->json();
        $this->similarGames = $game[0]['similar_games'];
    }

    public function render()
    {
        return view('livewire.similar-games');
    }
}
