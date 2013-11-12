<!DOCTYPE HTML>
    <html lang="es">
    <head>
      <meta charset="utf-8">
      <title>Exposiciones y Charlas - Calendario de Actividades</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Innodesign, Innodesign Peru, Exposiciones tecnologia tacna, tecnologia, web tacna, startup tacna">
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://www.id-peru.com/" />
      <meta property="og:image" content="http://www.id-peru.com/static/img/ogp.png" />
      <meta name="author" content="Innodesign - Creamos y dise&ntilde;amos la innovaci&oacute;n">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    
    <!-- Estilos -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/flat-ui.css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- JS -->
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery.notify-better.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyPyPG1sYvkaQl2tb2WHZl823sy7nvH00&sensor=false"></script>
    <script>

      function initialize() {
        var myLatlng = new google.maps.LatLng(-18.020474999999998,-70.25001944444445);
        var mapOptions = {
          zoom: 16,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          panControl: false,
          zoomControl: false,
          scaleControl: true,
          disableDefaultUI: true,
          scrollwheel: false
          // draggable: false

        };

        var map = new google.maps.Map(document.getElementById('innomap'), mapOptions);

        var contentString =  '<div id="content" style=" width:200px; height:110px;">'+
            '<div id="headercontent" style="padding-top: 0px; margin-top: 0px; text-align:center">'+
            '<img src="img/favicon.png" /><br><br>'+
            '<h3 id="firstHeading" class="firstHeading" style="padding-top: 1px; margin-top: 0px; text-align:center">'+ 
              'Innodesign</h3></div>'  +
            '<div id="bodyContent" style="padding-top: 0px; margin-top: 0px; text-align:center">'+
            '<p>Calle Tacna 159 '+
            '<br>Tacna - Peru</p></div></div>';


        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 200
        });
       var image = {
          url: 'img/mark.png',
        };

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image,
            title: 'Innodesign - Web Design'
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <!-- Script contador inscritos -->
    
    <!-- fin script contador inscritos -->
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
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
    <header>
     
    
    </header>
      <div class="row-fluid text-center" style="border-bottom: 3px solid #3498db; padding:10px 0px;">
          <div class="span2 logo">
            <img src="img/id.png" width="70%;">
          </div>
          <div class="span10">
            <h1 class="grande">Calendario de Actividades</h1>
          </div>
      </div>
      <section id="expo">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span6">
              <p class="index">Queremos ayudarte a crecer como persona y como profesional, es por eso que estamos organizando distintas charlas, talleres y capacitaciones en distintas Tecnolog&iacute;as de Informaci&oacute;n, pero no s&oacute;lo eso, tambi&eacute;n te damos la oportunidad de dictar TU una charla, preparar tu capacitaci&oacute;n 
              hacia otras personas. </p>

              <p class="text-registro">Ent&eacute;rate de nuestras próximas conferencias!</p>
              <form action="/register" method="POST" id="formulario">
                
                <input class="form-participa" type="text" id="nombre" name="nombre" placeholder="Tu nombre" title="Escribe tu nombre" required="">   
                <input class="form-participa" title="Escribe tu correo electrónico" type="email" name="email" id="email" placeholder="Tu email" required="">  
                <input class="submit" type="submit" value="Inscribete!" id="inscribete-btn">           

              </form>

              
            </div>
            <div class="span6" style="text-align:right">
              <img src="img/documents.png" width="20%">
              <img src="img/tasks.png" width="20%">
              <img src="img/messenger2.png" width="20%">
              <h2 class="intro">  Comparte tu conocimiento</h2>
              <h2 class="intro-after"> con otras personas</h2>
              <!-- <div class="main" style="text-align:center">
                <a href="#" class="pointer reload bell"><span id="notification">...</span><br>Inscritos</a>
              </div> -->
            </div>
          </div>
        </div>
        </section>
        <!-- <section id="calendario">
        <div class="row-fluid">
          <div class="agenda">
            <div class="speechs left">
                    <ul>
                    <h2 style="margin-bottom:20px"> Conferencias</h2>

                        <li>
                            <div class="left">
                              <span class="hour">08:30</span>  
                            </div>
                            <div class="right">
                               <p class="speech">Registro</p> 
                            </div>
                        </li>
                        <li>
                            <div class="left">
                              <span class="hour">09:15</span>  
                            </div>
                            <div class="right">
                               <p class="speech">Apertura de Conferencia</p> 
                            </div>
                        </li>
                        <li>
                            <div class="left">
                              <span class="hour">09:30</span>  
                            </div>
                            <div class="right">
                               <p class="speech">HTML5 No el futuro, el presente <span>Angelo Leva Vizcarra</span></p> 
                            </div>
                        </li>
                        <li>
                            <div class="left">
                              <span class="hour">10:15</span>  
                            </div>
                            <div class="right">
                               <p class="speech">NodeJS <span>Jorge Pacora</span></p> 
                            </div>
                        </li>
                        <li>
                            <div class="left">
                              <span class="hour">11:00</span>  
                            </div>
                            <div class="right">
                               <p class="speech">MongoDB<span> Jeyson Fuentes</span></p> 
                            </div>
                        </li>
                        
                                              
                    </ul>
                </div>
            <div class="speechs right">
                    <ul class="ignite">
                        <h2 style="text-align:center; margin-bottom:20px"> <img src="img/id.png" alt="Exposiciones" width="50%"> </h2>
                         <li>
                          
                            <div class="right">
                               <p class="speech">Jeyson Fuentes<span>@jfuentes87</span></p> 
                            </div>
                        </li>
                        <li>
                          
                            <div class="right">
                               <p class="speech">Angelo Leva<span>@angelolev</span></p> 
                            </div>
                        </li>
                         <li>

                            <div class="right">
                               <p class="speech">Jorge Pacora<span>@jpacora</span></p> 
                            </div>
                        </li>
                                            
                    </ul>
                     
                </div>
          
          </div>
      </div>
      </section> -->
      <section id="eventos">
        <div class="row-fluid">
          <div class=""></div>
        </div>
      </section>
      <section id="about">
        <div class="row-fluid" style="background:#3498db">
          <div class="span2 text-center" style="margin-top:5px">
            <img src="img/clock.png" width="55%">
          </div>
          <div class="span8 text-justify">
            <p class="desc">Todas las exposiciones se llevan a cabo los dias S&aacute;bado a partir de las 10 am en nuestras oficinas, ubicadas en la Calle Tacna #159.</p>
                
            <p class="desc">Recuerda que no s&oacute;lo puedes participar asistiendo a las charlas y talleres, sino tambi&eacute;n exponiendo sobre una tem&aacute;tica que domines. Si este es el caso, cont&aacute;ctate con nosotros a trav&eacute;s de nuestras cuentas de Facebook y Twitter, o envi&aacute;ndonos un mail con la descripci&oacute;n de que tema es el que desear&iacute;as exponer y que d&iacute;a se realizar&iacute;a tu exposici&oacute;n.</p>
          </div>
          <div class="span2">
            
          </div>
        </div>
        <div class="row-fluid">
          
          <div class="span12 text-center">
            <p>Quieres ir m&aacute;s all&aacute; de ser s&oacute;lo un expectador? Si est&aacute;s decidido a exponer sobre un tema que te apasione, no lo dudes m&aacute;s!</p>
            <a href="#myModal" role="button" data-toggle="modal" class="btn-participa">Participa!</a>
          </div>
        </div>
        <div class="row-fluid">
          <!-- <div class="span4">
            
          </div> -->
          <div class="span12 text-center">
            <form>
              <h2 style="margin-bottom:20px">Que tema te gustar&iacute;a aprender? Danos tu opini&oacute;n!</h2>
              <textarea rows="2" cols="10" name="temas" class="temas" id="temas" style="resize:none" maxlength="100" placeholder="Ejm. NodeJs, MongoDB, HTML5, CSS3, ...."></textarea>
              
              <input type="submit" value="Opinar" id="btn-opinar">
            </form>  
          </div>
        </div>
      </section>
      <section id="contact-header" class="header header-extended">
        <div id="innomap" style="width:100%;height:400px;"></div>       
      
      </section>
      <!-- Modal -->
    <div id="myModal" class="modal hide fade text-center" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel"><i class="fa fa-envelope"></i> Quiero Participar!</h3>
        </div>
        <div class="modal-body">
          <form>
            <input class="form-exponer" type="text" placeholder="Tu nombre">
            <input class="form-exponer" type="text" placeholder="Tu email">
            <input class="form-exponer" type="text" placeholder="Tema a exponer">
            <textarea rows="3" style="width:80%; resize:none" placeholder="Descripcion del tema"></textarea>
            <br/>
            <button type="submit" class="btn-enviar"><i class="fa fa-rocket"></i> Enviar</button>
          </form>
        </div>
      </div>

      <script src="js/bootstrap.js"></script>
    
    </body>
    <footer>
      <h5>2013 ©Innodesign - Todos los Derechos Reservados</h5>
    </footer>
    </html>
             
            
