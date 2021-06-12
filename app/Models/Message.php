<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table ="messages";
    /**
     * @return BelongsToMany
     */
    public function message():BelongsToMany
    {
        return $this->belongsToMany(Message::class,'messages');
    }
}
