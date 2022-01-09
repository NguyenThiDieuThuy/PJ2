<?php

namespace App\Http\Controllers\Admin;
use App\Models\StudentModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    //
    function index(){
        $today=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $student = StudentModel::index();
      
       return view('admin.student.index',['student'=>$student,'today'=>$today]);
       // return view('admin.student.index',['student' => DB::table('student')->paginate(2)]);
    }

   
    function insert(){
        return view('admin.student.insert');
    }
    function edit($id){
        $kiemtra = StudentModel::get($id)[0];
        return view('admin.student.edit',['kiemtra'=> $kiemtra]);
    
    }
    function show($id){
        $kiemtra10 =StudentModel::get($id)[0];
        return view('admin/student/detail',['kiemtra10'=> $kiemtra10]); 
    
    }
    function stor(Request $req){
        $name = $req->input('name');
        $dob = $req->input('dob');
        $class =$req->input('class');
        $faculty = $req->input('faculty');
        $phone = $req->input('phone');
        $createdate=$req->input('createdate');
        $expirationdate=$req->input('expirationdate');
        $rs = StudentModel::store($name,$dob,$class,$faculty,$phone,$createdate,$expirationdate);
        if($rs==0) return "Insert thất bại";
        else{
            Alert::success('Thêm thành công', 'Success Student');
            return redirect()->route('admin.index');
        }
    }
    function update(Request $req, $id){
        $name = $req->input('name');
        $dob = $req->input('dob');
        $class =$req->input('class');
        $faculty = $req->input('faculty');
        $phone = $req->input('phone');
        $createdate=$req->input('createdate');
        $expirationdate=$req->input('expirationdate');
        
        $rs =StudentModel::update($id,$name,$dob,$class,$faculty,$phone,$createdate,$expirationdate);
        if($rs == 0) return "Cập nhật thất bại";
        else{
            Alert::success('Cập nhật thành công', 'Success Student');
            return redirect('/index'); 
        }
    
    }
    function destroyss($id){
      $rs = StudentModel::destroyss($id);
      if($rs == 0) return "Xóa thất bại";
        else{
            return redirect('/index'); 
        }
    }
}
