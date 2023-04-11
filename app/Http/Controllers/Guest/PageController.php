<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {

        $movies = Movie::where('id', '>=', 0)
            ->orderBy('vote', 'desc')
            ->get();
        // dd($movies);

        $data = [
            'movies' => $movies,
        ];


        return view('guest.homepage', $data);
    }
}
