<?php

namespace App\Http\Controllers;

use App\Enums\NewsStatusEnum;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')
                    ->where('status', NewsStatusEnum::PUBLISHED)
                    ->get();

        return view('global.news', [
            'news' => $news
        ]);
    }

    public function show(int $id)
    {
        //$news = (new News())->getNewsById($id);
        $news = News::findOrFail($id);

        return view('global.show', ['news' => $news]);
    }
}
