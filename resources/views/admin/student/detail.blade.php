@extends('admin.layout.master')
@section('title','Chi tiết thẻ sinh viên')
@section('content')

<table style="margin:auto;width:400px;" border="1px"  id="student_tbl">
     
      
   
      

  
      <thead>
    
         <tr><th><h2 style="text-align: center">Thẻ Thư viện sinh viên</h2></th></tr></thead>
         <tbody>
                  <tr>
                       
                        <td> Họ và tên:{{$kiemtra10->name}}</td></tr>
                  <tr>
                        <td>  Ngày sinh:
                  {{$kiemtra10->dob}}</td></tr>
                  <tr>
                        <td> Lớp học:
                  {{$kiemtra10->class}}</td></tr>
                
                  <tr>
                        <td> Ngành học:
                  {{$kiemtra10->faculty}}
                       </td>
                </tr>
                  <tr>
                        <td>Niên khóa:
                  {{$kiemtra10->createdate}} ---
                        {{$kiemtra10->expirationdate}}
                      </td>
               
            
                  </tr>
    
         </tbody>
    


</table>
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