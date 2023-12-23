<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_order extends Model
{
    use HasFactory;
    protected $table = 'status_order';
    public function orders(){
        return $this->hasMany(orders::class, 'status_id');
    }
}
