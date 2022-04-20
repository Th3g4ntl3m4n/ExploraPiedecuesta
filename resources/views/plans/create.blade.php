@extends('adminlte::page')

@section('title', 'Explora Piedecuesta | Empresas')

@section('content_header')
    <h1>Crear Plan</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype=”multipart/form-data” method="POST" action"{{ route('plan.store') }}">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nombre del Plan</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del plan" autocomplete="off" tabindex="1" required>
                </div>
                <div class="form-group">
                  <label for="description">Descripción del Plan</label>
                  <textarea id="description" name="description" class="form-control" tabindex="2" placeholder="Máximo 500 carácteres" required></textarea>
                </div>
                <div class="form-group">
                  <label>Tipo de Plan</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="type" id="type" name="type" tabindex="3" aria-hidden="true" required>
                    <option selected="selected" data-select2-id="0" value="">Selecciona una opción</option>
                    <option data-select2-id="1" value="1">Plan de Turismo</option>
                    <option data-select2-id="1" value="1">Alojamiento</option>
                    <option data-select2-id="2" value="2">Pasadía</option>
                    <option data-select2-id="3" value="3">Comida</option>
                  </select>
              </div>
              <div class="form-group" id="lodging_type">
                <label>Tipo de Alojamiento</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="type" id="type" name="type" tabindex="4" aria-hidden="true" required>
                    <option selected="selected" data-select2-id="0" value="">Selecciona una opción</option>
                    <option data-select2-id="1" value="1">Cabaña</option>
                    <option data-select2-id="0" value="0">Glamping</option>
                    <option data-select2-id="1">Hotel</option>

                </select>
              </div>
              <div class="form-group">
                <label>Cantidad de Personas</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="type" id="type" name="type" tabindex="5" aria-hidden="true" required>
                    <option selected="selected" data-select2-id="0" value="">Selecciona una opción</option>
                  <option data-select2-id="0">Plan personal (1)</option>
                  <option data-select2-id="1" value="1">Plan Pareja (2)</option>
                  <option data-select2-id="2" value="2">Plan Amigos</option>
                  <option data-select2-id="2" value="2">Plan Familia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Ubicación</label>
                  <input type="text" class="form-control" id="location" name="location" placeholder="Ingrese una instrucción de ubicación" autocomplete="off" tabindex="6" required>
              </div>
              <div class="form-group" >
                <label>Valor del Plan</label>
                <input type="number" class="form-control" id="cost" name="cost" placeholder="Digite el costo del plan" autocomplete="off" tabindex="7" required>
              </div>
              <div class="form-group">
                <input type="checkbox" id="featured" name="featured" tabindex="0" required><label>  ¿Plan Destacado?</label>
              </div>
              <div class="form-group">
                <label>Link video Youtube</label>
                  <input type="text" class="form-control" id="location" name="location" placeholder="Ingrese una instrucción de ubicación" autocomplete="off" tabindex="6" required>
              </div>
              <div class="form-group">
                <label>Agrega las imágenes del Plan (TODAS)</label>
                  <input type="file" name="images" id="images" multiple="multiple">
                </div>
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
          </div>


        </form>
      </div>
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
