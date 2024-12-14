<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    Redis::incr('loading-page-views');
    return view('welcome');
});
