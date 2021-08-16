<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    // テーブル名
    protected $table = 'boards';

    // 可変項目
    protected $fillable =
    [
        'model',
        'purpose',
        'userid',
        'characters',
        'rank',
        'level',
        'numberp',
        'message'
    ];
}
