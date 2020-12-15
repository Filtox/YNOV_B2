<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function employe() {
        return $this->(Restaurant::class);
    }
}
