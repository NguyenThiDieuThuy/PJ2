@extends('admin.layout.master')
@section('title','Vị trí sách')


@section('content')
<h1 class="text-center display-4">Vị trí sách</h1>


<div style="clear:both"></div>
<div class="container-fluid">
<button style="float: right;" type="button">
  <a href="{{url('/admin/locations/insers')}}" style="color: salmon">
    <i class="fas fa-map-marker-alt nav-icon"></i>Thêm vị trí</a></button>
<table class="table table-borderd table-hover" id="student_tbl">
  <thead>
    <tr class="table table-primary">
      <td>ID</td>
   
      <td>Kệ sách</td>
      
      <td>Hành động</td>

    </tr>
  </thead>
  <tbody>
    @forelse ($locations as $item)
    <tr>
      <td>{{$item->id}}</td>
      
      <td>{{$item->bookshelf}}</td>
      
      <td>
        <a href="{{url('/edits_l/'.$item->id)}}"><i class="far fa-edit"></i></a>
        <a>||</a>

        <a href="{{url('/deletel/'.$item->id)}}"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @empty
    <tr>
      <td class="text-center" colspan="5">Danh sách trống</td>
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
