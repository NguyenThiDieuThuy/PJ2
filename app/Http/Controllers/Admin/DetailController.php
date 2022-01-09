<?php

namespace App\Http\Controllers\Admin;
use App\Models\DetailModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

class DetailController extends Controller
{
    //
    function detail($id)
    {
        $today=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $dt = DetailModel::detail($id);
      
       return view('admin.borrowpay.detail',['dt'=>$dt,'today'=>$today]);
       
    }
    function editd($id)
    {
        $detail1 = DetailModel::getborrowpay();
        $detail2 = DetailModel::getbook();
        $detail = DetailModel::get($id);//doi ty//đây
        //  return dd($kiemtra);
        return view('admin.borrowpay.editd', [
            'detail' => $detail,
            'detail1' =>$detail1,
            'detail2' =>$detail2,
            
    ]); 
    }

   
    function insertdetail()
    {
        $sql2 = DetailModel::getborrowpay();
        $sql3 = DetailModel::getbook();

        return view('admin.borrowpay.insertdetail', [
            'borrowpay' => $sql2,
            'book'=> $sql3
            
        ]);
    }
    function storedetail(Request $req){
        $id_borrowpay= $req->id_borrowpay;
        $id_book= $req->id_book;
       
        $quantity= $req->quantity;
        $stt= $req->stt;
        $rs = DetailModel::storedetail($id_borrowpay,$id_book,$quantity,$stt);
        if($rs==0) return "Insert thất bại";
        else{
            Alert::success('Thêm thành công', 'Success Borrowpay');
            return redirect('/detail/'. $id_borrowpay);
        }
    }
    function updated(Request $req, $id){
        $id_borrowpay= $req->input('id_borrowpay');
        $id_book= $req->input('id_book');
        $quantity= $req->input('quantity');
        $stt= $req->input('stt');
        
        $rs =DetailModel::updated($id,$id_borrowpay,$id_book,$quantity,$stt);
        if($rs==0) return "Cập nhật thất bại";
        else{
            return redirect('/detail/'.$id_borrowpay); 
        }
    
    }
    function destroyd($id){
      $rs = DetailModel::destroyd($id);
      if($rs == 0) return "Xóa thất bại";
        else{
            return view('admin.borrowpay.indexbr'); 
        }
    }
   
}
