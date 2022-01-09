@extends('admin.layout.master')
@section('title','Quản lí mượn trả')

@section('content')
<h1 class="text-center display-4">Phiếu mượn sách thư viện</h1>

<div style="clear:both"></div>
<div class="container-fluid">

<button style="float: right;" type="button">
  <a href="{{url('/admin/borrowpay/insertbr')}}" style="color: salmon"><i class="fas fa-plus-circle nav-icon"></i>Tạo phiếu</a></button>
<table class="table table-borderd table-hover" id="student_tbl" >
  <thead>
  <tr class="table table-primary">
  <td>ID</td>
  <td> Tên Sinh viên</td>
  <td>Lớp</td>
  <td>Ngày sinh</td>
  <td>Ngành</td>
  
 
 <td>Số điện thoại</td>
  <td>Ngày mượn</td>
  <td>Ngày Trả</td>
 
  <td >Hành động</td>

  </tr>
</thead>
<tbody>
  @forelse ($br as $item)

  <tr>
    
    
     <td>{{$item->id}}</td>
    <td><a href="{{url('/detail/'.$item->id)}}"> {{$item->name}}</a></td>
     <td>{{$item->class}}</td>
     <td>{{$item->dob}}</td>
     <td>{{$item->faculty}}</td>
     <td>{{$item->phone}}</td>
    
    
    {{-- <--  <td>{{$item->stt==1 ?'Còn sách':'Hết sách'}}</td> -- > --}}
     <td>{{$item->borrowday}}</td>

     <td>{{$item->payday}}</td>
    
     <td>
       <a href="{{url('/editbr/'.$item->id)}}"><i class="far fa-edit"></i></a>
      ||
       <a href="{{url('/deletebr/'.$item->id)}}"><i class="far fa-trash-alt"></i></a>
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

