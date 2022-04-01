<?php

namespace App\Models;

use App\Enums\NewsStatusEnum;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class News extends Model
{
    protected $table = 'news';

    public function getCount(): int
    {
        return DB::table($this->table)
                 ->select(['id', 'title', 'text', 'created_at'])
                 ->count();
    }

    public function getNews(bool $isAdmin = FALSE)
    {
        if (!$isAdmin) {
            return DB::table($this->table)
                     ->select(['id', 'title', 'text', 'created_at'])
                     ->where('status', NewsStatusEnum::PUBLISHED)
                     ->get();
        }

        return DB::table($this->table)
                 ->select(['id', 'title', 'text', 'created_at'])
                 ->get();
    }

    public function getNewsById(int $id)
    {
        return DB::table($this->table)
                 ->select(['id', 'title', 'text', 'created_at'])
                 ->find($id);
    }
}
