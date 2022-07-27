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
    $comics = config("comics");

    return view('comics.index', compact("comics"));
})->name("comics.index");

Route::get('/{id}', function ($id) {
    $comics = config("comics");

    $foundComic = null;

    foreach ($comics as $card) {
        if ($card["id"] === (int)$id) {
            $foundComic = $card;
            break;
        }
    }

    if (is_null($foundComic)) {
        abort("404");
    }

    return view(
        "comics.show",
        [
            "card" => $foundComic
        ]
    );
})->name("comics.show");
