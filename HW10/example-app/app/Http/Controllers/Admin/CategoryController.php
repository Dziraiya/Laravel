<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use Eloquent;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('admin.categories.index', [
            'categories' => $categories,
            'count' => Category::count()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CreateCategory $request)
    {
        $category = Category::create($request->validated());
        if ($category) {
            return redirect()->route('admin.categories.index')
                             ->with('success', __('messages.admin.news.create.success'));
        }

        return back()->with('error', __('messages.admin.news.create.fail'));
    }

    public function show($id)
    {
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(UpdateCategory $request, Category $category)
    {
        $status = $category->fill($request->validated())->save();
        if ($status) {
            return redirect()->route('admin.categories.index')
                             ->with('success', __('messages.admin.news.update.success'));
        }

        return back()->with('error', __('messages.admin.news.update.fail'));
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (Exception $e) {
            echo $e;
        }

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Запись удалена!');
    }
}
