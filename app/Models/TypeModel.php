<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TypeModel 
{
   
    use HasFactory;
    static function indexs(){
        return DB:: select("SELECT * FROM  types");
    }
    
    static function get($id){
        return DB::select("SELECT * FROM types WHERE id='$id'");
        
    }
   
    static function store($names){
    return DB::insert("INSERT INTO types VALUES(NULL,'$names')");
    }
    static function update($id,$names){
       
      return DB::update("UPDATE types SET names='$names' WHERE id='$id'");
    }
    static function destroys($id){
        return DB::delete("DELETE FROM types WHERE id='$id'");
    }
}
