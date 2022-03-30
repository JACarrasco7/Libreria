<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function books()
    {
        return $this->hasMany(book::class);
    }

    public function getNumBooksAttribute()
    {
        return $this->books()->count();
    }

    public function getNumBooksFinalizadosAttribute()
    {
        return $this->books()->Where('estado', 'finalizado')->count();

    }
}
