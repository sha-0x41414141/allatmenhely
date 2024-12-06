<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\models\User;

class Role extends Model
{
    protected $fillable = ['role_name'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
