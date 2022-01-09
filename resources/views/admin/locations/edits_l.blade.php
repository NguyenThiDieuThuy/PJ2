@extends('admin.layout.master')
@section('title','cập nhật vị trí sách')
@section('content')
<h1 class="text-center display-4">Cập nhật vị trí sách</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data">
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon0">ID</span>
  <input readonly value="{{$kiemtra->id}}"  type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon0">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Kệ sách</span>
  <input value="{{$kiemtra->bookshelf}}" name="bookshelf" type="text" class="form-control" placeholder="Kệ sách"  aria-describedby="basic-addon2">
</div>
<button class="btn btn-primary">UPDATE</button>

</form>
@endsection
