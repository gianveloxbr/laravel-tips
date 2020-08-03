<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    //Desativa timestamps
    public $timestamps = false;

    //Mass assignment -  Apenas campos que quero preencher
    protected $fillable = [
        'title',
        'subtitle',
        'content'
    ];

    //Vai ser executado quando for inserir um novo valor ao campo title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        // Passando valor para a coluna slug
        $this->attributes['slug'] = Str::slug($value);
    }
}
