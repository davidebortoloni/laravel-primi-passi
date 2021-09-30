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
    $data = [
        'links' => [
            [
                'text' => 'Home',
                'view' => 'home',
                'active' => true,
            ],
            [
                'text' => 'Services',
                'view' => 'services',
                'active' => false,
            ],
            [
                'text' => 'About Us',
                'view' => 'about_us',
                'active' => false,
            ],
            [
                'text' => 'News',
                'view' => 'news',
                'active' => false,
            ],
            [
                'text' => 'Account',
                'view' => 'account',
                'active' => false,
            ],
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/services', function () {
    $data = [
        'links' => [
            [
                'text' => 'Home',
                'view' => 'home',
                'active' => false,
            ],
            [
                'text' => 'Services',
                'view' => 'services',
                'active' => true,
            ],
            [
                'text' => 'About Us',
                'view' => 'about_us',
                'active' => false,
            ],
            [
                'text' => 'News',
                'view' => 'news',
                'active' => false,
            ],
            [
                'text' => 'Account',
                'view' => 'account',
                'active' => false,
            ],
        ],
    ];
    return view('services', $data);
})->name('services');

Route::get('/about_us', function () {
    $data = [
        'links' => [
            [
                'text' => 'Home',
                'view' => 'home',
                'active' => false,
            ],
            [
                'text' => 'Services',
                'view' => 'services',
                'active' => false,
            ],
            [
                'text' => 'About Us',
                'view' => 'about_us',
                'active' => true,
            ],
            [
                'text' => 'News',
                'view' => 'news',
                'active' => false,
            ],
            [
                'text' => 'Account',
                'view' => 'account',
                'active' => false,
            ],
        ],
    ];
    return view('about_us', $data);
})->name('about_us');

Route::get('/news', function () {
    $data = [
        'links' => [
            [
                'text' => 'Home',
                'view' => 'home',
                'active' => false,
            ],
            [
                'text' => 'Services',
                'view' => 'services',
                'active' => false,
            ],
            [
                'text' => 'About Us',
                'view' => 'about_us',
                'active' => false,
            ],
            [
                'text' => 'News',
                'view' => 'news',
                'active' => true,
            ],
            [
                'text' => 'Account',
                'view' => 'account',
                'active' => false,
            ],
        ],
    ];
    return view('news', $data);
})->name('news');

Route::get('/account', function () {
    $data = [
        'links' => [
            [
                'text' => 'Home',
                'view' => 'home',
                'active' => false,
            ],
            [
                'text' => 'Services',
                'view' => 'services',
                'active' => false,
            ],
            [
                'text' => 'About Us',
                'view' => 'about_us',
                'active' => false,
            ],
            [
                'text' => 'News',
                'view' => 'news',
                'active' => false,
            ],
            [
                'text' => 'Account',
                'view' => 'account',
                'active' => true,
            ],
        ],
    ];
    return view('account', $data);
})->name('account');
