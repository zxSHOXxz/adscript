<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function oquestion()
    {
        return $this->belongsTo(Oquestion::class, 'oquestions_id', 'id');
    }
}
