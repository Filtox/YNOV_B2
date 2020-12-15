<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public function restaurant() {
        return $this->hasOne(Restaurant::class);
    }
}
