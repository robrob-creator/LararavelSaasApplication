<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Collection;
use  App\Models\Team;

class Team extends Model
{
    protected $guarded=[];
    public function members(){
        return $this->hasMany(\App\Models\User::class);
    }

}
