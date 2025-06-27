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
    // Lấy tất cả bài viết, sắp xếp theo lượt xem giảm dần
    $allArticles = Article::orderByDesc('views')->get();

    // Lấy 2 bài nổi bật nhất
    $featured = $allArticles->take(2);

    // Các bài còn lại, phân trang (6 bài mỗi trang)
    $articles = $allArticles->slice(2)->values();
    $perPage = 6;
    $currentPage = request('page', 1);
    $pagedArticles = new \Illuminate\Pagination\LengthAwarePaginator(
        $articles->forPage($currentPage, $perPage),
        $articles->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    // Lấy video và phân trang
    $videos = Video::orderByDesc('date_posted')->paginate(4);

    return view('profile.news.news', [
        'featured' => $featured,
        'articles' => $pagedArticles,
        'videos' => $videos,
    ]);
}

}
