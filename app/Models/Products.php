<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'description',
        'price',
        'category_id',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Categorys::class);
    }
}
