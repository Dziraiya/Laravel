<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;

class AccountController extends Controller
{
    public function index()
    {
    }

    public function __invoke()
    {
        $name = Auth::check() ? Auth::user()->name : 'Гость';

        return 'Привет,' . $name . "<br><a href='" . route('admin.news.index') . "'>Перейти в админку</a>";
    }
}
