<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\AdminAccess;
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/about',action: function() {
    return view('about');
});

Route::get(uri: '/blog',action: function() {
    return view('blog');
});

Route::get(uri: '/Contact',action: function() {
    return view('Contact');
});

    Route::get('/blog/{id}/{category?}' , function ($post_id, $post_category="no category was defined"){
        return view('blog',[
            'post_id' =>$post_id,
            'post_category' =>$post_category

        ]);
});

Route::post(uri: '/contact' , action: function (Request $request){
    dd($request ->input());
});

GET /               Home
GET /articles       articles
GET /articles/{id}  articles.show

GET /articles/create  article.create 
POST/articles/store  article.store 
GET /articles/{id}/edit  article.edit 
PUT /articles/{id}  article.update 
DELETE /articles/{id} article.destroy


Route::get('/',function(){
    return view('home');
})->name('home');
/*
/*
GET /               home
GET /articles       articles.index
GET /articles/{id}  article.show

GET /articles/create   article.create
POST /articles/store   article.store
GET /articles/{id}/edit   article.edit
PUT /articles/{id}   article.update
DELETE /articles/{id}   article.destroy


$articles = [
    0 => [
        'id' => 0,
        'title' => 'First Article',
        'body' => 'This is the first article',

    ],
    1 => [
        'id' => 1,
        'title' => 'Second Article',
        'body' => 'This is the second article',
    ],
    2 => [
        'id' => 2,
        'title' => 'Third Article',
        'body' => 'This is the third article',
    ],
];


Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/articles', function () use ($articles) {
    return view('articles.index', [
        'data' => $articles
    ]);
})->name('articles.index');


Route::get('/articles/{id}', function ($id) use ($articles) {
    $article = $articles[$id];

    return view('articles.show', [
        'data' => $article
    ]);
})->name('articles.show')->where('id', '[0-9]+');

Route::get('/articles/create', function () {
    return view('articles.create');
})->name('articles.create');


Route::post('/articles/store', function (Request $request) use($articles) {
        $articles[]=[
            'id'=>sizeof($articles),
            'title'=>$request->title,
            'body'=>$request->body,
        ];

return redirect()->route('articles.index');

})->name('articles.store');


Route::get('/articles/{id}/edit', function ($id) use ($articles) {
    $article = $articles[$id];

    return view('articles.edit', [
        'data' => $article
    ]);
})->name('articles.edit')->where('id', '[0-9]+');



Route::put('/articles/update', function (Request $request) use($articles) {
    $article=$articles[$request->id];
    $article['title']=$request->title;
    $article['body']=$request->body;
    $articles[$request->id]=$article;


return redirect()->route('articles.index');

})->name('articles.update');

*/
Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/article/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/category/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/about', [BlogController::class, 'about'])->name('blog.about');


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('admin.articles.show');
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
    Route::put('/admin/articles/{id}', [ArticleController::class, 'update'])
        ->name('admin.articles.update');
});

Route::fallback(function () {
    return view('errors.404');
});











