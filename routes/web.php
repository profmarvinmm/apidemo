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
    return view('welcome');
});

Route::get( '/generateArtist/{count}', function ( $count ) {
    echo "Generating $count artists via factory...<br>";
    factory( \App\Artist::class )->times( $count )->create();
    echo "$count artists successfully generated!<br>";
} );

Route::get( '/generateSong/{count}', function ( $count ) {
    echo "Generating $count songs via factory...<br>";
    factory( \App\Song::class )->times( $count )->create();
    echo "$count songss successfully generated!<br>";
} );

Route::get('/getArtist/{aid}', function($aid){
    $theArtist = \App\Artist::find($aid);
    $theArtistsSongs = $theArtist->songs;
    echo json_encode($theArtist);
    echo json_encode($theArtistsSongs);
});
