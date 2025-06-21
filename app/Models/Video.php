<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Video extends Model
{
    use HasFactory;
public function index()
{
    $articles = Article::orderBy('date_posted', 'desc')->get();
    $videos = Video::orderBy('date_posted', 'desc')->get();

    return view('profile.news.news', compact('articles', 'videos'));
}

}
