@extends('admin.layout.master')
@section('title','Loại sách')


@section('content')
<h1 class="text-center display-4">Loại sách</h1>

<div class="container-fluid">
<div style="clear:both"></div>
<button style="float: right;" type="button">
  <a href="{{url('/admin/type/insert')}}" style="color: salmon"><i class="fas fa-user-edit nav-icon"></i>Thêm loại sách</a></button>
<table class="table table-borderd table-hover" id="student_tbl">
  <thead>
    <tr class="table table-primary">
      <td>ID</td>
      <td>Loại sách</td>
      
      
      <td>Hành động</td>

    </tr>
  </thead>
  <tbody>
    @forelse ($types as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->names}}</td>
     
      
      <td>
        <a href="{{url('/editt/'.$item->id)}}"><i class="far fa-edit"></i></a>
        <a>||</a>

        <a href="{{url('/deletet/'.$item->id)}}"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @empty
    <tr>
      <td class="text-center" colspan="3">Danh sách trống</td>
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