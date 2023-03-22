<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(categorie::class,'categorie_id');
    }
  
}
