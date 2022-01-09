@extends('admin.layout.master')
@section('title','Danh sách thẻ sinh viên')


@section('content')
<h1 class="text-center display-4">Danh sách thẻ sinh viên</h1>


<div style="clear:both"></div>
<div class="container-fluid">
<button style="float: right;" type="button">
  <a href="{{url('/admin/student/insert')}}" style="color: salmon"><i class="fas fa-user-edit nav-icon"></i>Thêm sinh viên</a></button>
<table class="table table-borderd table-hover" id="student_tbl">
  <thead>
    <tr class="table table-primary">
      <td>ID</td>
      <td>Họ và tên</td>
      <td>Ngày sinh</td>
      <td>Lớp</td>
      <td>Ngành</td>
      <td>Số điện thoại</td>
      <td>Ngày tạo </td>
      <td>Ngày hết hạn</td>
      <td>Trạng thái</td>
      <td>Hành động</td>

    </tr>
  </thead>
  <tbody>
    @forelse ($student as $item)
  
    <tr>
     
      <td>{{$item->id}}</td>
      <td><a href="{{url('/kiemtra10/'.$item->id)}}">{{$item->name}}</a></td>
      <td>{{$item->dob}}</td>
      <td>{{$item->class}}</td>
      <td>{{$item->faculty}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->createdate}}</td>
      <td>{{$item->expirationdate}}</td>
      <td>
        @if($item->expirationdate < $today)
        <span style="color:red">Hết hạn </span>
         @else
        <span style="color:green">Còn hạn</span>  
        @endif
      </td>
      <td>
        <a href="{{url('/edit/'.$item->id)}}"><i class="far fa-edit"></i></a>
        <a>||</a>

        <a href="{{url('/deletes/'.$item->id)}}"><i class="far fa-trash-alt"></i></a>
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
    $('#student_tbl').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });

  });
</script>
@endsection