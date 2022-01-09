<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class StudentModel 
{
    use HasFactory;
   // protected $table ='student';
   // protected $fillable = ['id','name','dob','class','faculty','phone','createdate','expirationdate'];
   
    static function index(){
        return DB:: select("SELECT * FROM student");
    }
    
    static function get($id){
        return DB::select("SELECT * FROM student WHERE id='$id'");
        
    }
    static function store($name,$dob,$class,$faculty,$phone,$createdate,$expirationdate){
    return DB::insert("INSERT INTO  student VALUES(NULL,'$name','$dob','$class','$faculty','$phone','$createdate','$expirationdate')");
    }
    static function update($id,$name,$dob,$class,$faculty,$phone,$createdate,$expirationdate){
       
      return DB::update("UPDATE student SET   name='$name',dob='$dob',class='$class',faculty='$faculty',phone='$phone',createdate='$createdate',expirationdate='$expirationdate' WHERE id='$id'");
    }
    static function destroyss($id){
        return DB::delete("DELETE FROM student WHERE id='$id'");
    }
}
