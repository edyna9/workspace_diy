<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function tags()
    {
        //ceci permet de relier les authors aux livres
        //Un author peut fair plusieurs livres mais un livre ne peut pas avoir plusieurs authors
        return $this->hasMany(Tag::class);
    }
}
