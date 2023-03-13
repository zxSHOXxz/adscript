<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    public function text()
    {
        return $this->belongsTo(Text::class, 'color_id', 'id');
    }
    public function div()
    {
        return $this->belongsTo(Div::class, 'color_id', 'id');
    }

}
