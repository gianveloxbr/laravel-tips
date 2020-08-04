<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public function user()
    {
        // Um endereço pertence a um usuário
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
