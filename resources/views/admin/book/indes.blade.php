@extends('admin.layout.master')
@section('title','Sách thư viện')

@section('content')
<h1 class="text-center display-4">Sách thư viện</h1>

<div style="clear:both"></div>
<div class="container-fluid">
<button style="float: right;" type="button">
  <a href="{{url('/admin/book/insertb')}}" style="color: salmon"><i class="fas fa-plus-circle nav-icon"></i>Thêm  sách</a></button>
<table class="table table-borderd table-hover" id="student_tbl" >
  <thead>
  <tr class="table table-primary">
  <td>ID</td>
  <td>Tên sách</td>
 
  
  <td>Số lượng</td>
 
  <td>Image</td>
  <td>Tình trạng</td>
 <td>Loại sách</td>
  <td>Vị trí</td>
  
  <td >Hành động</td>

  </tr>
</thead>
<tbody>
  @forelse ($book as $item)
  <tr>
    
     <td>{{$item->id}}</td>
     <td>{{$item->nameb}}</td>
     
     <td>{{$item->quantity}}</td>
    
     <td>
     <a href="{{url('/kiemtra/'.$item->id)}}">
     <img src="{{$item->image}}" width="150px"/>
     </a>
     </td>
    
     <td>{{$item->stt==1 ?'Còn sách':'Hết sách'}}</td>
     <td>{{$item->names}}</td>

     <td>{{$item->bookshelf}}</td>
     
     <td>
       <a href="{{url('/edis/'.$item->id)}}"><i class="far fa-edit"></i></a>
        <a>||</a>
       <a href="{{url('/delete/'.$item->id)}}"><i class="far fa-trash-alt"></i></a>
     </td>
  </tr>
  @empty
  <tr>
  <td class="text-center" colspan="8">Danh sách trống</td>
  </tr>
  @endforelse
</tbody>
</table>
</div>
@endsection
@section('script')
<script>
  $(document).ready(function() {
    $('#student_tbl').DataTable();

  });
</script>
@endsection

