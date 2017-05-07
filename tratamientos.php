<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inmunology & Reproduction</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
</head>
<body>
    <div id="contenedor">
      <header id="cabecera">
        <div class="flag">
                <a href="#" class="usa"></a>
                <a href="#" ></a>
            
        </div>
        <a class="callnow" href="tel:005216442365940"></a>
        <div class="tel">
            <a class="tel ph" href="tel:005216313128389">(52-1) 631-3128389</a>
            <a class="cel" href="tel:005216442365940">(52-1) 644-2365940</a>           
        </div>
        
        <div class="logo">
         
          <img class="logoimg" src="img/logo-inmunology.png" alt="">
          
      </div> 
      </header>
      
      <?php include 'nav.php' ?>
      
      <section id="cuerpo">
        <div class="contenido">
           
            <?php include 'cont_trat.php' ?>
            
                  
        </div>
        <div id="sidebar">    
                
                <?php include 'acord_trat.php' ?>
                
        </div> 
        <section id="tratamientos">
            <h3>Tratamientos</h3>
            <div class="cuadros first">
                <div class="areas ferti">
                   <a href="#">
                    <h4>Fertilidad</h4>
                   </a>                    
                </div>                
            </div>
            <div class="cuadros second">
                <div class="areas logy">
                   <a href="#">
                    <h4>Inmunología</h4>
                   </a>
                </div>                  
            </div>
            <div class="cuadros tree">
                <div class="areas fetal">
                   <a href="#">
                    <h4 class="relleno">Medicina Materno Fetal</h4>
                   </a>
                </div>                 
            </div>
            <div class="cuadros last">
                <div class="areas rep">
                   <a href="#">
                    <h4 class="relleno">Genética y Reproducción</h4>
                   </a>
                </div>                 
            </div>           
        </section>
        <section id="servicios">
           
           <?php include 'serv.php' ?> 
            
            
        </section>          
      </section>
      <footer id="pie">
          <div class="espacios espfirst">
              <h6>Dirección</h6>
              <p>Estamos hubicados en Nainari 1028 E/quintana Roo y Chiapas</p>
          </div>
          <div class="espacios espsecond">
              <h6 class="warning">Horarios de Atención</h6>
              <span>Lunes a viernes 7am - 1pm & 3pm - 6pm</span>
              <span>Sábados 7am - 3pm</span>
          </div>
          <div class="espacios esptree">
              <h6 class="int">Enlaces de Interés</h6>
              <ul>
                  <li>Aviso de Privacidad</li>
                  <li>Contáctanos</li>
              </ul>
          </div>
          <span class="copy">Derechos reservados de concepto y forma de este sitio web. Power by: <a href="http://www.guebsite.com.mx" target="_blank">Guebsite MEXICO</a></span>         
      </footer>                                 
    </div>    
</body>
</html>