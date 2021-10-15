<?php

namespace App\Exports;

use App\Models\TblReport;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportsExport implements FromView
{
    public function __construct($reports) {
    	$this->reports = $reports;
    }

    public function view(): View
    {
        return view('BaoCao_PDF_View', [
            'reports' => $this->reports
        ]);
    }
}
