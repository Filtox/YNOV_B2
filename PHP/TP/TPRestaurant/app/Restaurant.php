<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['nom', 'ville', 'codepostal', 'siteweb', 'description', 'typedecuisine', 'etat'];
}
