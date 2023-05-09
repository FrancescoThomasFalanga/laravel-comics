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


// ---------------------------------- route per la visualizzazione principale ---------------------------------- //

// in queste route sono presenti le pagine principali dell'applicazione le quali contengono rispettivamente array, array di oggetti e passaggio db:

/*

1) $links = servono per stampare in pagina le varie PAGINE disponibili dell'applicazione
2) $infoSection = servono per stampare le "card" che riguardano il sito in se: merchandise, cose digitali, metodi di pagamento ecc...
3) $data = un array che contiene rispettivamente: $dcComicsLinks, $dcLinks, $sitesLinks e $shopLinks; che servono per stampare in pagina il mio upperFooter
4) $comics = tramite il metodo config() vado a pescare nella mia cartella config il database che mi stamperà in pagina i vari comics

*/

// ROUTE PER L'HOMEPAGE
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

// ROUTE PER I PERSONAGGI
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
// /ROUTE PER I PERSONAGGI


// ROUTE PER I LIBRI
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
// /ROUTE PER I LIBRI


// ROUTE PER I FILM
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
// /ROUTE PER I FILM


// ROUTE PER LE SERIE
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
// /ROUTE PER LE SERIE


// ROUTE PER I GIOCHI
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
// /ROUTE PER I GIOCHI


// ROUTE PER I COLLEZIONABILI
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
// ROUTE PER I COLLEZIONABILI


// ROUTE PER I VIDEO
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
// /ROUTE PER I VIDEO


// ROUTE PER I FAN
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
// /ROUTE PER I FAN


// ROUTE PER LE NEWS
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
// /ROUTE PER LE NEWS


// ROUTE PER LO SHOP
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
// /ROUTE PER LO SHOP

// ---------------------------------- /route per la visualizzazione principale ---------------------------------- //



// ---------------------------------- route per i singoli comic ---------------------------------- //

// in questa route sono presenti le stesse "proprietà" che ho passato nelle altre Route, solo che vi è un metodo in più
// request() che mi consentirà di andare a prendere dalla mia query l'index di ciò che sto andando a cliccare

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
// /ROUTE PER I SINGOLI COMIC

// ---------------------------------- /route per i singoli comic ---------------------------------- //