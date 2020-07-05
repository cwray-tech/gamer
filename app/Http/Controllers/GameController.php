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
        $now = Carbon::now()->timestamp;
        $fourMonthsFromNow = Carbon::now()->addMonths(4)->timestamp;
        $oneMonthFromNow = Carbon::now()->addMonth()->timestamp;

        $popularGames = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, first_release_date, popularity, platforms.abbreviation, rating, cover.url;
            where platforms = (48,49,138,6)
            & (first_release_date >= {$before}
            & first_release_date < {$now});
            sort popularity desc;"
        ])->get('https://api-v3.igdb.com/games/')->json();

        $recentlyReleased = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, first_release_date, popularity, summary, platforms.abbreviation, rating, cover.url;
             where platforms = (48,49,138,6) & first_release_date < {$now};
             sort first_release_date desc;
             limit 2;"
        ])->get('https://api-v3.igdb.com/games/')->json();

        $mostAnticipated = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, first_release_date, popularity, summary, platforms.abbreviation, rating, cover.url;
             where platforms = (48,49,138,6)
             & first_release_date > {$now}
             & first_release_date < {$fourMonthsFromNow};
             sort popularity desc;
             limit 2;"
        ])->get('https://api-v3.igdb.com/games/')->json();

        $comingSoon = Http::withHeaders(config('services.idgb'))->withOptions([
            'body' => "fields name, first_release_date, popularity, summary, platforms.abbreviation, rating, cover.url;
             where platforms = (48,49,138,6)
             & first_release_date > {$now}
             & first_release_date < {$oneMonthFromNow};
             sort first_release_date desc;
             limit 2;"
        ])->get('https://api-v3.igdb.com/games/')->json();

        return view('.index', [
            'popularGames' => $popularGames,
            'recentlyReleased' => $recentlyReleased,
            'mostAnticipated' => $mostAnticipated,
            'comingSoon' => $comingSoon
        ]);
    }

    public function show()
    {
        return view('.show');
    }
}
