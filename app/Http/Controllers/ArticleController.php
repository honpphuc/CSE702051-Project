<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Video;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    

public function index()
{
    $articles = Article::orderBy('date_posted', 'desc')->get();
    $videos = Video::orderBy('date_posted', 'desc')->get();

    return view('profile.news.news', compact('articles', 'videos'));
}

}
