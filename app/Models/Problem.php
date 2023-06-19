<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;

    protected $fillable = [
        'pstyle',
        'answer_text',
        'pre_answer',
        'correct_answer',
        'ganre_num',
        'province_num',
        'level_num',
    ];
}
