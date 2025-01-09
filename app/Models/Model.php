<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    protected $fillable = [
        'name',
        'description',
        'date_of_birth',
        'height',
        'shoe_size',
        'category_id',
        'picture',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
