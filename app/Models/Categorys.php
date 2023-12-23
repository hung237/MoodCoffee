<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
        'slug'
    ];
    public function children()
    {
        return $this->hasMany(Categorys::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
