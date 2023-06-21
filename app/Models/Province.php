<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Test;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img_url',
    ];

    public function tests()
    {   
        return $this->hasMany('App\Models\Test');
    }

    public function province_first_test(){
        return $this->tests()->where('test_date', '>=', Carbon::now())->first();
    }
}
