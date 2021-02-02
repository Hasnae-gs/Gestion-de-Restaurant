<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
 protected $primaryKey = 'id';
    protected $fillable = [
        'desc','image',
                   
                ];}
