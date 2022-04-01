<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = (new News())->getNews();
        return view('global.news', [
            'news'=> $news
        ]);
    }

    public function show(int $id)
    {
         $news = (new News())->getNewsById($id);
        return view('global.show', ['news' => $news]);
    }
}
