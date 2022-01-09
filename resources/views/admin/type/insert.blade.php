@extends('admin.layout.master')
@section('title','thêm  loại sách')
@section('content')
<h1 class="text-center display-4">Thêm loại sách</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data" action="{{url('/creates')}}" >
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Loại sách</span>
  <input name="names" type="text" class="form-control" placeholder="Loại sách"  aria-describedby="basic-addon1">
</div>


<button class="btn btn-primary">Thêm</button>
</div>
</form>
@endsection