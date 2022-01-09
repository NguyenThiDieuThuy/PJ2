<?php

namespace App\Http\Controllers\Admin;

use App\Models\BookModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class BookController extends Controller
{

    function indes()
    {

        $book = BookModel::indes();

        return view('admin.book.indes',['book' => $book]);
    }
    function insertb()
    {
        $sql1 = BookModel::gettype();
        $sql2 = BookModel::getlocation();

        return view('admin.book.insertb', [
            'types' => $sql1,
            'locations' => $sql2
        ]);
    }
     
    function edis($id)
    {
        $kiemtra1 = BookModel::gettype();
        $kiemtra3 = BookModel::getlocation();
        $kiemtra = BookModel::get($id);//doi ty
        // return dd($kiemtra);
        return view('admin.book.edis', [
            'kiemtra' => $kiemtra,
            'kiemtra1' =>$kiemtra1,
            'kiemtra3' =>$kiemtra3
    ]); 
    }
    function show($id)
    {
        $kiemtra = BookModel::get($id)[0];
        return view('admin.book.details', ['kiemtra' => $kiemtra]);
    }
    function storeb(Request $req)
    {
        $nameb = $req->input('nameb');
        $fileImage = time() . "." . $req->file('image')->extension();
        $req->file('image')->storeAs('public/kiemtra', $fileImage);
        $path = 'storage/kiemtra/' . $fileImage;
        $publish = $req->input('publish');
        $stt = $req->input('stt');
        $quantity = $req->input('quantity');
        $author = $req->input('author');
        $decrip = $req->input('decrip');
        $id_type = $req->input('id_type');
        $id_location = $req->input('id_location');

        $rs = BookModel::storeb($nameb, $path, $publish, $stt, $quantity, $author,$decrip, $id_type, $id_location);
        if ($rs == 0) return "Insert thất bại";
        else {
            toast('Successfully','success');
            Alert::success('Thêm thành công', 'Success Book');
            return redirect('/indes');
        }
    }

    function update(Request $req, $id)
    {
        $nameb = $req->input('nameb');
        $publish = $req->input('publish');
        $stt = $req->input('stt');
        $quantity = $req->input('quantity');
        $author = $req->input('author');
        $decrip = $req->input('decrip');
        $id_type = $req->input('id_type');
        $id_location = $req->input('id_location');

        $path = "";
        if (!empty($req->file('image'))) {


            $fileImage = time() . "." . $req->file('image')->extension();
            $req->file('image')->storeAs('public/kiemtra', $fileImage);
            $path = 'storage/kiemtra/' . $fileImage;
        }

        $rs = BookModel::update($id, $nameb, $path, $publish, $stt, $quantity, $author,$decrip, $id_type, $id_location);
        if ($rs == 0) return "Cập nhật thất bại";
        else {
            Alert::success('Cập nhật thành công', 'Success Book');
            toast('Successfully','success');
            return redirect('/indes');
        }
    }
    function destroy($id)
    {
        $rs = BookModel::destroy($id);
        if ($rs == 0) return "Xóa thất bại";
        else {
            Alert::success('Xóa thành công', 'Success Book');
            return redirect('/indes');
        }
    }
}
