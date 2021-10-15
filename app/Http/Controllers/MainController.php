<?php

namespace App\Http\Controllers;

use App\CustomClass\Company;
use App\CustomClass\District;
use App\CustomClass\Employee;
use App\CustomClass\Province;
use App\Exports\ReportsExport;
use App\Models\TblDistrict;
use App\Models\TblProvince;
use App\Models\TblUser;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MainController extends Controller
{
    /**
     * Hiển thị màn hình Quản lý nhân viên
     *
     * 
     * @return \Illuminate\View\View
     */
    public function showQuanLy()
    {
        //Tạo Tree
        $myTree = new Company;
        $myTree->set_text('Công Ty');
        
        //Lấy Province từ Database
        $tblProvinces = TblProvince::all();

        //Lặp với từng Province: với mỗi Province thì tìm những District tương ứng của nó
        $provinces = array();   //Khởi tạo array
        for($i = 0; $i < count($tblProvinces); $i++) {
            $provinces[$i] = new Province;  //Tạo Array provinces
            $provinces[$i]->set_text($tblProvinces[$i]->province_name);     //Set text cho nó là tên province

            //Lấy District từ Database: những District có province_id = id của province này
            $tblDistricts = TblDistrict::where('province_id', $tblProvinces[$i]->id)->get();   
            
            //Lặp với từng District: với mỗi District thì tìm những User tương ứng của nó
            $districts = array();   //Khởi tạo array
            for($j = 0; $j < count($tblDistricts); $j++) {
                $districts[$j] = new District;  //Tạo Array districts
                $districts[$j]->set_text($tblDistricts[$j]->district_name); //Set text cho nó là tên district

                //Lấy User từ Database: những User có district_id = id của district này
                $tblUsers = TblUser::where('district_id', $tblDistricts[$j]->id)->get();
                
                //Lặp với từng User: với mỗi User thì cho vào 1 phần tử của Array và set text
                $employees = array();   //Khởi tạo array
                for($k = 0; $k < count($tblUsers); $k++) {
                    //Đặt tên Class là Employee vì User có rồi -> bị trùng
                    $employees[$k] = new Employee; //Tạo Array employees
                    $employees[$k]->set_text($tblUsers[$k]->type);  //Set text cho nó là type của user
                }

                $districts[$j]->set_user($employees);   //Set user cho District

                unset($employees);  //Clear array
            }

            $provinces[$i]->set_district($districts);   //Set district cho Province

            unset($districts);  //Clear array   (Fix Bug)
        }

        $myTree->set_province($provinces);  //Set province cho Tree

        //Đẩy lên View
        return view('QuanLyNhanVien', compact('myTree'));
    }

    /**
     * Hiển thị màn hình Hiển thị tra cứu
     *
     * 
     * @return \Illuminate\View\View
     */
    public function showTraCuu()
    {
        return view('HienThiTraCuu');
    }
}
