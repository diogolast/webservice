<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagens';
    protected $fillable = [
        'user_id', 'post'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
