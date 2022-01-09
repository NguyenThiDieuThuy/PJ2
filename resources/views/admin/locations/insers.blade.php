@extends('admin.layout.master')
@section('title','thêm  vị trí sách')
@section('content')
<h1 class="text-center display-4">Thêm vị trí</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data" action="{{url('/createsss')}}" >
@csrf

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Kệ sách</span>
  <input name="bookshelf" type="text" class="form-control" placeholder="Tên kệ sách"  aria-describedby="basic-addon2">
</div>

<button class="btn btn-primary">Thêm</button>
</div>
</form>
@endsection