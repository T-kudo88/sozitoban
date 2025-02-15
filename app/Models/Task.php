<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'area',
        'title',
        'description',
        'completed',
        'created_at',
        'updated_at',
        'number',  // 追加
        'name',    // 追加
        'address', // 追加
        'position' // 追加
    ];
}
