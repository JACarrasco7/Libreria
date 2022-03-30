<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function books()
    {
        return $this->belongsToMany(book::class)->withTimestamps();
    }

    public function qualifications()
    {
        return $this->belongsToMany(qualification::class)->withPivot('nota')->withTimestamps();
    }

    public function getMyBooksAttribute()
    {
        return $this->books()->pluck('book_id')->toArray();
    }
}
