<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $welcome = "🏠 Benvenuto nella Homepage 🏠";
    return view('home', compact("welcome"));
});

Route::get('/products', function () {
    $welcome = "1️⃣ - Benvenuto nella pagina Prodotti";
    return view('products', compact("welcome"));
});

Route::get('/contacts', function () {
    $welcome = "2️⃣ - Benvenuto nella pagina Contatti";
    return view('contacts', compact("welcome"));
});

Route::get('/aboutus', function () {
    $welcome = "3️⃣ - Benvenuto nella pagina Crediti";
    return view('aboutus', compact("welcome"));
});
