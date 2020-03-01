<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model{
// {
    //
    protected $fillable = ['phone'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user() {
        return $this -> belongsTo(User::class);
    //many phones to one users  
    }

    }
