<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$articles = [
    0 => [
        'id' => 0,
        'title' => 'First article',
        'content' => 'This is the first article',
        'category' => 'news',
    ],
    1 => [
        'id' => 1,
        'title' => 'Second article',
        'content' => 'This is the second article',
        'category' => 'news',
    ],
    2 => [
        'id' => 2,
        'title' => 'Third article',
        'content' => 'This is the third article',
        'category' => 'news',
    ]
];



Route::view('/', 'home')->name('home');

Route::get('/articles', function () use ($articles) {
    return view('articles.index', [
        'data' => $articles
    ]);
})->name('articles');

Route::get('articles/add', function () {
    return view('articles.add');
})->name('article.add');

Route::get('articles/edit/{id}', function ($id) use ($articles) {
    return view('articles.edit',[
        'data' => $articles[$id]
    ]);
})->name('article.edit');


Route::delete('articles/{id}', function ($id) use ($articles) {
    dd();
})->name('article.delete');


Route::get('articles/{id}', function ($id) use ($articles) {
    return view('articles.article', [
        'data' => $articles[$id]
    ]);
})->name('article');


Route::post('articles/add', function (Request $request) use ($articles) {

    $article = [
        'id' => 0,
        'title' => $request->title,
        'content' => $request->content,
        'category' => $request->category,
    ];

    $articles[] = $article;
    $articles[] = $article;

    return redirect()->route('articles');
})->name('article.add');
