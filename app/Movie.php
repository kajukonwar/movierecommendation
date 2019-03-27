<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;

class Movie extends Model
{
    private $rec_limit = 15;

    public $timestamps = false;

    private $rec_url = 'http://webizone12.pythonanywhere.com/recommendations';

    public function getRecommended($user_id)
    {   
        $url = $this->rec_url.'/'.$user_id;

        //$client = new \GuzzleHttp\Client();

        //$res = $client->request('GET', $url);

        //$res = $client->request('GET', $user_id);


    }


    public function getPopular()
    {


    }

    public function getMostViewed()
    {

      
    }


}
