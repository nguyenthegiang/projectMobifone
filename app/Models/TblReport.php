<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblReport extends Model
{
    use HasFactory;

    public function tbl_provinces() {
        return $this->belongsTo(TblProvince::class);
    }

    public function tbl_stores() {
        return $this->belongsTo(TblStore::class);
    }

    public function tbl_reasons() {
        return $this->belongsTo(TblReason::class);
    }

    public function tbl_revenue_types() {
        return $this->belongsTo(TblRevenueType::class);
    }

    public function tbl_report_types() {
        return $this->belongsTo(TblReportType::class);
    }
}
