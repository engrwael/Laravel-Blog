<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('create/{locale}', function ($locale) {
    $category = new Category();
    $category->parent = 1;


    foreach (['en', 'nl', 'fr', 'de'] as $locale) {
        $category->translateOrNew($locale)->name = "Title {$locale}";
        $category->translateOrNew($locale)->description = "Description {$locale}";
    }
    $category->save();
    echo 'Created an Category with some translations!';
});


Route::get('/en/to/be/2', function (Request $request) {
    return !array_key_exists($request->segment(1), config('translatable.locales'));
});

Route::get('{locale}', function ($locale) {
    app()->setLocale($locale);
    $category = Category::first();
    return $category;
});