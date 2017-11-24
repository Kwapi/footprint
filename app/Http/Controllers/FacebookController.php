<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FacebookController extends BaseController
{
    public function getInfoFromID($id){


        $default_access_token = env('FB_APP_ID').'|'.env('FB_APP_SECRET');

        $fb = new \Facebook\Facebook([
            'app_id' => env('FB_APP_ID'),
            'app_secret' => env('FB_APP_SECRET'),
            'default_graph_version' => 'v2.10',
            'default_access_token' => $default_access_token
        ]);

        echo $default_access_token;

        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/'.$id.'/feed');
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }


        echo var_dump($response->getGraphNode());

//        echo $user->getEmail();
//        echo 'Logged in as ' . $user->getName();

    }
}
