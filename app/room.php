<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    //
    public function messages()
    {
        return $this->hasMany('App\message');
    }
}
