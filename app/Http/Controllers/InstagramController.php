<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class InstagramController extends BaseController
{
    public function getInfoFromUsername($username){

        $json_file_name = 'instagram_'.$username.'.json';
        $url = sprintf(  'https://www.instagram.com/%s/?__a=1',$username);

        echo $url;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


        $information = curl_exec($ch);


        curl_close($ch);

        $json = json_decode($information);
        Storage::disk('local')->put($json_file_name, $information);

        echo $information;

    }
}
