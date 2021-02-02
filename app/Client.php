<?php

namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Client extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'blogger';

        protected $fillable = [
            'name', 'email', 'password','adresse','tele',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }

    