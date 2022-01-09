<?php

namespace App\Http\Controllers\Admin;
use App\Models\BrModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class BrController extends Controller
{
    //
    function indexbr()
    { 
        
         
        $br = BrModel::indexbr();
            
      
       return view('admin.borrowpay.indexbr',['br'=>$br]);
       
             
    }


   
    function insertbr()
    {
        $sql1 = BrModel::getstudent();
       

        return view('admin.borrowpay.insertbr', [
            'student' => $sql1,
            
        ]);
    }
    function editbr($id)
    {
        $kiemtra1 = BrModel::getstudent();
       
        $kiemtra = BrModel::get($id);//doi ty
        // return dd($kiemtra);
        return view('admin.borrowpay.editbr', [
            'kiemtra' => $kiemtra,
            'kiemtra1' =>$kiemtra1,
            
    ]); 
    }
    function storebr(Request $req){
        $borrowday= $req->input('borrowday');
        $payday= $req->input('payday');
       
        $id_student= $req->input('id_student');
        $rs = BrModel::storebr($borrowday,$payday,$id_student);
        if($rs==0) return "Insert thất bại";
        else{
            Alert::success('Thêm thành công', 'Success Borrowpay');
           
            return redirect()->route('admin.borrowpay.insertdetail');
        }
    }
    function updatek(Request $req, $id){
        $borrowday= $req->input('borrowday');
        
        $payday= $req->input('payday');
        $id_student= $req->input('id_student');
        
        $rs =BrModel::updatek($id,$borrowday,$payday,$id_student);
        if($rs==0) return "Cập nhật thất bại";
        else{
            Alert::success('Cập nhật thành công', 'Success Borrowpay');
            return redirect('/indexbr'); 
        }
    
    }
    function destroybr($id){
      $rs = BrModel::destroybr($id);
      if($rs == 0) return "Xóa thất bại";
        else{
            return redirect('/indexbr'); 
        }
    }







    ///////day
    // function detail($id)
    // {
    //     $today=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
    //     $dt = BrModel::detail($id);
      
    //    return view('admin.borrowpay.detail',['dt'=>$dt,'today'=>$today]);
       
    // }
    // function editd($id)
    // {
    //     $kiemtra3 = BrModel::getborrowpay();
    //     $kiemtra4= BrModel::getbook();
    //     $demo = BrModel::getd($id);//doi ty
    //     // return dd($kiemtra);
    //     return view('admin.borrowpay.editd', [
    //         'demo' => $demo,
    //         'kiemtra3' =>$kiemtra3,
    //         'kiemtra4' =>$kiemtra4,
            
    // ]); 
    // }

   
    // function insertdetail()
    // {
    //     $sql2 = BrModel::getborrowpay();
    //     $sql3 = BrModel::getbook();

    //     return view('admin.borrowpay.insertdetail', [
    //         'borrowpay' => $sql2,
    //         'book'=> $sql3
            
    //     ]);
    // }
    // function storedetail(Request $req){
    //     $id_borrowpay= $req->id_borrowpay;
    //     $id_book= $req->id_book;
       
    //     $quantity= $req->quantity;
    //     $stt= $req->stt;
    //     $rs = BrModel::storedetail($id_borrowpay,$id_book,$quantity,$stt);
    //     if($rs==0) return "Insert thất bại";
    //     else{
    //         Alert::success('Thêm thành công', 'Success Borrowpay');
    //         return redirect('/detail/'. $id_borrowpay);
    //     }
    // }
    // function updated(Request $req, $id){
    //     $id_borrowpay= $req->input('id_borrowpay');
    //     $id_book= $req->input('id_book');
    //     $quantity= $req->input('quantity');
    //     $stt= $req->input('stt');
        
    //     $rs =BrModel::updated($id,$id_borrowpay,$id_book,$quantity,$stt);
    //     if($rs==0) return "Cập nhật thất bại";
    //     else{
    //         return redirect('/detail/'.$id_borrowpay); 
    //     }
    
    // }
    // function destroyd($id){
    //   $rs = BrModel::destroyd($id);
    //   if($rs == 0) return "Xóa thất bại";
    //     else{
    //         return redirect('/detail'); 
    //     }
    // }
   
}
