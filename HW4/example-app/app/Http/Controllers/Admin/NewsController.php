<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index', [
            'newsList' => $this->newsList
        ]);
    }

    public function create()
    {
        return view('admin.news.create', [
            'newsList' => $this->newsList
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'newsName' => ['required']
        ]);
        $title = $request->input('newsName');
        //dd($title);


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return 'Редатировать новость';
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
