<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

        <title> La Estampa | Junto a los chilenos desde 1897</title>
        <link rel="icon" href="img/logo/logo_150x150.png" type="image/x-icon">

    </head>
    <body class="bodyimagen2">
         <!-- NavBar -->
        <section>
            <div id="nav" style="margin-bottom: 120px;">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                    <a href="" ><img src="img/logo/logo_150x150.png" alt="Logo molino La Estampa" id="Logoestampa">  </a>
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav mx-auto ">
                        <li class="nav-item active">
                          <a class="nav-link Parrafo" href="index.php" >Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link Parrafo" href="empresa.php">Nuestra empresa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle Parrafo" href="#" data-toggle="dropdown">
                              Productos
                            </a>
                            <div class="dropdown-menu" >
                              <a class="dropdown-item texto" href="harinas.php">Harinas</a>
                              <a class="dropdown-item texto" href="premezclas.php">Premezclas</a>
                              <a class="dropdown-item texto" href="fibras.php">Fibras</a>
                            </div>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link Parrafo" href="recetas.php">Recetas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle Parrafo" href="#"  data-toggle="dropdown">
                              Atención al cliente
                            </a>
                            <div class="dropdown-menu" >
                              <a class="dropdown-item texto" href="contacto.php">Contacto</a>
                              <a class="dropdown-item texto" href="cliente.php">Ejecutivos comerciales</a>
                            </div>
                          </li>
                      </ul>
                      <ul class="navbar-nav">
                        <li class="nav-item">
              
                          <a href="https://laestampa.avalon.cl" target="_blank"><button class="btn btn my-2 my-sm-0 texto botontienda"  type="submit">Tienda<img src="img/logo/shopping_cart_PNG4.png" alt="Logo molino La Estampa" id="Logo"></button></a>
                          
                        </li>
                      </ul>
                    </div>
                  </nav>
            </div>
            
            <div class="container-fluid largo">
                <div class="row">
                  <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0 col-0" ></div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 10px;">
                      <h1 class="h1-2">
                        Formulario de contacto
                      </h1>
                      <div>
                      <div class="formulario">
                        <form style="padding-top: 10px; padding-bottom: 15px;" action="enviar.php" method="post">
                            <div class="form-group col-6">
                              <label class="texto2" for="nombre">Nombre</label>
                              <input type="text" id="nombre"name="nombre" class="form-control" rows="1" minlength="3"></input>
                            </div>
                            <div class="form-group col-6">
                                <label class="texto2" for="apellido">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control" rows="1" minlength="3"></input>
                              </div>
                              <div class="form-group col-6">
                                <label class="texto2" for="rut">Rut</label>
                                <input type="text" id="rut" name="rut" class="form-control" rows="1" minlength="8"></input>
                              </div>
                            <div class="form-group col-12">
                              <label class="texto2" for="email">Direccion de correo</label>
                              <input type="email" id="mail"name="email" class="form-control" placeholder="EJ: Molino@LaEstampa.com" minlength="5">
                            </div>
                        
                            <div class="form-group col-12">
                              <label class="texto2" id="mensaje" for="mensaje">Escriba su mensaje aqui</label>
                              <textarea class="form-control" name="mensaje" rows="3" placeholder="Recuerde no dejar este espacio vacio."></textarea>
                            </div>
                            <div class="form-group col-12">
                              <button id="botonformulario" class="btn btn texto" type="submit">Enviar</button>
                            </div>
                          </form>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 67px;">
                    <div style="padding-bottom: 40px;">
                    <div class="center">
                      <img src="img/logo/logo_laestampa_sin_fdo_100px_2.png" alt="logo la estampa" id="logoinicio">
                    </div>
                    <div class="center">
                    <a href="tel:222702810" class="texto btn" id="botonformulario">Contactanos al 222702810</a>
                    </div>
                  </div>
                  </div>
                  </div>
                </div>
            </div>
            

        
           
          <div style="padding-top: 30px;">
            <footer class="footer">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-md-4 centerfo">
                    <h5 class="text-muted" >
                    <a href="https://goo.gl/maps/ZxbBiGE9zyn" class="textofo"> Avenida Fermín Vivaceta 1053 <br>Independencia, Santiago</a><br>
                    <br>
                    <a href="tel:222702810" class="textofo">+56-2-22702810 </a>
                    <br>
                    <br>
                    <p class="textofo">
                      <a href="mailto:ventas@laestampa.com" class="textofo">ventas@laestampa.com</a><br>
                      <a href="mailto:sac@laestampa.com" class="textofo">sac@laestampa.com</a>
                    </h5>
                  </div>
                    <div class="col-xs-12 col-md-4 centerfo">
                      <a href="index.php"><img src="img/logo/logo_150x150.png" alt="logo la estampa" id="logofo"></a>
                    </div>
                    <div class="col-xs-12 col-md-4 centerfo">
                    <div class="pull-right">
                    <h6 class="text-card">ENCUENTRANOS EN LAS REDES</h6>
                          <div class="redes-footer">
                              <a href="https://cl.linkedin.com/company/molinolaestampa"><img src="img/linkedin-logo.png" id="iconoin"></a>
                              <a href="https://www.instagram.com/molinolaestampa/"><img src="img/instagram.png" id="iconoig"></a>
                              <a href="https://www.instagram.com/molinolaestampa/" id="estampaig">@molinolaestampa </a>
                          </div>
                    </div>
                </div>
              </div>  
            </div>
            </footer>
          </div>
          <?php 
          include("enviar.php")
          ?>
            <script type="text/javascript">
            window.addEventListener("scroll", function(){
            var nav = document.querySelector("nav");
            nav.classList.toggle("abajo",window.scrollY>0)
          })
          var nav = document.querySelector('nav');
    
          window.addEventListener('scroll', function () {
            if (window.pageYOffset > 30) 
            {
              nav.classList.add('abajo');
            } 
            else 
            {
              nav.classList.add('arriba');
              
            }
            if (window.pageYOffset > 20) 
            {
              nav.classList.remove('arriba');
            } 
          });
        </script>
    </body>

</html>