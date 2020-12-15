<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public fonction adresse () {
        return $this->hasOne('adresse')
    }
}
