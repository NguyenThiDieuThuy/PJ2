<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //
    function indexs(){
        
        $types = TypeModel::indexs();
      
       return view('admin.type.indexs',['types'=>$types]);
       
    }

   
    function insert(){
        return view('admin.type.insert');
    }
    function editt($id){
        $kiemtra = TypeModel::get($id)[0];
        return view('admin.type.edit',['kiemtra'=> $kiemtra]);
    
    }
    
    function store(Request $req){
        $names = $req->input('names');
       
        
        $rs = TypeModel::store($names);
        if($rs==0) return "Insert thất bại";
        else{
            return redirect()->route('admin.type.indexs');
        }
    }
    function update(Request $req, $id){
        $names = $req->input('names');
        
        
        
        $rs =TypeModel::update($id,$names);
        if($rs==0) return "Cập nhật thất bại";
        else{
            return redirect('/indexs'); 
        }
    
    }
    function destroys($id){
      $rs = TypeModel::destroys($id);
      if($rs == 0) return "Xóa thất bại";
        else{
            return redirect('/indexs'); 
        }
    }
}
