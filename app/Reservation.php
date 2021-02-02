<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'nbr', 'id_client', 'date_r', 'temps','repat', 
                   
                ];
            }
