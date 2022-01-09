<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BrModel
{

    use HasFactory;
    static function indexbr()
    {
        return DB::select("SELECT borrowpay.*,student.name,student.class,student.dob,student.phone,student.faculty from borrowpay INNER JOIN student ON borrowpay.id_student = student.id ");
    }
    static function get($id){
        $sql = "SELECT borrowpay.*,student.name,student.class,student.dob,student.phone,student.faculty from borrowpay INNER JOIN student ON borrowpay.id_student = student.id WHERE borrowpay.id = '$id'";
       $result = DB::select($sql);
        return $result;
    }
    static function getstudent()
    {
        return DB::select("SELECT * FROM student");
    }
    static function storebr($borrowday, $payday, $id_student)
    {
        return DB::insert("INSERT INTO  borrowpay VALUES(NULL,'$borrowday','$payday','$id_student')");
    }


    // static function updatebr($id, $borrowday,$payday,$id_student)
    // {

    //     return DB::update("UPDATE borrowpay SET borrowday='$borrowday',payday='$payday',id_student='$id_student' WHERE id='$id'");
    // }
    static function updatek($id,$borrowday,$payday,$id_student){
       
        return DB::update("UPDATE borrowpay SET  borrowday='$borrowday',payday='$payday',id_student='$id_student' WHERE id='$id'");
      }
    static function destroybr($id)
    {
        return DB::delete("DELETE FROM borrowpay WHERE id='$id'");
    }




    ///////


    // static function detail($id)
    // {
    //     return DB::select("SELECT detail.*,borrowpay.borrowday,borrowpay.payday,book.nameb,book.author,book.image,student.name from detail INNER JOIN borrowpay ON detail.id_borrowpay = borrowpay.id INNER JOIN book ON detail.id_book = book.id INNER JOIN student ON borrowpay.id_student = student.id WHERE borrowpay.id = $id  ");
    // }
    // static function getd($id){
    //     $sql = "SELECT detail.*,borrowpay.borrowday,borrowpay.payday,borrowpay.id_student,book.nameb,book.author,book.image from detail INNER JOIN borrowpay ON detail.id_borrowpay = borrowpay.id INNER JOIN book ON detail.id_book = book.id  WHERE borrowpay.id = '$id'";
    //    $result = DB::select($sql);
    //     return $result;
    // }
    // static function getborrowpay()
    // {
    //     // return DB::select("SELECT borrowpay.*,student.name,student.class FROM student INNER JOIN student ON borrowpay.id_student = student.id");
    //     return DB::table('borrowpay')->join('student','student.id','borrowpay.id_student')
    //     ->get(); 
    // }
    // static function getbook()
    // {
    //     return DB::select("SELECT * FROM book");
    // }
    // static function storedetail($id_borrowpay, $id_book, $quantity, $stt)
    // {
    //     return DB::table('detail')->insert([
    //         'id' => null,
    //         'id_borrowpay' => $id_borrowpay,
    //         'id_book' => $id_book,
    //         'quantity' => $quantity,
    //         'stt' => $stt
    //     ]);
    // }
    // static function updated($id, $id_borrowpay,$id_book,$quantity,$stt)
    // {

    //     return DB::update("UPDATE detail SET id_borrowpay='$id_borrowpay',id_book='$id_book',quantity='$quantity',stt='$stt' WHERE id='$id'");
    // }
    // static function destroyd($id)
    // {
    //     return DB::delete("DELETE FROM detail WHERE id='$id'");
    // }
    
}
