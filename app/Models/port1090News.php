<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class port1090News extends Model
{
    use HasFactory;

    public function documentaries(){
        return $this->hasmany(documentaries::class);
    }
}
