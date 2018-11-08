<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Genre;

class MovieComposer
{
    
    protected $genres;

  
    public function __construct()
    {
        
        $this->genres = Genre::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $view->with('genres_global', $this->genres);
    }
}
