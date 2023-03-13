<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    public function color()
    {
        return $this->hasOne(Color::class, 'color_id', 'id');
    }
}
