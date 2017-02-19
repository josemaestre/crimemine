{!! Form::open(['class'=>'form-horizontal','role'=>
'form','method'=>'POST','url'=>'/auth/login']) !!}

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Crimen</h3>
            </div>
            <div class="box-body">
              <div class="input-group">
                    <span class="input-group-addon">@</span>
                    {!! Form::text('co_usr', null, ['class' => 'form-control','placeholder' => 'Username']) !!}

                </div>
                <br>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa-bullseye"></i></span>
                    {!! Form::text('nu_lat', null, ['class' => 'form-control','placeholder' => 'Latitud']) !!}
                    {!! Form::text('nu_long', null, ['class' => 'form-control','placeholder' => 'Longitud']) !!}
                    {{--<input type="text" class="form-control" placeholder="Username"  fa-map-marker>--}}
                </div>
                <br>
                <h4>With icons</h4>
                {!! Form::select('breed_id', ['1' =>'holj','2' => 'casi list'], null, ['class' =>
                'form-control']) !!}
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <br>

                <!-- Date -->
                <div class="form-group">
                    <label>Fecha del delito:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                @include('layouts.partials.ubicacion')


              {{--  {!!$map['html']!!}--}}

                       {{-- <h1>Add Vendor, Location</h1>
                        --}}{{--{{Form::open(array('url'=>'/vendor/add', 'files'=>true))}}--}}{{--
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control input-sm" name="title">
                        </div>

                        <div class="form-group">
                            <label for="">Map</label>
                            <input type="text" id="searchmap">
                            <div id="map-canvas"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Lat</label>
                            <input type="text" class="form-control input-sm" name="lat" id="lat">
                        </div>

                        <div class="form-group">
                            <label for="">Lng</label>
                            <input type="text" class="form-control input-sm" name="lng" id="lng">
                        </div>--}}








                <!-- Date -->
                <div class="form-group">
                    <label>Fecha proceso:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        {!! Form::text('fe_proc', null, ['class' => 'form-control','placeholder' => 'fecha proceso']) !!}

                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Fecha delito2 proceso:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        {!! Form::text('fe_crimen', null, ['class' => 'form-control','placeholder' => 'fecha proceso']) !!}
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <h4>Delito</h4>
                {!! Form::select('id_delito', ['1' =>'Hurto','2' => 'Robo','3' =>'Micro Trafic','4' => 'Agresion'], null, ['class' =>
                'form-control']) !!}
                <br>

                <h4>Movil</h4>
                {!! Form::select('tx_movil', ['1' =>'Se desconoce','2' => 'Ajuste de cuentas','3' =>'Enfrentamiento entre Bandas','4' => 'Arrechera extrema'], null, ['class' =>
                'form-control']) !!}
                <br>

                <h4>Ruta de Escape</h4>
                {!! Form::select('id_rut_esc', ['1' =>'Moto','2' => 'Vehiculo','3' =>'A Pies','4' => 'Por la Derecha'], null, ['class' =>'form-control']) !!}
                <br>

                <h4>Parroquia</h4>
                {!! Form::select('id_prq', ['845' =>'Altagracia','846' => 'San Anotonio','843' =>'Guiacaipuro','844' => 'San Agustin'], null, ['class' =>
                'form-control']) !!}
                <br>

                <h4>Estatus del Crimen</h4>
                {!! Form::select('id_stat_crimen', ['1' =>'Caso Abierto','2' => 'Caso Cerrado','3' =>'Caso Sin Resolver','4' => 'Datos Por Completar','5' => 'En Progreso'], null, ['class' =>
                'form-control']) !!}
                <br>

                <!-- textarea -->
                <div class="form-group">
                    <label>Direccion</label>
                    {!! Form::textarea('tx_direccion', null, ['class' => 'form-control','placeholder' => 'Direccion del Suceso', 'rows' => '3']) !!}

                </div>
            </br>
                <div class="form-group">
                    <label>Descripcion</label>
                    {!! Form::textarea('tx_descripcion', null, ['class' => 'form-control','placeholder' => 'Descripcion del Suceso', 'rows' => '6']) !!}

                </div>


                <!-- /. tools -->
{{--
                <i class="fa fa-map-marker"></i>

                <h3 class="box-title">
                    Visitors
                </h3>
            </div>
              <div class="box-body">
                  <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.box-body-->
              <div class="box-footer no-border">
                  <div class="row">
                      <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                          <div id="sparkline-1"></div>
                          <div class="knob-label">Visitors</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                          <div id="sparkline-2"></div>
                          <div class="knob-label">Online</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-4 text-center">
                          <div id="sparkline-3"></div>
                          <div class="knob-label">Exists</div>
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->
              </div>
          </div>--}}
          <!-- /.box -->

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
          {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
