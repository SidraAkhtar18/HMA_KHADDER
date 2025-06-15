<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Auth extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];

    public function role()
    {
        return $this->belongsTo(Role::class , 'role_id');   
    }
}
