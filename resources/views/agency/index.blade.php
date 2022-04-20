@extends('adminlte::page')

@section('title', 'Explora Piedecuesta | Empresas')

@section('content_header')
    <h1>Administración de Empresas</h1>
@stop

@section('content')
    <p>Administración de Agencias</p>
    <a href="/crear-empresa" class="btn btn-primary">Crear Empresa</a><br>
    <div class="row">
      <table class="table table-bordered table-hover" id="agencies" >
        <thead>
        <tr>
          <th>Fecha Creación</th>
          <th>Nombre</th>
          <th>Nit</th>
          <th>Tipo</th>
          <th>Estado</th>
          <th>&nbsp; </th>
        </tr>
        </thead>
        <tbody>
          @foreach ($agencies as $agency)
          <tr>
            <td>{{ $agency->created_at }}</td>
            <td>{{ $agency->name }}</td>
            <td>{{ $agency->nit }}</td>
            <td>
              @php
                switch( $agency->type ){
                  case 0:
                    echo "Agencia de Turismo";
                  break;
                  case 1:
                   echo "Hotel";
                  break;
                  case 2:
                  echo "Restaurante";
                  break;
                  default:
                   echo "Agencia de Turismo";
                  break;
                }

              @endphp
              </td>
              <td>
                @php
                  switch( $agency->status ){
                    case 0:
                      echo "<span class='badge bg-warning text-dark'>Pendiente</span>";
                    break;
                    case 1:
                     echo "Habilitada";
                    break;
                    case 2:
                    echo "Deshabilitada";
                    break;
                    default:
                     echo "Pendiente por Revisión";
                    break;
                  }

                @endphp
                </td>
                <td>
                  <span class="badge bg-primary"><a href="#">Detalles</a></span>
                </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@stop

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" ></script>
<script>
  $(document).ready(function() {
    $('#agencies').DataTable({

    });
  });

</script>
@stop
