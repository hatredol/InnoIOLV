<!DOCTYPE HTML>
    <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>{{$titulo}}</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Innodesign, Innodesign Peru, Exposiciones tecnologia tacna, tecnologia, web tacna, startup tacna">
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://www.id-peru.com/" />
      <meta property="og:image" content="http://www.id-peru.com/static/img/ogp.png" />
      <meta name="author" content="Innodesign - Creamos y dise&ntilde;amos la innovaci&oacute;n">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    
    <!-- Estilos -->
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/bootstrap-responsive.css')}}
    {{HTML::style('css/styles.css')}}
    {{HTML::style('css/flat-ui.css')}}
    {{HTML::style('font-awesome/css/font-awesome.css')}}
    
    <!-- JS -->
    
    {{HTML::script('http://code.jquery.com/jquery-1.9.1.js')}}
    {{HTML::script('js/jquery.notify-better.js')}}
    {{HTML::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAyPyPG1sYvkaQl2tb2WHZl823sy7nvH00&sensor=false')}} 
    
    <!-- Fonts -->

    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">  
        <![endif]-->
    <!-- Google Web fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cantora+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'> -->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    
    </head>
    <body>
      <div class="row-fluid text-center" style="border-bottom: 3px solid #3498db; padding:10px 0px;">
          <div class="span2 logo">
            <img src="{{URL::asset('img/id.png')}}" width="70%;">
          </div>
          <div class="span10">
            <h1 class="grande">Administraci&oacute;n de Eventos</h1>
          </div>
      </div>
      <div class="container-fluid">
        <div class="row-fluid" style="margin-top:20px">
          <div class="span2">
            <div class="row-fluid">
             <!--  <form id="form-buscar">
                <input type="text" class="search-query" placeholder="" style="border: 2px solid ; padding: 5px 0px 0 37px;">
                <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>
              </form> -->
              <ul class="nav nav-tabs nav-stacked">
                
                <li><a href="">Inicio</a></li>
                <li><a href="">Configuracion</a></li>
                <li><a href="">Usuarios</a></li>
                <li><a href="">Opciones Avanzadas</a></li>
              </ul>
            </div>
          </div>
          <div class="span10">
            <div class="row-fluid text-center">
              <div class="span3" style="background:#3498db;padding:10px">
                <i class="fa fa-plus fa-2x" style="color: #fff;"></i><a href="#myModal" role="button" data-toggle="modal"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Nuevo Evento</h2></a>
              </div>
              <div class="span3" style="background:#2ecc71;padding:10px">
                <i class="fa fa-pencil fa-2x" style="color: #fff;"></i><a href="ev-evento.html"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Modificar Evento</h2></a>
              </div>
              <div class="span3" style="background:#34495e;padding:10px">
                <i class="fa fa-align-justify fa-2x" style="color: #fff;"></i><a href="{{URL::route('Eventos')}}"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Lista de Eventos</h2></a>
              </div>
              <div class="span3" style="background:#e74c3c;padding:10px">
                <i class="fa fa-user fa-2x" style="color: #fff;"></i><a href="{{URL::route('Eventos')}}"><h2 style="color:#fff; margin:20px; font-size: 1.5em">Usuarios</h2></a>
              </div>
            </div>
            <div class="row-fluid" style="margin-top:50px">
              @yield('Contenido')
            </div>
          </div>
        </div>
      </div>
      <div id="myModal" class="modal hide fade text-center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel"><i class="fa fa-check"></i> Agregar Evento</h3>
            </div>
            <div class="modal-body">
              <form id="formAgregar" enctype="multipart/form-data">
                <input name="nombreEvento" class="form-exponer" type="text" placeholder="Nombre del Evento">
                <input name="fechaEvento" class="form-exponer" type="date" placeholder="Fecha del evento">
                <input name="imagenEvento" class="form-exponer" type="file" placeholder="Imagen del Evento">
                <textarea name="" rows="3" style="width:80%; resize:none" placeholder="Descripcion del evento"></textarea>
                <br/>
                <a id="btnEnviar" class="btn-enviar"><i class="fa fa-plus-circle"></i> Crear!</a>
              </form>
            </div>
      </div>
      {{HTML::script('js/bootstrap.js')}}
      @include('Layouts.jsInnoIO');
    </body>
    <footer>
      <h5>2013 ©Innodesign - Todos los Derechos Reservados</h5>
    </footer>
    </html>