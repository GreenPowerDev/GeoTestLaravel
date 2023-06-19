<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'test_data',
        'begin_time',
        'end_time',
        'ganre_id',
        'level_id',
        'province_id',
        'price',
    ];

    public function level()
    {
        return $this->belongsTo('App\Models\Level','level_id','id');
    }
    public function ganre()
    {
        return $this->belongsTo('App\Models\Ganre','ganre_id','ganre_num');
    }
    public function reservation()
    {   
        return $this->hasMany('App\Models\Reservation');
    }


    public function get_level_name()
    {
        return $this->level->level_name;
    }
    public function get_test_date(){
        $date = Carbon::parse($this->test_date);
        return $date->format('Y年m月d日');
    }

    public function get_begin_time(){
        $begin_time = Carbon::parse($this->begin_time);
        return $begin_time->format('H時i分');
    }

    public function get_end_time(){
        $end_time = Carbon::parse($this->end_time);
        return $end_time->format('H時i分');
    }

    public function get_ganre_name(){
        
        return $this->ganre->ganre_name;
    }
    // public function get_province_name()
    // {
    //     return $this->belongsTo('App\Models\Province')->name;
    // }
    // public function get_province_id()
    // {
    //     return $this->belongsTo('App\Models\Province')->id;
    // }
}
