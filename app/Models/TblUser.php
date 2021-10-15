<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblUser extends Model
{
    use HasFactory;

    public function tbl_districts(){
        return $this->belongsTo(TblDistrict::class);
    }
}
