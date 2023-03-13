<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function Oquestion()
    {
        return $this->hasMany(Oquestion::class, 'oquestion_id', 'id');
    }
    public function Iquestion()
    {
        return $this->hasMany(Iquestion::class, 'iquestion_id', 'id');
    }
    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'visitor_id', 'id');
    }
}
