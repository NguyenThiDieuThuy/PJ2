<?php 
$connect= new mysqli('localhost','root','','pj2');
$query ="SELECT `book`.*,COUNT(detail.id_book)AS 'number_book' FROM`detail`INNER JOIN `book` ON detail.id_book=book.id GROUP BY detail.id_book ";
$result=mysqli_query($connect,$query);
$data=[];
while ($row = mysqli_fetch_array($result)){
    $data[]=$row;
   
}
// echo "<pre>";
//     var_dump($data);
//     echo "</pre>";
?>


@extends('admin.layout.master')
@section('title','Trang chủ Admin')

@section('content')

    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Quản lí thẻ sinh viên</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <a href="{{url('/index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Quản lí sách</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a href="{{url('/indes')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Quản lí mượn trả</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{url('/indexbr')}}"  class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Tài liệu tham khảo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
       
    {{-- <img width="420" height="240" controls src="storage/kiemtra/tt.png" style="float: right"> --}}

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
    
            var data = google.visualization.arrayToDataTable([
                ['nameb','number_book'],
                <?php 

              foreach ($data as $key ) {
              echo "['". $key['nameb']."' , ". $key['number_book'] . "],";
              }
   
             ?> 
              
            ]);
    
            var options = {
              title: 'Biểu đồ số lượng sách được mượn'
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
            chart.draw(data, options);
          }
         
        </script>
      
        <div id="piechart" style="width: 1000px; height: 600px;margin:auto"></div>
  
    
 
       
   
      
    
   

   
      @endsection



  