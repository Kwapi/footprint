<?php

namespace App\Http\Controllers;

class ResultsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showResults() {
        $networks = [];

        $facebook = [
            'icon' => '',
            'url' => '',
            'name' => 'Facebook',
            'created_date' => '30th March',
            'img' => '/build/img/img.jpeg'
        ];
        $networks[] = $facebook;

        $twitter = [
            'icon' => '',
            'url' => '',
            'name' => 'Twitter',
            'created_date' => '30th March',
            'img' => '/build/img/img.jpeg'
        ];

        return view('results', $networks);
    }
}
