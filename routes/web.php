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
    
    $data = config('data');


    $comics = config('comics');

    return view('homepage', compact('data', 'comics'));
})->name('homepage');

// ROUTE PER I PERSONAGGI
Route::get('/characters', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('characters', compact('data', 'comics'));
})->name('characters');
// /ROUTE PER I PERSONAGGI


// ROUTE PER I LIBRI
Route::get('/comics', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('comics', compact('data', 'comics'));
})->name('comics');
// /ROUTE PER I LIBRI


// ROUTE PER I FILM
Route::get('/movies', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('movies', compact('data', 'comics'));
})->name('movies');
// /ROUTE PER I FILM


// ROUTE PER LE SERIE
Route::get('/tv', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('tv', compact('data', 'comics'));
})->name('tv');
// /ROUTE PER LE SERIE


// ROUTE PER I GIOCHI
Route::get('/games', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('games', compact('data', 'comics'));
})->name('games');
// /ROUTE PER I GIOCHI


// ROUTE PER I COLLEZIONABILI
Route::get('/collectibles', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('collectibles', compact('data', 'comics'));
})->name('collectibles');
// ROUTE PER I COLLEZIONABILI


// ROUTE PER I VIDEO
Route::get('/videos', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('videos', compact('data', 'comics'));
})->name('videos');
// /ROUTE PER I VIDEO


// ROUTE PER I FAN
Route::get('/fans', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('fans', compact('data', 'comics'));
})->name('fans');
// /ROUTE PER I FAN


// ROUTE PER LE NEWS
Route::get('/news', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('news', compact('data', 'comics'));
})->name('news');
// /ROUTE PER LE NEWS


// ROUTE PER LO SHOP
Route::get('/shop', function () {
    
    $data = config('data');


    $comics = config('comics');

    return view('shop', compact('data', 'comics'));
})->name('shop');
// /ROUTE PER LO SHOP

// ---------------------------------- /route per la visualizzazione principale ---------------------------------- //



// ---------------------------------- route per i singoli comic ---------------------------------- //

// in questa route sono presenti le stesse "proprietà" che ho passato nelle altre Route, solo che vi è un metodo in più
// request() che mi consentirà di andare a prendere dalla mia query l'index di ciò che sto andando a cliccare

// ROUTE PER I SINGOLI COMIC
Route::get('/action-comics', function () {
    
    $data = config('data');

    $comics = config('comics');

    $index = request()->index;
    

    return view('actionComics', compact('data', 'comics', 'index'));
})->name('Action Comics');
// /ROUTE PER I SINGOLI COMIC

// ---------------------------------- /route per i singoli comic ---------------------------------- //