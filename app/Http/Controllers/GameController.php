<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function index()
    {
        return view('.index');
    }

    public function show($slug)
    {
        $game = Http::withHeaders(config('services.idgb'))
            ->withOptions([
            'body' => "fields *,screenshots.url, cover.url, platforms.abbreviation, genres.name, videos, involved_companies.company.name;
            where slug=\"{$slug}\";",
        ])->get('https://api-v3.igdb.com/games/')->json();

        abort_if(!$game, 404);
        return view('.show', ['game' => $game[0]]);
    }
}
