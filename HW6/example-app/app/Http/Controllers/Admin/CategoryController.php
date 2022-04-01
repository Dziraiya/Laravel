<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Eloquent;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_visible', TRUE)->get();

        return view('admin.categories.index', [
            'categories' => $categories,
            'count' => Category::count()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['title', 'description', 'is_visible']);
        $category = Category::create($data);
        if ($category) {
            return redirect()->route('admin.categories.index')
                             ->with('success', 'Запись успешно добавлена!');
        }

        return back()->with('error', 'Не удалось добавить запись');
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

    public function update(Request $request, Category $category)
    {
        $data = $request->only(['title', 'description', 'is_visible']);
        $category = $category->fill($data)->save();
        if ($category) {
            return redirect()->route('admin.categories.index')
                             ->with('success', 'Запись успешно изменена!');
        }

        return back()->with('error', 'Не удалось изменить запись');
    }

    /**
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Запись удалена!');
    }
}
