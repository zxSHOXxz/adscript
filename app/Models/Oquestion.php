<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oquestion extends Model
{
    use HasFactory;

    public function options()
    {
        return $this->hasMany(Option::class, 'option_id', 'id');
    }
}
