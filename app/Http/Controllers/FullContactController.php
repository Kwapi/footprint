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
        $email_encoded = urlencode($email);
        $url = "https://api.fullcontact.com/v2/person.json?email=".$email_encoded;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


        $information = curl_exec($ch);
        curl_close($ch);
        $json = json_encode($information);

        Storage::disk('local')->put($email_encoded.'.json', $information);

    }
}
