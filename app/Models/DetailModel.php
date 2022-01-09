<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetailModel 
{
    use HasFactory;
    static function detail($id)
    {
        return DB::select("SELECT detail.*,borrowpay.borrowday,borrowpay.payday,book.nameb,book.author,book.image,student.name from detail INNER JOIN borrowpay ON detail.id_borrowpay = borrowpay.id INNER JOIN book ON detail.id_book = book.id INNER JOIN student ON borrowpay.id_student = student.id WHERE borrowpay.id = $id  ");
    }
    static function get($id){
        $sql = "SELECT detail.*,borrowpay.borrowday,borrowpay.payday,borrowpay.id_student,book.nameb,book.author,book.image from detail INNER JOIN borrowpay ON detail.id_borrowpay = borrowpay.id INNER JOIN book ON detail.id_book = book.id  WHERE borrowpay.id = '$id'";
       $result = DB::select($sql);
        return $result;
    }
    static function getborrowpay()
    {
        // return DB::select("SELECT borrowpay.*,student.name,student.class FROM student INNER JOIN student ON borrowpay.id_student = student.id");
        return DB::table('borrowpay')->join('student','student.id','borrowpay.id_student')
        ->get(); 
    }
    static function getbook()
    {
        return DB::select("SELECT * FROM book");
    }
    static function storedetail($id_borrowpay, $id_book, $quantity, $stt)
    {
        return DB::table('detail')->insert([
            'id' => null,
            'id_borrowpay' => $id_borrowpay,
            'id_book' => $id_book,
            'quantity' => $quantity,
            'stt' => $stt
        ]);
    }
    static function updated($id, $id_borrowpay,$id_book,$quantity,$stt)
    {

        return DB::update("UPDATE detail SET id_borrowpay='$id_borrowpay',id_book='$id_book',quantity='$quantity',stt='$stt' WHERE id='$id'");
    }
    static function destroyd($id)
    {
        return DB::delete("DELETE FROM detail WHERE id='$id'");
    }
    
}
