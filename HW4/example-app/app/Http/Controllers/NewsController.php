<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('global.news', [
            'newsList' => $this->newsList,
        ]);
    }

    public function show(int $id)
    {
        return view('global.show', ['news' => $id]);
    }
}
