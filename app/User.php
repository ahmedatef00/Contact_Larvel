<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    //
    public function phones() {
        //(the name of the class el assasy )
        return $this -> hasMany(Phone::class);//,'forigen key','primary key bta3 el uusers'
    //many phones to one users  
    //kol user leh many phones 

    }
    public function contact() {
        return $this->belongsToMany('App\User',"contacts", 'user_id', 'contact_id'); 
    }

public function inversecontact() {
        return $this->belongsToMany('App\User',"contacts", 'contact_id','user_id'); 
    }
      

}
