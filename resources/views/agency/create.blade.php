@extends('adminlte::page')

@section('title', 'Explora Piedecuesta | Empresas')

@section('content_header')
    <h1>Crear Empresa</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->

        <!-- Form Element sizes -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Different Height</h3>
          </div>
          <div class="box-body">
            <input class="form-control input-lg" type="text" placeholder=".input-lg">
            <br>
            <input class="form-control" type="text" placeholder="Default input">
            <br>
            <input class="form-control input-sm" type="text" placeholder=".input-sm">
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Different Width</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-3">
                <input type="text" class="form-control" placeholder=".col-xs-3">
              </div>
              <div class="col-xs-4">
                <input type="text" class="form-control" placeholder=".col-xs-4">
              </div>
              <div class="col-xs-5">
                <input type="text" class="form-control" placeholder=".col-xs-5">
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- Input addon -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Input Addon</h3>
          </div>
          <div class="box-body">
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <br>

            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="text" class="form-control">
              <span class="input-group-addon">.00</span>
            </div>

            <h4>With icons</h4>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <br>

            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
              <input type="text" class="form-control">
              <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
            </div>

            <h4>With checkbox and radio inputs</h4>

            <div class="row">
              <div class="col-lg-6">
                <div class="input-group">
                      <span class="input-group-addon">
                        <input type="checkbox">
                      </span>
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-lg-6">
                <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio">
                      </span>
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <h4>With buttons</h4>

            <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

            <div class="input-group input-group-lg">
              <div class="input-group-btn">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action
                  <span class="fa fa-caret-down"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <input type="text" class="form-control">
            </div>
            <!-- /input-group -->
            <p class="margin">Normal</p>

            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Action</button>
              </div>
              <!-- /btn-group -->
              <input type="text" class="form-control">
            </div>
            <!-- /input-group -->
            <p class="margin">Small <code>.input-group.input-group-sm</code></p>

            <div class="input-group input-group-sm">
              <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
