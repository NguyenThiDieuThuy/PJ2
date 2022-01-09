<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class BookModel 
{
    use HasFactory;
    static function indes(){
        return DB:: select("SELECT book.*,types.names,locations.bookshelf from book INNER JOIN types ON book.id_type = types.id INNER JOIN locations ON book.id_location = locations.id");
    }
    static function getdata($id){
        return DB:: select("SELECT book.*,types.names,locations.bookshelf from book INNER JOIN types ON book.id_type = types.id INNER JOIN locations ON book.id_location = locations.id WHERE book.id = '$id'" );
       
    }
    static function get($id){
        $sql = "SELECT book.*,types.names,locations.bookshelf from book INNER JOIN types ON book.id_type = types.id INNER JOIN locations ON book.id_location = locations.id WHERE book.id = '$id'";
       $result = DB::select($sql);
        return $result;
    }
    static function gettype(){
        return DB::select("SELECT * FROM types");
    }
    static function getlocation(){
        return DB::select("SELECT * FROM locations");
    }
    
    static function storeb($nameb,$image,$publish,$stt,$quantity,$author,$decrip,$id_type,$id_location){
    return DB::insert("INSERT INTO  book VALUES(NULL,'$nameb','$image','$publish','$stt','$quantity','$author','$decrip','$id_type','$id_location')");
    }
    static function update($id,$nameb,$path,$publish,$stt,$quantity,$author,$decrip,$id_type,$id_location){
       if(empty($path)){
           $sql = "UPDATE book SET nameb='$nameb',publish='$publish',stt='$stt',quantity='$quantity',author='$author',decrip='$decrip',id_type='$id_type',id_location='$id_location' WHERE id='$id'";
       }
       else{
        $sql = "UPDATE book SET nameb='$nameb',publish='$publish',stt='$stt',quantity='$quantity',author='$author',decrip='$decrip',id_type='$id_type',id_location='$id_location',image='$path' WHERE id='$id'";
       }
       return DB::update($sql);
    }
    static function destroy($id){
        return DB::delete("DELETE FROM book WHERE id='$id'");
    }
}