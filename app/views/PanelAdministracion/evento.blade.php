@extends('Layouts.InnoIO')
@section('Contenido')  
  <div class="span6">
    <table class="table table-bordered table-striped">
      <caption id="cap-eventos">Lista de Eventos</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre de Evento</th>
          <th>Fecha de Evento</th>
          <th>Cantidad de Inscritos</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><a href="">Capacitacion</a></td>
          <td>23/11/2013</td>
          <td>18</td>
        </tr>
        <tr>
          <td>2</td>
          <td><a href="">Charla Informativa</a></td>
          <td>23/11/2013</td>
          <td>18</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="span6">
   <table id="tbl-asistentes" class="table table-bordered table-striped">
      <caption id="cap-usuarios">Asistentes Inscritos</caption>
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Fecha Registro</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Angelo Leva</td>
          <td>angelokta7@gmail.com</td>
          <td>12/11/2013</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jeyson Fuentes</td>
          <td>heysonfuentes@gmail.com</td>
          <td>12/11/2013</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Jorge Pacora</td>
          <td>jpacorasilva@gmail.com</td>
          <td>12/11/2013</td>
        </tr>
      </tbody>
    </table>
    <div class="row-fluid">
              <div class="span4">
                <table id="tbl-descripcion" class="table table-bordered table-striped">
                  <caption id="cap-descripcion">Descripcion del Evento</caption>
                  
                  <tbody>
                    <tr>
                      <td>Descripcion del evento Descripcion del evento Descripcion del Evento Descripcion del evento Descripcion del evento Descripcion del evento Descripcion del evento Descripcion del evento Descripcion del evento Descripcion del evento</td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span2">
                <table id="tbl-horario" class="table table-bordered table-striped">
                  <caption id="cap-horario">Horario de Evento</caption>
                  
                  <tbody>
                    <tr>
                      <td>Inicio: <h2 style="margin:0">09:00</h2></td>
                    </tr>
                    <tr>
                      <td>Fin: <h2 style="margin:0">12:00</h2></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <img id="tbl-imagen" src="{{URL::asset('img/evento1.png')}}"><p>516 x 284</p>
              </div>
            </div>
          </div>
  </div>
@endsection