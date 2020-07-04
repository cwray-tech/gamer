<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function index()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        $popularGames = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => 'fields name, first_release_date, popularity, platforms.abbreviation, rating, cover.url;
            where platforms = (48,49,138,6);
            sort popularity desc;'
        ])->get('https://api-v3.igdb.com/games/')->json();

        return view('.index', [
            'popularGames' => $popularGames
        ]);
    }
    public function show()
    {
        return view('.show');
    }
}
