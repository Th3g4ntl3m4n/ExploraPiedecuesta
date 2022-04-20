@extends('adminlte::page')

@section('title', 'Explora Piedecuesta | Empresas')

@section('content_header')
    <h1>Administración de Usuarios</h1>
@stop

@section('content')
    <a href="/crear-empresa" class="btn btn-primary">Crear Usuario</a><br>
    <div class="row">
      <table class="table table-bordered table-hover" id="agencies" >
        <thead>
        <tr>
          <th>Nombre</th>
          <th>Empresa</th>
          <th>Tipo de Usuario</th>
          <th>Estado</th>
          <th>&nbsp; </th>
        </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->company }} </td>
            <td>
              @php
                switch( $user->type ){
                  case 0:
                    echo "Administrador";
                  break;
                  case 1:
                   echo "Agente de Empresa";
                  break;
                  case 2:
                  echo "Visitante";
                  break;
                  default:
                   echo "Visitante";
                  break;
                }

              @endphp
              </td>
              <td>
                @php
                  switch( $user->status ){
                    case 0:
                      echo "<span class='badge bg-warning text-dark'>Registrado (P)</span>";
                    break;
                    case 1:
                     echo "Deshabilitado";
                    break;
                    case 2:
                    echo "Deshabilitado";
                    break;
                    default:
                     echo "Pendiente";
                    break;
                  }

                @endphp
                </td>
                <td>
                  <a class="btn btn-primary" href="{{ $user->id }}/show">Ver perfil</a>
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
