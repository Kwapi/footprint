<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FullContactController extends BaseController
{
    public function getInfoFromEmail(Request $request){

        $email = $request->input('email');
        $header = array("X-FullContact-APIKey:".env('FULLCONTACT_API_KEY'));
        $email = urlencode($email);
        $url = "https://api.fullcontact.com/v2/person.json?email=".$email;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        $information = curl_exec($ch);


        echo $information;
//        Storage::put('file.jpg', $contents)
    }
}
