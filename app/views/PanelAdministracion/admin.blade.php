@extends('Layouts.InnoIO')
@section('Contenido')
<div class="span6">
  <table class="table table-bordered table-striped">
    <caption id="cap-eventos">Eventos Proximos</caption>
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre de Evento</th>
        <th>Fecha Evento</th>
        <th>Cantidad Inscritos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Capacitacion</td>
        <td>23/11/2013</td>
        <td>18</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="span6">
    <table class="table table-bordered table-striped">
      <caption id="cap-usuarios">Ultimos Usuarios</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre de Usuario</th>
          <th>Twitter</th>
          <th>Ultimo Ingreso</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Angelo Leva</td>
          <td>@angelolev</td>
          <td>12/11/2013</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection