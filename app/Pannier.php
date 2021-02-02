<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pannier extends Authenticatable
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_plat', 'id_client', 'statut', 'etat', 
                ];

            }
