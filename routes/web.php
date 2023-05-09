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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('homepage', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('homepage');

Route::get('/characters', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('characters', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('characters');

Route::get('/comics', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('comics', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('comics');

Route::get('/movies', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('movies', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('movies');

Route::get('/tv', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('tv', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('tv');

Route::get('/games', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('games', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('games');

Route::get('/collectibles', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('collectibles', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('collectibles');

Route::get('/videos', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('videos', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('videos');

Route::get('/fans', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('fans', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('fans');

Route::get('/news', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('news', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('news');

Route::get('/shop', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    return view('shop', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection]);
})->name('shop');



// ROUTE PER I SINGOLI COMIC
Route::get('/action-comics', function () {
    
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

    $dcComicsLinks = [
        "Character",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News",
    ];

    $dcLinks = [
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choises",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact us",
    ];

    $sitesLinks = [
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa",
    ];

    $shopLinks = [
        "Shop DC",
        "Shop DC Collectibles"
    ];

    $data = [
        'dcComicsLinks' => $dcComicsLinks,
        'dcLinks' => $dcLinks,
        'sitesLinks' => $sitesLinks,
        'shopLinks' => $shopLinks
    ];


    $comics = config('comics');

    $index = request()->index;
    

    return view('actionComics', $data, ['links' => $links, 'comics' => $comics, 'infoSection' => $infoSection, 'index' => $index]);
})->name('Action Comics');
