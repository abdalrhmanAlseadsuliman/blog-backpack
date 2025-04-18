<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use CrudTrait;
    protected $fillable = [
        'title',
        'content',
        'category_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
