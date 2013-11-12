@extends('Layouts.InnoIO')
@section('Contenido')
	<div class="span6">
      <table class="table table-bordered table-striped">
       <caption id="cap-usuarios">Usuarios Registrados</caption>
       <thead>
         <tr>
           <th>#</th>
           <th>Nombre de Usuario</th>
           <th>Twitter</th>
           <th>Ultimo Ingreso</th>
           <th>Acciones</th>
         </tr>
       </thead>
       <tbody id="tbl-usuario">
         <tr>
           <td>1</td>
           <td>Angelo Leva</td>
           <td>@angelolev</td>
           <td>12/11/2013</td>
           <td><a href="" title="Convertir en Admin"><i class="fa fa-smile-o fa-2x" style="color:#3498db"></i></a></td>
                    </tr>
        </tbody>
      </table>
    </div>
    <div class="span6">
  </div>
@endsection