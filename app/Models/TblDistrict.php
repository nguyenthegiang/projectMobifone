<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblDistrict extends Model
{
    use HasFactory;

    public function tbl_provinces(){
        return $this->belongsTo(TblProvince::class);
    }

    public function tbl_users(){
        return $this->hasmany(TblUser::class);
    }
}
