<?php

namespace App\Http\Controllers\Admin;
use App\Models\LocationModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LocationController extends Controller
{
    //
    function indexl(){
        
        $locations = LocationModel::indexl();
      
       return view('admin.locations.indexl',['locations'=>$locations]);
       
    }

   
    function insers(){
        return view('admin.locations.insers');
    }
    function edits_l($id){
        $kiemtra = LocationModel::get($id)[0];
        return view('admin.locations.edits_l',['kiemtra'=> $kiemtra]);
    
    }
    function show($id){
        $kiemtra =LocationModel::get($id)[0];
        return view('details',['kiemtra'=> $kiemtra]); 
    
    }
    function storesss(Request $req){
       
        $bookshelf = $req->input('bookshelf');
        
        $rs = LocationModel::storesss($bookshelf,);
        if($rs==0) return "Insert thất bại";
        else{
            Alert::success('Thêm thành công', 'Success Book');
            return redirect()->route('admin.locations.indexl');
        }
    }
    function updates(Request $req, $id){
      
        $bookshelf = $req->input('bookshelf');
        
        
        $rs =LocationModel::updates($id,$bookshelf);
        if($rs==0) return "Cập nhật thất bại";
        else{
            Alert::success(' Cập nhật thành công', 'Success Book');
            return redirect('/indexl'); 
        }
    
    }
    function destroyl($id){
      $rs = LocationModel::destroyl($id);
      if($rs == 0) return "Xóa thất bại";
        else{
            return redirect('/indexl'); 
        }
    }
}
