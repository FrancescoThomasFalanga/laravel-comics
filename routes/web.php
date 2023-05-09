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
    
    $links = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];

    $infoSection = [
        [
            'img' => 'img/buy-comics-digital-comics.png',
            'title' => 'digital comics'
        ],
        [
            'img' => 'img/buy-comics-merchandise.png',
            'title' => 'dc merchandise'
        ],
        [
            'img' => 'img/buy-comics-subscriptions.png',
            'title' => 'subscription'
        ],
        [
            'img' => 'img/buy-comics-shop-locator.png',
            'title' => 'comic shop locator'
        ],
        [
            'img' => 'img/buy-dc-power-visa.svg',
            'title' => 'dc power visa'
        ],
    ];

    $comics = config('comics');

    return view('homepage', ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('homepage');
