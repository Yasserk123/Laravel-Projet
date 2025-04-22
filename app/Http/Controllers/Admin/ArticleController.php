<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Data\ArticlesData;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        $articles = ArticlesData::getArticles();

        return view('admin.index', compact('articles'));
    }

    /**
     * Display the specified article.
     */
    public function show(int $id)
    {
        $article = ArticlesData::getArticleById($id);

        if (!$article) {
            abort(404);
        }

        return view('admin.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     */
    public function edit(int $id)
    {
        $article = ArticlesData::getArticleById($id);

        if (!$article) {
            abort(404);
        }

        $categories = ArticlesData::getCategories();
        $tags = ArticlesData::getTags();

        return view('admin.edit', compact('article', 'categories', 'tags'));