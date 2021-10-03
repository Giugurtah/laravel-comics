<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'footerNav' => [
            [
                'name' => 'facebook',
                'link' => 'footer-facebook.png'
            ],
            [
                'name' => 'twitter',
                'link' => 'footer-twitter.png'
            ],
            [
                'name' => 'youtube',
                'link' => 'footer-youtube.png'
            ],
            [
                'name' => 'pinterest',
                'link' => 'footer-pinterest.png'
            ],
            [
                'name' => 'periscope',
                'link' =>  'footer-periscope.png'
            ]
            ]
        ];
    return view('layouts/main', $data);
});



