<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function employes() {
        return $this->belongsTo(Restaurant::class);
    }
}
