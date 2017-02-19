
    <section class="content">

      <!-- Small boxes (Stat box) -->
      <div class="row">



        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

              <h3>
              {{$gross_orders }}  
              </h3>
              <p>    Net Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>18.5<sup style="font-size: 20px">%</sup></h3>

              <p>  Conversion</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$avg_ticket }} </h3>

              <p> {{$kpi['Robo']['incidencias'] }} AVG Ticket </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $nmv }} </h3>

              <p>{{$kpi['Total']['incidencias'] }}  NMV</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>




 
 
 <br>
 <div class="box-body no-padding">
  <div class="row">
       <div id="chart-2" name="chart-2" class="col-xs-4"></div> 
       <div id="chart-3" name="chart-3" class="col-xs-4"></div> 
       <div id="chart-4" name="chart-4" class="col-xs-4"></div> 
  </div>
</div>
<br>
<div id="chartdiv" name="chartdiv"></div>

      <!-- ./col -->
<!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Resultados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table id="example2" class="table table-bordered table-striped">
                <thead>
                
                 <tr>
                  <th>Canal</th>
                  <th>Pais</th>
                  <th>Gross Orders</th>
                  <th>Net Orders</th>
                  <th>Gross Revenew</th>
                  <th>Net Revenew</th>
                  <th>AVG Ticket</th>


                </tr>
                </thead>
                <tbody>
                
                @foreach ($campanas as $campana )
                <tr>
                  <td> {{ $campana->channel }} </td>
                  <td> {{ $campana->seat }} </td>
                  <td> {{ $campana->gross }} </td>
                  <td> {{ $campana->net }} </td>
                  <td> {{ number_format($campana->gross_rev,2,'.', '') }} </td>
                  <td> {{ number_format($campana->net_rev,2,'.', '') }} </td>
                  <td> {{ number_format($campana->avg_ticket,2,'.', '') }} </td>
                  @endforeach
                  </tr>
                </table>
                </div>
                </div>
                </div>
                </div>
                </section>







<section class="content-header">
      <h1>
        Agentes
        <small>advanced tables</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Resultados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                
                 <tr>
                  <th>Agente</th>
                  <th>Gross Orders</th>
                  <th>Net Orders</th>
                  <th>Gross Revenew</th>
                  <th>Net Revenew</th>
                  <th>AVG Ticket</th>
                  <th>% Gross to Net</th>

                </tr>
                </thead>
                <tbody>
                
                @foreach ($agentes as $agente )
                <tr>
                  
                  <td> {{ $agente->agente }} </td>
                  <td> {{ $agente->gross }} </td>
                  <td> {{ $agente->net }} </td>
                  <td> {{ number_format($agente->gross_rev,2,'.', '') }} </td>
                  <td> {{ number_format($agente->net_rev,2,'.', '') }} </td>
                  <td> {{ number_format($agente->avg_ticket,2,'.', '') }} </td>
                  <td> {{ number_format($agente->grosstonet,2,'.', '') }} </td>

                  @endforeach
                  </tr>
                </table>
                </div>
                </div>
                </div>
                </div>
                </section>


<!-- Main content -->




<!-- 
<link rel="stylesheet" href="{{ asset('../plugins/datatables/dataTables.bootstrap.css') }}">
-->

<!-- <link rel="stylesheet" href="{{ asset('../../plugins/datatables/dataTables.bootstrap.css') }}">
 



 <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css1">

 -->

<!--
<script src="{{ asset('/js/FusionCharts.js') }}" type="text/javascript"></script>
-->


<!-- bootstrap datepicker 
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
-->


   <script>
  $(function () {
    $("#example2").DataTable();
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
       dom: 'T<"clear">lfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
  });
</script>

<script type="text/javascript" src="Charts/FusionCharts.js"></script>


<script type="application/javascript">
/*swal("Good job!", "You clicked the button!", "success")*/


        //var chart = new FusionCharts("Charts/StackedColumn3D.swf", "ChartId",    "100%", "400", "1", "1");
        var chart = new FusionCharts("Charts/StackedColumn3D.swf", "chart1",    "100%", "400", "0","1");
        /*chart.setJSONUrl("http://api.bertho.web.id/grafik/tiket2.php");*/
        chart.setJSONUrl("Charts/data/data.json"); 
        //charts.setCurrentRenderer("javascript");
        //chart['debugger'].outputFormat('verbose');
        //chart['debugger'].enable(true);
        chart.render("chartdiv");



 //FusionCharts.setCurrentRenderer('flash');

        //var chart = new FusionCharts("Charts/StackedColumn3D.swf", "ChartId",    "100%", "400", "1", "1");
        var chart = new FusionCharts("Charts/AngularGauge2.swf", "chart2",    "350", "200", "0","1");
        /*chart.setJSONUrl("http://api.bertho.web.id/grafik/tiket2.php");*/
        chart.setJSONUrl("Charts/data/gaudata.json"); 
        //charts.setCurrentRenderer("javascript");
        //chart['debugger'].outputFormat('verbose');
        //chart['debugger'].enable(true);
        chart.render("chart-2");



        //var chart = new FusionCharts("Charts/StackedColumn3D.swf", "ChartId",    "100%", "400", "1", "1");
        var chart = new FusionCharts("Charts/AngularGauge2.swf", "chart3",    "350", "200", "0","1");
        /*chart.setJSONUrl("http://api.bertho.web.id/grafik/tiket2.php");*/
        chart.setJSONUrl("Charts/data/gaudata3.json"); 
        //charts.setCurrentRenderer("javascript");
        //chart['debugger'].outputFormat('verbose');
        //chart['debugger'].enable(true);
        chart.render("chart-3");


        //var chart = new FusionCharts("Charts/StackedColumn3D.swf", "ChartId",    "100%", "400", "1", "1");
        var chart = new FusionCharts("Charts/AngularGauge2.swf", "chart4",    "350", "200", "0","1");
        /*chart.setJSONUrl("http://api.bertho.web.id/grafik/tiket2.php");*/
        chart.setJSONUrl("Charts/data/gaudata4.json"); 
        //charts.setCurrentRenderer("javascript");
        //chart['debugger'].outputFormat('verbose');
        //chart['debugger'].enable(true);
        chart.render("chart-4");


        
</script>