@extends('admin.layout.master')
@section('title','thêm  sách')
@section('content')
<h1 class="text-center display-4">Thêm sách</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data" action="/create" >
@csrf
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Tên sách</span>
  <input name="nameb" type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2"> Tác giả </span>
  <input name="author" type="text" class="form-control" placeholder="Tác giả"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Nhà xuất bản </span>
  <input name="publish" type="text" class="form-control" placeholder="NXB"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2">Số lượng </span>
  <input name="quantity" type="text" class="form-control" placeholder="Số lượng"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <input name="image" type="file" class="form-control"  accept="image/*">
</div>
<div class="input-group mb-3">
<select  class="custom-select" id="input1" name="stt">
  <option></option>
    <option  value="1">Còn sách</option>
    <option  value="0">Hết sách</option>
    
  </select>
</div>
<div class="input-group mb-3">
  <select class="custom-select" id="input2" name="id_type" >
    <option></option>
    <label for="loai">Loại</label>
    @foreach ($types as $item)
   
        <option  value="{{$item->id}}">{{$item->names}}</option>
    @endforeach
    
  </select>
</div>
<div class="input-group mb-3">
  <select  style="width: 500px" id="input3"  name="id_location" >
   <option></option>
    @foreach ($locations as $item)
    <option value="{{$item->id}}">{{$item->bookshelf}}</option>
    @endforeach
  </select>
</div>

<div>
<textarea name="decrip" cols="90" rows="10" ></textarea>
</div>

<button class="btn btn-primary">Thêm</button>

</form>
@endsection
@section('script')
 <script type="text/javascript">
 $(document).ready(function() {
    $('.custom-select').select2();
});
  
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#input1").select2({
            placeholder: "Tình trạng",
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
        placeholder: "Vị trí",
        allowClear: true
    });
</script>
@endsection 