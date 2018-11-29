<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{
    
    /**
     * Store rating given by an user for a movie
     *
     */
    public function store(Request $request)
    {
        $movie_id = $request->movie_id;
        $user_id = $request->user_id;
        $rating = $request->rating;

        //return response()->json(['success'=>$request->all()]);
        Rating::updateOrCreate(['user_id' => $user_id, 'movie_id' => $movie_id], ['rating' => $rating]);
    }
}
