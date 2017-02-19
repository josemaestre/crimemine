
    <section class="content">

 
 

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
                  <th>del</th>
                  <th>icono</th>
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach ($del as $deli )
                <tr>
                  <td> {{ $deli->tx_delito }} </td>
                  <td> {{ $deli->icon_name }} </td>
                  
                  @endforeach
                  </tr>
                </table>
                </div>
                </div>
                </div>
                </div>
                </section>






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