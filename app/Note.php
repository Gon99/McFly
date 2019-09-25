<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use Notifiable;

    protected $table = 'note'
    protected $fillable = 'titulo'

    public function user(){
        return $this->belongsTo('\App\User');
    }
}
