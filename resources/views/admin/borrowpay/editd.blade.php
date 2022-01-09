@extends('admin.layout.master')
@section('title','cập nhật phiếu mượn chi tiết')
@section('content')
<h1 class="text-center display-4"> Cập nhật Phiếu mượn chi tiết</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data">
@csrf

  {{-- <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon0">ID</span>
    @foreach ($detail1 as $item)
    <input readonly value="{{$item->id}}"  name="id" type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon0">
    @endforeach
  </div>   --}}
  <div class="input-group mb-3">
    <select class="custom-select" id="input3" name="id_borrowpay">
      <option ></option>
      <label for="loai">Sinh viên</label>
      @foreach ($detail1 as $item)
     
          <option  value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
      
    </select>
    </div>
    <div class="input-group mb-3">
      <select class="custom-select" id="input1" name="id_book">
        <option></option>
        <label for="loai">Sách</label>
        @foreach ($detail2 as $item)
       
            <option  value="{{$item->id}}">{{$item->nameb}}{{$item->author}}</option>
        @endforeach
        
      </select>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon2"> Số lượng</span>
      <input  value="{{$item->quantity}}"  name="quantity" type="text" class="form-control" placeholder="Số lượng"  aria-describedby="basic-addon2">
    </div>
    <div class="input-group mb-3">
      <select  class="custom-select" id="input2" name="stt">
        <option >Tình trạng </option>
    
          <option  value="1">Đang mượn</option>
          <option  value="0">Đã trả</option>
           <option value="2">Phạt tiền</option>
        </select>
      </div>
    
    



<button class="btn btn-primary">UPDATE</button>

</form>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#input1").select2({
            placeholder: "Select Book",
            allowClear: true
        });
</script>
<script type="text/javascript">

  $("#input3").select2({
        placeholder: "Select Name",
        allowClear: true
    });
</script>
@endsection