<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function getCategories()
    {
        return DB::table($this->table)
            ->select(['id', 'title', 'created_at'])
            ->get();
        //return DB::select("SELECT id, title, created_at FROM categories");
    }

    public function getCategoryById(int $id)
    {
        return DB::selectOne("SELECT id, title, description FROM categories WHERE id = :id", ['id' => $id]);
    }
}
