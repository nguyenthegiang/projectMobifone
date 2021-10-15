<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentary extends Model
{
    use HasFactory;

    public function port1090_news(){
        return $this->belongsTo(port1090News::class);
    }
}
