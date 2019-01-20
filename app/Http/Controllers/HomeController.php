<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $movie = new Movie();

        $recommendations = $movie->getRecommended(Auth::id());

        return view('index');
    }

    public function home()
    {

      return view('home');
    }

    public function getRecommended()
    {

      
    }
}
