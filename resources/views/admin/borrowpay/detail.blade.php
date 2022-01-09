@extends('admin.layout.master')
@section('title','Phiếu mượn sách chi tiết')

@section('content')

<h1 class="text-center display-4">Phiếu mượn chi tiết</h1>

<div style="clear:both"></div>
<div class="container-fluid">
  <button  type="button">
  <a href="{{url('/indexbr')}}" style="color: salmon"> <i class="fas fa-arrow-alt-circle-left"></i>Back</a></button>
<button style="float: right;" type="button">
  <a href="{{url('/admin/borrowpay/insertdetail')}}" style="color: salmon"><i class="fas fa-plus-circle nav-icon"></i>Tạo phiếu</a></button>
  {{-- <i class="fas fa-arrow-alt-circle-left"></i>
  <i class="fas fa-undo"></i> --}}
  <table class="table table-borderd table-hover" id="student_tbl" >

  <thead>
  <tr class="table table-primary">
  <td>ID</td>
  <td>Họ tên sinh viên</td>
 
  <td> Tên sách</td>
  <td>Tác giả</td>
  
  <td>Ngày mượn</td>

  <td>Ngày trả</td>
 <td>Số lượng</td>
 <td>Trạng thái</td>
 <td>Tình trạng</td>
 <td>Hành động</td>
   


  </tr>
</thead>
<tbody>
  @forelse ($dt as $item)
  <a href="{{url('/kiemtra/'.$item->id)}}">
  <tr>
    
     <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
     <td>{{$item->nameb}}</td>
     <td>{{$item->author}}</td>
     
     <td>{{$item->borrowday}}</td>
     <td>{{$item->payday}}</td>
      <td>{{$item->quantity}}</td>
      
    
    <td>{{$item->stt==0 ?'Đã trả':($item->stt==1 ?'Đang mượn':'Phạt tiền')}}</td>
     
   <td>
     @if($item->payday <= $today)
     <span style="color:red">Hết hạn </span>
      @else
     <span style="color:green">Còn hạn</span>  
     @endif
   </td>
  
     <td>
      <a href="{{url('/editd/'.$item->id)}}"><i class="far fa-edit"></i></a>
        ||
       <a href="{{url('/deleted/'.$item->id)}}"><i class="far fa-trash-alt"></i></a>
     </td>
  </tr>
  @empty
  <tr>
  <td class="text-center" colspan="8">Danh sách trống</td>
  </tr>
  @endforelse
</tbody>
</table>
</div>

@endsection
@section('script')
<script>
  $(document).ready(function() {
    $('#student_tbl').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });

  });
</script>
@endsection

