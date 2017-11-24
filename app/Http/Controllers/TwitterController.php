<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TwitterController extends BaseController
{
    public function getLastSevenTweets($handle){


            $header = array("Authorization:Bearer ".env('TWITTER_BEARER_TOKEN'));
            $url = "https://api.twitter.com/1.1/search/tweets.json?q=@".$handle;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


            $information = curl_exec($ch);
            curl_close($ch);

//            $json = json_decode($information);

        $json_file_name = 'twitter_'.$handle.'.json';
            Storage::disk('local')->put($json_file_name, $information);

            return $information;
    }
}
