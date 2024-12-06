<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\models\Specie;
use app\models\Animal;

class Breed extends Model
{
    protected $fillable = ['breed_name', 'specie_id'];

    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
