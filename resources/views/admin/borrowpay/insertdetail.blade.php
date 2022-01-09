@extends('admin.layout.master')
@section('title','Tạo phiếu mượn')
@section('content')
<h1 class="text-center display-4">Tạo Phiếu mượn chi tiết</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data" action="/createdetail" >
@csrf
<div class="input-group mb-3">
  {{-- {{dd($borrowpay)}} --}}
<select class="custom-select" id="input1" name="id_borrowpay">
  <option ></option>
  <label for="loai">Sinh viên</label>
 
  @foreach ($borrowpay as $item)
 
      <option  value="{{$item->id}}">{{$item->name}} - {{$item->class}}</option>//muon lay ra ten o doan nay
  @endforeach
  
</select>
</div>
<div class="input-group mb-3">
  <select class="custom-select" id="input2" name="id_book">
    <option ></option>
    <label for="loai">Sách</label>
    @foreach ($book as $item)
   
        <option  value="{{$item->id}}">{{$item->nameb}}{{$item->author}}</option>
    @endforeach
    
  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2"> Số lượng</span>
  <input name="quantity" type="text" class="form-control" placeholder="Số lượng"  aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <select  class="custom-select" id="input3" name="stt">
    <option > </option>

      <option  value="1">Đang mượn</option>
      <option  value="0">Đã trả</option>
       <option value="2">Quá hạn</option>
    </select>
  </div>




  
<button class="btn btn-primary">Thêm</button>

</form>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#input1").select2({
            placeholder: "Phiếu mượn chi tiết",
            allowClear: true
        });
</script>
<script type="text/javascript">

  $("#input2").select2({
        placeholder: " tên đầu sách",
        allowClear: true
    });
</script>
<script type="text/javascript">

  $("#input3").select2({
        placeholder: " Trạng thái",
        allowClear: true
    });
</script>
@endsection
