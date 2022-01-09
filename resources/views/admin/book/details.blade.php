@extends('admin.layout.master')
@section('title','Chi tiết sách')
@section('content')
<style>
    #list table .item{
		padding: 16px;
		text-align: center;
		box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;


	}
	#list table .item:hover{
		box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
	}
    td:hover{
		border: 2px solid orange;
	}
    img:hover{
        border: 2px solid orange;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

    }
    </style>
    
        
    {{-- <img style="width:300px;margin-left:100px;" src="{{asset($kiemtra->image)}}"> --}}
<table border="1px;" style="margin:auto" id="list table">
    <td><img style="width:300px;" src="{{asset($kiemtra->image)}}"></td>
    <th><h2> Thông tin sách chi tiết</h2></th>
 
        <td id="item">
            <tr>
            <td>
                Tên sách</td><td>
<h3>{{$kiemtra->nameb}}</h3></td></tr>
<tr><td>Tác giả</td><td>
<h3>{{$kiemtra->author}}</h3></td></tr>

<tr><td>Tên NXB</td><td>
<h2>{{$kiemtra->publish}}</h2></td></tr>
<tr><td>Giới thiệu</td><td><p>{{$kiemtra->decrip}}</p></td></tr>
        </td>
</table>

@endsection