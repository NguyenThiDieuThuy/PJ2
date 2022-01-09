@extends('admin.layout.master')
@section('title','cập nhật khách hàng')
@section('content')
<h1 class="text-center display-4"> Cập nhật Phiếu mượn</h1>
<form class="text-center" style="width:60%;margin:auto;" method="POST" enctype="multipart/form-data">
@csrf
@foreach ($kiemtra as $item)
   <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon0">ID</span>
    <input readonly value="{{$item->id}}"  name="id" type="text" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon0">
  </div>  
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Ngày mượn</span>
    <input  value="{{$item->borrowday}}" name="borrowday" type="date" class="form-control" placeholder="Họ và tên"  aria-describedby="basic-addon1">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon2"> Ngày trả </span>
    <input value="{{$item->payday}}"  name="payday" type="date" class="form-control" placeholder="Tác giả"  aria-describedby="basic-addon2">
  </div>
  <div class="input-group mb-3">
  
  
    <select class="custom-select" id="inputGroupSelect01" name="id_student">
      <option ></option>
      <label for="loai">Sinh viên</label>
      @foreach ($kiemtra1 as $item)
     
          <option  value="{{$item->id}}">{{$item->name}}{{$item->class}}</option>
      @endforeach
      
    </select>
  </div> 
 
@endforeach

<button class="btn btn-primary">UPDATE</button>

</form>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#inputGroupSelect01").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
</script>
@endsection