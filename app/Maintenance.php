<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    //
    public function location(){

        return $this->belongsTo('App\Location');
    }

    public function user(){

        return $this->belongsTo('App\Maintenance');
    }
}
