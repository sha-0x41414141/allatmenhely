<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use app\models\Shelter;
use app\models\Breed;
use app\models\User;

class Animal extends Model
{
    use SoftDeletes;

    protected $fillable = ['animal_name', 'gender', 'age', 'breed_id', 'shelter_id'];

    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
