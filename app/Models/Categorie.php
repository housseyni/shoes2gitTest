<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function shoes()
    {
        return $this->hasMany(Shoe::class);
    }
}
