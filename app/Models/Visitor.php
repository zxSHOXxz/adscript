<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    public function answers()
    {
        return $this->hasMany(Answer::class, 'aswer_id', 'id');
    }

}
