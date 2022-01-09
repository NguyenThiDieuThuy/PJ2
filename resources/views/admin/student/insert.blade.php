@extends('admin.layout.master')
@section('title','thêm  sinh viên')
@section('content')
<h1 class="text-center display-4">Tạo thẻ sinh viên</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data" action="{{url('/createss')}}" id="insert" >
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Tên sinh viên</span>
  <input name="name" type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Ngày sinh</span>
  <input name="dob" type="date" class="form-control" placeholder="Ngày sinh"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Lớp học</span>
  <input name="class" type="text" class="form-control" placeholder="Lớp học"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Ngành học</span>
  <input name="faculty" type="text" class="form-control" placeholder="Ngành học"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Số điện thoại</span>
  <input name="phone" type="text" class="form-control" placeholder="Số điện thoại"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Ngày tạo</span>
  <input name="createdate" type="date" class="form-control" placeholder="Ngày tạo"  aria-describedby="basic-addon2">

</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Ngày hết hạn</span>
  <input name="expirationdate" type="date" class="form-control" placeholder="Ngày hết hạn"  aria-describedby="basic-addon2">
</div>
<button class="btn btn-primary text-center">Tạo thẻ sinh viên</button>
</div>
</form>




@endsection