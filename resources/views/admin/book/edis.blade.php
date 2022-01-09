@extends('admin.layout.master')
@section('title','cập nhật khách hàng')
@section('content')
<h1 class="text-center display-4">Cập nhật sách</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data">
@csrf
@foreach ($kiemtra as $item)
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon0">ID</span>
  <input readonly value="{{$item->id}}"  name="id" type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon0">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Tên sách</span>

  <input value="{{$item->nameb}}"  name="nameb" type="text" class="form-control" placeholder="Tên sách"  aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Tác giả</span>
  <input value="{{$item->author}}" name="author" type="text" class="form-control" placeholder="Tác giả"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Nhà xuất bản</span>
    <input  value="{{$item->publish}}" name="publish" type="text" class="form-control" placeholder="NXB" aria-describedby="basic-addon3">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon4">Số lượng</span>
      <input value="{{$item->quantity}}" name="quantity" type="text" class="form-control" placeholder="Số lượng" aria-describedby="basic-addon3">
    </div>
<div class="input-group mb-3">
  <input name="image" type="file" class="form-control"  accept="image/*">
</div>
<div class="input-group mb-3">
  <select  class="custom-select" id="input3" name="stt">
    <option ></option>
      <option  value="1">Còn sách</option>
      <option  value="0">Hết sách</option>
      
    </select>
</div>
<div class="input-group mb-3">
 
  <select class="custom-select" id="input2" name="id_type">
    <label for="loai">Loại</label>
    @foreach ($kiemtra1 as $item)
    <option></option>
        <option value="{{ $item->id }}">{{$item->names}}</option>
    @endforeach
    
  </select>
</div>
<div class="input-group mb-3">
  <select class="custom-select" id="input1"  name="id_location">
    <label for="giasach">Kệ  sách</label>
    @foreach ($kiemtra3 as $item)
    <option></option>
    <option value="{{$item->id}}">{{$item->bookshelf}}</option>
@endforeach
  </select>
</div>
<div>
  <textarea  name="decrip" cols="90" rows="10" ></textarea>
</div>
@endforeach

<button class="btn btn-primary">UPDATE</button>

</form>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#input1").select2({
            placeholder: "Vị trí",
            allowClear: true
        });
</script>
<script type="text/javascript">

  $("#input2").select2({
        placeholder: "Loại sách",
        allowClear: true
    });
</script>
<script type="text/javascript">

  $("#input3").select2({
        placeholder: "Tình trạng",
        allowClear: true
    });
</script>
@endsection