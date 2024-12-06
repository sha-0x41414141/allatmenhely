<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\models\Animal;

class Shelter extends Model
{
    protected $fillable = ['shelter_name', 'capacity'];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
