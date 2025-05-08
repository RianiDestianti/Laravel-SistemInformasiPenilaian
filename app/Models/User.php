<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['username', 'password', 'role'];

    protected $hidden = ['password'];

    public function guru()
    {
        return $this->hasOne(Guru::class, 'id_user');
    }

    public function murid()
    {
        return $this->hasOne(Murid::class, 'id_user');
    }
}
