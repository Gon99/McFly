<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $fillable = ['nombre'];
    public $timestamps = false;

    public function notes(){
        return $this->hasMany('\App\Note');
    }
}
