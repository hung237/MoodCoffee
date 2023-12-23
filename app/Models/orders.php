<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'total',
        'address',
        'name',
        'phone',
        'date',
        'status',
    ];
    public function status(){
        return $this->belongsTo(status_order::class, 'status_id');
    }
}
