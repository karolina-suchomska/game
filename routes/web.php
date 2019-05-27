<?php

Route::get('/{any}', function () {
    return view('score');
})->where('any', '*');

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
