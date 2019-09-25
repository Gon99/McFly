<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Note extends Model
{
    use Notifiable;

    protected $table = 'note';
    protected $fillable = [
    	'titulo', 'descripcion', 'favorito'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('\App\User');
    }
}
