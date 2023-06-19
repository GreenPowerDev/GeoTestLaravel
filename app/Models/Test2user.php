<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test2user extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->belongsTo('App\Models\Reservation','reservation_id','id');
    }

    public function allowed()
    {
        return $this->belongsTo('App\Models\Allowed','allowed_id','id');
    }
}
