<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Bitwiseph\InstagramMedia\Http\Controllers'],function(){
    Route::get('instagram/posts', 'InstagramController@index')->name('insta.show');
});

