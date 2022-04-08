<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNews;
use App\Http\Requests\UpdateNews;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()

    {
        $news = News::select(['id', 'title', 'text', 'created_at'])->get();

        return view('admin.news.index', [
            'news' => $news,
            'count' => News::count()
        ]);
    }

    public function create()
    {
        return view('admin.news.create', [
            //'newsList' => $this->newsList
        ]);
    }

    public function store(CreateNews $request)
    {
        $news = News::create($request->validated());
        if ($news) {
            return redirect()->route('admin.news.index')
                             ->with('success', __('messages.admin.news.create.success'));
        }

        return back()->with('error', __('messages.admin.news.create.fail'));
    }

    public function show(News $news)
    {
        //
    }

    public function edit(News $news)
    {
        $categories = Category::all();

        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    public function update(UpdateNews $request, News $news)
    {
        $news = $news->fill($request->validated());
        $news->category_id = $request->validated()['category_id'];

        if ($news->save()) {
            return redirect()->route('admin.news.index')
                             ->with('success', __('messages.admin.news.update.success'));
        }

        return back()->with('error', __('messages.admin.news.update.fail'));
    }

    public function destroy(News $news)
    {
        return 'asd';
    }
}
