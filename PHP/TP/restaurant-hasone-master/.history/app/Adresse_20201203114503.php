<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public function adresse() {
        return $this->hasOne(Adresse::class);
    }
}
