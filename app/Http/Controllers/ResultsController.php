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
        $iconPath = '/build/img/icons/';
        $bannerPath = '/build/img/social/';
        $networks = [];

        $facebook = [
            'icon' => $iconPath . 'facebook.svg',
            'url' => 'https://www.facebook.com/kirstyjarvis',
            'name' => 'Facebook',
            'created_date' => 'October 31, 16',
            'img' => $bannerPath . 'facebook.jpg',
            'results' => 9000
        ];
        $networks[] = $facebook;

        $twitter = [
            'icon' => $iconPath . 'twitter.svg',
            'url' => 'https://twitter.com/KVCJarvis',
            'name' => 'Twitter',
            'created_date' => '30th March',
            'img' => $bannerPath . 'twitter.jpg',
            'results' => 9000
        ];
        $networks[] = $twitter;

        $linkedin = [
            'icon' => $iconPath . 'linkedin.svg',
            'url' => '',
            'name' => 'LinkedIn',
            'created_date' => '30th March',
            'img' => $bannerPath . 'linkedin.jpg',
            'results' => 9000
        ];
        $networks[] = $linkedin;

        $instagram = [
            'icon' => $iconPath . 'instagram.svg',
            'url' => '',
            'name' => 'Instagram',
            'created_date' => '30th March',
            'img' => $bannerPath . 'instagram.png',
            'results' => 9000
        ];
        $networks[] = $instagram;

        $soundcloud = [
            'icon' => $iconPath . 'soundcloud.svg',
            'url' => '',
            'name' => 'SoundCloud',
            'created_date' => '30th March',
            'img' => $bannerPath . '',
            'results' => 9000
        ];
        $networks[] = $soundcloud;

        return view('results', [
            'networks' => $networks
        ]);
    }
}
