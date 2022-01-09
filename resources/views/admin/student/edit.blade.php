@extends('admin.layout.master')
@section('title','cập nhật sinh viên')
@section('content')
<h1 class="text-center display-4">Cập nhật sinh viên</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data">
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon0">ID</span>
  <input readonly value="{{$kiemtra->id}}"  type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon0">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Họ và tên</span>
  <input value="{{$kiemtra->name}}" name="name" type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Ngày sinh</span>
  <input value="{{$kiemtra->dob}}" name="dob" type="date" class="form-control" placeholder="sđt"  aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon3">Lớp học</span>
  <input value="{{$kiemtra->class}}" name="class" type="text" class="form-control" aria-describedby="basic-addon3">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon4">Ngành học</span>
  <input value="{{$kiemtra->faculty}}" name="faculty" type="text" class="form-control" placeholder="gender"  aria-describedby="basic-addon4">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon5">Số điện thoại</span>
  <input value="{{$kiemtra->phone}}" name="phone" type="text" class="form-control" placeholder="gender"  aria-describedby="basic-addon4">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon4">Ngày tạo</span>
  <input value="{{$kiemtra->createdate}}" name="createdate" type="date" class="form-control" placeholder="gender"  aria-describedby="basic-addon4">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon4">Ngày hết hạn</span>
  <input value="{{$kiemtra->expirationdate}}" name="expirationdate" type="date" class="form-control" placeholder="gender"  aria-describedby="basic-addon4">
</div>

<button class="btn btn-primary">UPDATE</button>

</form>
@endsection