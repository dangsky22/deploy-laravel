<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// PWA Manifest Route
Route::get('/manifest.json', function () {
    return response()->json([
        'name' => 'My Filament App',
        'short_name' => 'FilamentApp',
        'description' => 'My awesome Filament application',
        'start_url' => '/',
        'display' => 'standalone',
        'theme_color' => '#f59e0b',
        'background_color' => '#ffffff',
        'orientation' => 'portrait-primary',
        'scope' => '/',
        'icons' => [
            [
                'src' => '/images/icons/icon-72x72.png',
                'sizes' => '72x72',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-96x96.png',
                'sizes' => '96x96',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-128x128.png',
                'sizes' => '128x128',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-144x144.png',
                'sizes' => '144x144',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-152x152.png',
                'sizes' => '152x152',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-192x192.png',
                'sizes' => '192x192',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-384x384.png',
                'sizes' => '384x384',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ],
            [
                'src' => '/images/icons/icon-512x512.png',
                'sizes' => '512x512',
                'type' => 'image/png',
                'purpose' => 'maskable any'
            ]
        ]
    ])->header('Content-Type', 'application/manifest+json');
});

// PWA Service Worker Route
Route::get('/sw.js', function () {
    return response()->view('pwa.sw', [], 200, [
        'Content-Type' => 'application/javascript',
        'Service-Worker-Allowed' => '/'
    ]);
});

// Route dashboard admin
Route::get('/admin/dashboard', function () {
    return view('admin-dashboard');
});

// Route forgot password
Route::get('/forgot', function () {
    return view('forgot');
});

// Route dashboard untuk tampilan utama setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route splash untuk tampilan splash screen
Route::get('/splash', function () {
    return view('splash');
});

// Route login untuk tampilan login
Route::get('/login', function () {
    return view('login');
});

// Route signup untuk tampilan pendaftaran
Route::get('/signup', function () {
    return view('signup');
});

// Route utama
Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::post('/login', [LoginController::class, 'login']);