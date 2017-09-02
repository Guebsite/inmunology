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
         
          <a href="index.php"><img class="logoimg" src="img/logo-inmunology.png" alt=""></a>
          
      </div> 
      </header>
      
      <?php include 'nav.php' ?>
      
      <section id="cuerpo">
        <div class="contenido">
           
            <?php include 'cont-greprod.php' ?>
            
        <div id="sidebar">    
                
                <?php include 'acord_gen.php' ?>
                
        </div>          
        </div>
         
        <section id="tratamientos">
            <h3>Tratamientos</h3>
            <div class="cuadros first">
                <div class="areas ferti">
                   <a href="fertilidad.php">
                    <h4>Fertilidad</h4>
                   </a>                    
                </div>                
            </div>
            <div class="cuadros second">
                <div class="areas logy">
                   <a href="inmunologia.php">
                    <h4>Inmunología</h4>
                   </a>
                </div>                  
            </div>
            <div class="cuadros tree">
                <div class="areas fetal">
                   <a href="materno-fetal.php">
                    <h4 class="relleno">Medicina Materno Fetal</h4>
                   </a>
                </div>                 
            </div>
            <div class="cuadros last">
                <div class="areas rep">
                   <a href="genetica-reprod.php">
                    <h4 class="relleno">Genética y Reproducción</h4>
                   </a>
                </div>                 
            </div>           
        </section>
        <section id="servicios">
           
           <?php include 'serv.php' ?> 
            
            
        </section>          
      </section>
      <?php include 'footer.php' ?>                                  
    </div>    
</body>
</html>