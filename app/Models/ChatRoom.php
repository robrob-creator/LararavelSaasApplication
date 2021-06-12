<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use  App\Models\Team;
use  App\Models\User;
use  App\Models\Message;

class ChatRoom extends Model
{
    protected $guarded=[];
    /**
     * @return BelongsToMany
     */
    public function members():BelongsToMany
    {
        return $this->belongsToMany(User::class,'chat_room_members');
    }
      /**
     * @return BelongsToMany
     */
    public function chatroom():BelongsToMany
    {
        return $this->belongsToMany(User::class,'chat_rooms');
    }
    
    

    public function messages():HasMany
    {
        return $this->hasMany(Message::class);
    }
}
