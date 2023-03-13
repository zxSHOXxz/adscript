<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function Oquestion()
    {
        return $this->belongsTo(Oquestion::class, 'oquestion_id', 'id');
    }
}
