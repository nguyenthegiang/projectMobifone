<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblRevenueType extends Model
{
    use HasFactory;

    public function tbl_reports() {
        return $this->hasmany(TblReport::class);
    }
}
