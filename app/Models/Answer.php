<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->morphTo();
    }
    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'visitor_id', 'id');
    }
}
