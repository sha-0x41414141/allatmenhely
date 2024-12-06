<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\models\Breed;

class Specie extends Model
{
    protected $fillable = ['specie_name'];

    public function breeds()
    {
        return $this->hasMany(Breed::class);
    }
}
