<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class LocationModel 
{
    use HasFactory;
    static function indexl(){
        return DB:: select("SELECT * FROM locations");
    }
    
    static function get($id){
        return DB::select("SELECT * FROM locations WHERE id='$id'");
        
    }
    static function storesss($bookshelf){
    return DB::insert("INSERT INTO  locations VALUES(NULL,'$bookshelf')");
    }
    static function updates($id,$bookshelf){
       
      return DB::update("UPDATE locations SET bookshelf='$bookshelf' WHERE id='$id'");
    }
    static function destroyl($id){
        return DB::delete("DELETE FROM locations WHERE id='$id'");
    }
}
