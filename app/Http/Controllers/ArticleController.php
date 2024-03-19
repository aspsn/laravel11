<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Inertia;

class ArticleController extends Controller
{
    function index()
    {
        return Inertia::render('Article', [
            'articles' => Article::latest()->get()
        ]);
    }
}
