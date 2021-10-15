<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblProvince extends Model
{
    use HasFactory;

    public function tbl_districts(){
        return $this->hasmany(TblDistrict::class);
    }

    public function tbl_reports() {
        return $this->hasmany(TblReport::class);
    }

}
