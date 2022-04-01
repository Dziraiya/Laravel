<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = (new Category())->getCategories();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return 'Добавление категорий';
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        return 'Редактирование категорий';
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
