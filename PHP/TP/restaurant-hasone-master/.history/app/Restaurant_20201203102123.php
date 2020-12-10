<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function adresseZZ {
        return $this->hasOne(Adresse::class);
    }
}
