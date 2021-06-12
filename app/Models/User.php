<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Config\Repository;
use Illuminate\Translation\Translator;
use  App\Http\TeamControllers;
use  App\Models\Team;
use  App\Models\User;
use  App\Models\Message;




class User extends Authenticatable
{
    use Notifiable, softDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     *
     * @return string
     */
  public function getFullNameAttribute():string
  {
      return "{$this->name} {$this->last_name}";
  }
  /**
     * @return belongsTo
     */
    public function team():belongsTo
    {
        return $this->belongsTo(\App\Models\Team::class);
    }
     /**
     * @return string
     */
    public function getRole():string
    {
        
        return __("roles.{$this->roles[0]->name}");
    }
    public function createdAt()
    {
        return $this->created_at->format(
            config('workkit.date_format')
        );
    }
    /**
     * @return BelongsToMany
     */
    public function chatRooms():belongsToMany
    {
        return
        $this->belongsToMany(ChatRoom::class,'chat_room_members');
    }
    
    public function user(){
        return $this->hasMany(\App\Models\User::class);
    }
    public function messages():belongsTo
    {
        return $this->belongsTo(\App\Models\Message::class);
    }
 
}
