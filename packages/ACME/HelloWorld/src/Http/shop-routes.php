<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    // all shop routes will be place here
    Route::view('/hello-world', 'helloworld::shop.index');
});

