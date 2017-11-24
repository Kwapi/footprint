<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FullContactController extends BaseController
{
    public function getInfoFromEmail(Request $request){

        $email = $request->input('email');
        $email_encoded = urlencode($email);

        $json_file_name = $email_encoded.'.json';

        $exists = Storage::disk('local')->exists($json_file_name);

        if(!$exists){
            $header = array("X-FullContact-APIKey:".env('FULLCONTACT_API_KEY'));
            $url = "https://api.fullcontact.com/v2/person.json?email=".$email_encoded;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


            $information = curl_exec($ch);
            curl_close($ch);

            $json = json_decode($information);

            if($json->status == 200){
                Storage::disk('local')->put($json_file_name, $information);

            }



            echo 'Retrieved';

            echo $information;
        }else{
            echo 'Loaded ';
            echo Storage::disk('local')->get($json_file_name);
        }



    }
}
