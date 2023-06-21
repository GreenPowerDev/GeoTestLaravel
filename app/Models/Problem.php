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

    public function level()
    {
        return $this->belongsTo('App\Models\Level','level_num','id');
    }
    public function ganre()
    {
        return $this->belongsTo('App\Models\Ganre','ganre_num','ganre_num');
    }
    public function province()
    {   
        return $this->belongsTo('App\Models\Province', 'province_num','id');
    }

}
