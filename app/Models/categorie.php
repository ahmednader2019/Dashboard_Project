<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;



class categorie extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasMany(product::class);
    }

}





