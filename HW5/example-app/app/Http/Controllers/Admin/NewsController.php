<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $objNews = new News();
        $news = $objNews->getNews(TRUE);

        return view('admin.news.index', [
            'news' => $news,
            'count' => $objNews->getCount()
        ]);
    }

    public function create()
    {
        return view('admin.news.create', [
            //'newsList' => $this->newsList
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'newsName' => ['required']
        ]);

        $objNews = new News();

        $objNews->title = $request->input('newsName');
        $objNews->text = $request->input('newsText');
        $objNews->category_id = $request->input('category_id');
        $objNews->slug = $request->input('newsName');

        $objNews->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return 'Редактировать новость';
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
