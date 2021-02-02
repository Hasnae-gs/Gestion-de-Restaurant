<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
 protected $primaryKey = 'id';
    protected $fillable = [
        'intitule', 'type_plat', 'prix', 'n_calories', 'description', 'image',
                   
                ];}


