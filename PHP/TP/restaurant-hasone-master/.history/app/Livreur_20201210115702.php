<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    public function restaurant() {
        return $this->hasOne(Restaurant::class);
    }
}
