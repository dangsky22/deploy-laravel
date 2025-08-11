<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Akun extends Authenticatable
{
    use Notifiable;

    protected $table = 'akuns';

    protected $fillable = [
        'email',
        'password',
        // tambahkan field lain jika diperlukan
    ];

    protected $hidden = [
        'password',
    ];
}
