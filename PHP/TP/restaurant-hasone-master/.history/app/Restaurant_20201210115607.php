<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function adresse() {
        return $this->hasOne(Adresse::class);
    }

    public function employes() {
        return $this->hasMany(Employer::class);
    }

    public function livreur() {
        return $this->hasTo(Employer::class);
    }
}
