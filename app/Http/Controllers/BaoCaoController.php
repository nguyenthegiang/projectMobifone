<?php

namespace App\Http\Controllers;

use App\Exports\ReportsExport;
use App\Models\TblReason;
use App\Models\TblReport;
use App\Models\TblReportType;
use App\Models\TblRevenueType;
use App\Models\TblStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class BaoCaoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('BaoCao', [
            'stores' => TblStore::all(),
            'reasons' => TblReason::all(),
            'revenueTypes' => TblRevenueType::all(),
            'reportTypes' => TblReportType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Tìm những Report thỏa mãn điều kiện và trả về, Export PDF
    public function store(Request $request)
    {
        //Lấy dữ liệu từ View và tìm trong bảng TblReport những Report thỏa mãn điều kiện

        //Trước đó phải chuyển dateStart và dateEnd sang dạng DateTime vì lúc lấy về nó là String
        $timeStart = strtotime($request->dateStart);
        $startTime = date('Y-m-d H:i:s', $timeStart);

        $timeEnd = strtotime($request->dateEnd);
        $endTime = date('Y-m-d H:i:s', $timeEnd);

        $reports = TblReport::where([
            ['store_id', '=', $request->store],
            ['reason_id', '=', $request->reason],
            ['revenueType_id', '=', $request->revenueType],
            ['reportType_id', '=', $request->reportType]
        ])->whereBetween('created_at', [$startTime, $endTime])->get();

        if ($request->action == 'pdf') {
            /* ---Export PDF--- */
            // share data to view
            view()->share('reports', $reports);
            $pdf = PDF::loadView('BaoCao_PDF_View', $reports)->setPaper('a4', 'landscape');     //Set cho giấy nằm ngang

            $path = public_path('assets/');     //Chọn lưu về trong thư mục project: public/assets/
            $fileName = 'BaoCao.pdf';
            $pdf->save($path . '/' . $fileName);
        } else {
            /* ---Export Excel--- */
            //Gọi đến ReportsExport
            $file = Excel::download(new ReportsExport($reports), 'BaoCao.xlsx');
            return $file;
        }

        //Redirect về View, truyền thêm các giá trị đã chọn của Form để hiển thị lại lên
        return view('BaoCao', [
            'stores' => TblStore::all(),
            'reasons' => TblReason::all(),
            'revenueTypes' => TblRevenueType::all(),
            'reportTypes' => TblReportType::all(),
            'selectedStore' => $request->store,
            'selectedReason' => $request->reason,
            'selectedRevenueType' => $request->revenueType,
            'selectedReportType' => $request->reportType,
            'selectedDateStart' => $request->dateStart,
            'selectedDateEnd' => $request->dateEnd
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
