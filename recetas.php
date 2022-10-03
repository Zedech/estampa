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
    <body class="body">
         <!-- NavBar -->
        <section>
          <div id="nav">
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
            
            <div class="container-fluid" style="padding-top: 75px;" >
              <div  class="row" >
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="imagenreceta">
                  <div class="center">
                    <img src="img/logo/logo_laestampa_sin_fdo_100px_2.png" alt="logo la estampa" id="logoinicio">
                  </div>
                </div>
              </div>
            </div>
          <div class="container-fluid" id="Cajacafe2" >
            <div  class="row">
                <div class="col-xl-4 col-lg-0 col-md-0 col-sm-0 col-0">
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top: 50px; padding-bottom: 50px;">
                  <h1 class="h1"> 
                    Recetas
                  </h1>
                  <p class="texto" style="text-align: center;">En esta sección encontraras gran variedad de recetas para que puedas preparar con nuestros diferentes tipos de harinas y de premezclas.</p>
                </div>
                <div class="col-xl-4 col-lg-0 col-md-0 col-sm-0 col-0">
          
                </div>
              </div>
            </div>
          
          <!-- Card Harinas -->
          <div class="container ">
            <div class="row"> 
                <div class="col-lg-4">        
                    <div class="card cardfondoblanco card2" >
                        <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/alfajores.jpg" alt="">  
                        </div>         
                        <div class="card-body">
                          <h3 class="card-title text-center">Alfajores chilenos</h3>
                          <div class="accordion accordion-flush center" id="accordionFlushExample">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina1" aria-expanded="true" aria-controls="harina1">
                                    Receta
                                  </button>
                                </h2>
                                <div id="harina1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                  <div class="accordion-body card-body card-body2">
                                    <p><b>Ingredientes</b><br>
                                      1000gr. Premezcla Masa Dulce La Estampa<br>
                                      10gr. Polvo de Horneo<br>
                                      300cc. Agua<br>
                                      Formato del Producto: Tapas de Alfajor<br>
                                      10gr. Corte Crudo<br>
                                      131,0unidad Rendimiento<br>
                                      10gr. Manjar<br>
                                      2,0gr. Coco Rallado<br>
                                      <b>Instrucciones</b><br>
                                      1) Mezclar PM, polvo de horneo y agua por 1 min. en velocidad baja.<br>
                                      2) Cambiar a velocidad rápida para amasar por 5 minutos o hasta que la masa se encuentre lisa y suave.<br>
                                      3) Laminar la masa hasta un espeso de 3 a 4 mm.<br>
                                      4) Perforar la masa.<br>
                                      5) Cortar discos de 6 a 8 cm de diámetro.<br>
                                      6) Disponer en una lata previamente aceitada.<br>
                                      7) Hornear a 200° por 5 a 6 minutos.<br>
                                      8) Dejar enfriar antes de rellenar con manjar y decorar los bordes con coco rallado.</p>
                                      <div class="centerimg">
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>
            
                        </div>
                      </div> 
                    </div>        
                </div>
        
                <div class="col-lg-4">         
                  <div class="card cardfondoblanco card2" >
                    <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/empanada-integral-400x267.jpg" alt="">
                    </div>            
                      <div class="card-body">
                        <h3 class="card-title text-center">Empanadas Integrales</h3>
                        <div class="accordion accordion-flush center" id="accordionFlushExample">
                          <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina2" aria-expanded="true" aria-controls="harina2">
                                  Receta
                                </button>
                              </h2>
                              <div id="harina2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body card-body card-body2">
                                  <p><b>Ingredientes</b><br>
                                    1000gr. PM PAN INTEGRAL DE TRIGO<br>
                                    400cc. Agua<br>
                                    80gr. Margarina<br>
                                    Relleno: champiñon, queso y pollo.<br>
                                    <b>Instrucciones</b><br>
                                    1) Mezclar Premezcla de Pan Integral Trigo, agua y margarina por 1 minuto en velocidad baja.<br>
                                    2) Cambiar a velocidad media para amasar por 4 minutos.<br>
                                    3) Estirar y alisar la masa hasta que esté suave y lisa.<br>
                                    4) Laminar hasta espesor de 3 mm apróx.<br>
                                    5) Cortar discos de 10 cm. de diámetro.<br>
                                    6) Rellenar con champiñon, queso y pollo u otro relleno si se desea.<br>
                                    7) Disponer en latas y pintar las unidades con una dora suave.<br>
                                    8) Llevar a horno precalentado a 210° por 12 a 15 minutos.</p>
                                    <div class="centerimg">
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
          
                      </div>
                      </div> 
                   </div>          
                 </div>

              <div class="col-lg-4">        
                  <div class="card cardfondoblanco card2" >
                    <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/empanadas-dulces-400x267.jpg" alt=""> 
                    </div>           
                      <div class="card-body">
                        <h3 class="card-title text-center">Empanadas dulces</h3>
                        <div class="accordion accordion-flush center" id="accordionFlushExample">
                          <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item align-top">
                              <h2 class="accordion-header">
                                <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina3" aria-expanded="true" aria-controls="harina3">
                                  Receta
                                </button>
                              </h2>
                              <div id="harina3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body card-body card-body2">
                                  <p><b>ngredientes</b><br>
                                    1000gr. PM MASA DULCE<br>
                                    50gr. Margarina<br>
                                    300cc. Agua<br>
                                    Relleno: Mermelada de membrillo, pera o alcayota.<br>
                                    <b>Instrucciones</b><br>
                                    1) Mezclar Premezcla de Masa dulce, agua y margarina por 1 minuto en velocidad baja.<br>
                                    2) Cambiar a velocidad media para amasar por 4 minutos.<br>
                                    3) Estirar y alisar la masa hasta que esté suave y lisa.<br>
                                    4) Laminar hasta espesor de 3 mm apróx.<br>
                                    5) Cortar discos de 10 cm. de diámetro.<br>
                                    6) Rellenar con mermeladas, cerrar los bordes.<br>
                                    7) Disponer en latas y pintar las unidades con una dora suave.<br>
                                    8) Llevar a horno precalentado a 210° por 15 a 20 minutos.</p>
                                    <div class="centerimg">
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
          
                      </div>
                      </div>
                   </div>          
                 </div>
              </div>
          </div>
          <!-- Card Harinas 2 -->
          <div class="container">
            <div class="row"> 
                <div class="col-lg-4">        
                    <div class="card cardfondoblanco card2" >
                        <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/empolvado-400x267.jpg" alt="">  
                        </div>         
                        <div class="card-body">
                          <h3 class="card-title text-center">Empolvados</h3>
                          <div class="accordion accordion-flush center" id="accordionFlushExample">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina4" aria-expanded="true" aria-controls="harina4">
                                    Receta
                                  </button>
                                </h2>
                                <div id="harina4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                  <div class="accordion-body card-body card-body2">
                                    <p><b>Ingredientes</b><br>
                                      1000gr. PM BIZCOCHO<br>
                                      800gr. Huevo entero<br>
                                      200cc. Agua<br>
                                      50gr. Harina<br>
                                      <b>Instrucciones<br></b>
                                      1) Mezclar los huevos, agua y Premezcla de Bizcocho por 1 minuto en velocidad baja.<br>
                                      2) Cambiar a velocidad rápida para batir por 10 minutos.<br>
                                      3) Luego batir por 1 minuto en velocidad baja e incorporar la harina.<br>
                                      4) Colocar la mezcla en una manga con boquilla lisa o sin ella.<br>
                                      5) Dosificar sobre una lata preparada previamente con papel mantequilla.<br>
                                      6) Hornear a 240° por 6 minutos.<br>
                                      7) Dejar enfriar antes de utilizar.<br>
                                      8) Unir las tapas con manjar, luego espolvorear con azúcar flor.</p>
                                      <div class="centerimg">
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>
            
                        </div> 
                      </div>
                    </div>          
                </div>
        
                <div class="col-lg-4">        
                  <div class="card cardfondoblanco card2" >
                    <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/galletas-navidad-400x267.jpg" alt="">
                    </div>            
                      <div class="card-body">
                            <h3 class="card-title text-center">Galletas de navidad</h3>
                            <div class="accordion accordion-flush center" id="accordionFlushExample">
                              <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina5" aria-expanded="true" aria-controls="harina5">
                                      Receta
                                    </button>
                                  </h2>
                                  <div id="harina5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body card-body card-body2">
                                      <p><b>Ingredientes</b><br>
                                        700gr. PM PAN DE PASCUA<br>
                                        300cc. Harina Súper<br>
                                        50gr. Margarina<br>
                                        300cc. Agua<br>
                                        <b>Instrucciones</b>
                                        1) Mezclar Premezcla de Pan de Pascua, agua, margarina y harina por 1 minuto en velocidad baja.<br>
                                        2) Cambiar a velocidad media para amasar por 4 minutos.<br>
                                        3) Estirar y alisar la masa hasta que esté suave y lisa.<br>
                                        4) Laminar hasta espesor de 4 mm apróx.<br>
                                        5) Cortar discos de 8 cm. de diámetro.<br>
                                        6) Disponer en latas previamente enmantecadas.<br>
                                        7) Llevar a horno precalentado a 210° por 10 a 12 minutos.<br>
                                        8) Dejar enfriar y decorar con glacé.</p>
                                        <div class="centerimg">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
              
                          </div> 
                      </div>
                   </div>          
                 </div>

              <div class="col-lg-4">        
                  <div class="card cardfondoblanco card2" >
                    <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/masa-madre-400x267.jpg" alt=""> 
                    </div>           
                      <div class="card-body">
                        <h3 class="card-title text-center">Masa madre</h3>
                        <div class="accordion accordion-flush center" id="accordionFlushExample">
                          <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina6" aria-expanded="true" aria-controls="harina6">
                                  Receta
                                </button>
                              </h2>
                              <div id="harina6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body card-body card-body2">
                                  <p><b>Ingredientes</b><br>
                                    50gr. Harina Wholegrain La Estampa<br>
                                    100gr. Harina Fina Especial La Estampa<br>
                                    20gr. Azúcar<br>
                                    150cc. Agua<br>
                                    <b>Instrucciones</b><br>
                                    Día 1 - Disponer de un recipiente limpio y amplio de plástico o vidrio, idealmente con tapa o tela limpia. - Mezclar 50 gr de harina integral con 50 cc de agua. - Dejar reposar a temperatura ambiente por 24 hrs, semi tapado.<br>
                                    Día 2 - Incorporar 25 gr de harina fina especial y 25 cc de agua y 5 gr de azúcar, revolver y dejar reposar semi tapado por 24 hrs.<br>
                                    Día 3 - Se repite paso del DÍA 2.<br>
                                    Día 4 - Se repite paso del DIA 2. Si la masa tiene burbujas grandes, ha crecido mucho y tiene un olor ligeramente ácido que puede asociarse a fruta madura o yogurt, estará lista.<br>
                                    Día 5 - Si la masa no ha subido mucho, se repite paso del DIA 2. - Si ha subido entre 300 y 400 gr, está lista para incorporarla a cualquier receta de pan (bollos, baguette, pizza, etc.) - Si no se utiliza de inmediato, se deberá seguir repitiendo el paso del DIA 2 y almacenar en ambiente refrigerado.<br>
                                    <div class="centerimg">
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
          
                      </div>
                      </div>
                   </div>          
                 </div>
              </div>
          </div>
          
          <!-- Card Harinas 3 -->
          <div class="container">
            <div class="row"> 
                <div class="col-lg-4">        
                    <div class="card cardfondoblanco card2" >
                        <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/pan-de-molde-400x267.jpg" alt="">  
                        </div>         
                        <div class="card-body">
                          <h3 class="card-title text-center">Pan de molde</h3>
                          <div class="accordion accordion-flush center" id="accordionFlushExample">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina7" aria-expanded="true" aria-controls="harina7">
                                    Receta
                                  </button>
                                </h2>
                                <div id="harina7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                  <div class="accordion-body card-body card-body2">
                                    <p><b>Ingredientes</b><br>
                                      1000gr. PM PAN INTEGRAL TRIGO<br>
                                      40gr. Levadura Fresca<br>
                                      500cc. Agua Inclusiones (sugerido: semilla de linaza, sésamo, centeno, avena, etc.)<br>
                                      <b>Instrucciones</b><br>
                                      1) Mezclar Premezcla de Pan Integral Trigo y agua por 1 minuto en velocidad baja.<br>
                                      2) Cambiar a velocidad media para amasar por 4 minutos o hasta desarrollar totalmente la masa.<br>
                                      3) Incorporar levadura fresca, mezclar en velocidad baja hasta homogeneizar totalmente.<br>
                                      4) Incorporar semillas si desea y mezclar lentamente hasta homogeneizar.<br>
                                      5) Cortar piezas, formar las unidades y disponer en moldes previamente enmantecados.<br>
                                      6) Ubicar en lugar cálido para fermentar.<br>
                                      7) Llevar a horno precalentado a 210°C por 25 minutos.<br>
                                      8) Al salir del horno desmoldar inmediatamente y dejar enfriar.</p>
                                      <div class="centerimg">
                                      </div>
                                  </div>
                                </div>
                              </div>
                          </div>
            
                        </div>
                      </div>
                    </div>          
                </div>
        
                <div class="col-lg-4">        
                  <div class="card cardfondoblanco card2">
                    <div class="centerimg">
                        <img class="card-img-top img-fluid alto" src="img/recetas/queque_vainilla_1.jpg" alt="">
                    </div>            
                      <div class="card-body">
                        <h3 class="card-title text-center">Queque de vainilla</h3>
                        <div class="accordion accordion-flush center" id="accordionFlushExample">
                          <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina8" aria-expanded="true" aria-controls="harina8">
                                  Receta
                                </button>
                              </h2>
                              <div id="harina8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body card-body card-body2">
                                  <p><b>Ingredientes</b><br>
                                    1000gr. Premezcla Queque Sabor vainilla<br>
                                    350gr. Huevo<br>
                                    310cc. Agua<br>
                                    160gr. Aceite<br>
                                    Formato Producto: Molde Rectangular 30x40 cm.<br>
                                    800gr Corte Crudo<br>
                                    <b>Decoración</b><br>
                                    800gr. Durazno en conserva<br>
                                    900gr. Piña en conserva<br>
                                    300gr. Cereza marrasquinos<br>
                                    300gr. Brillo Frío<br>
                                    <b>Instrucciones</b><br>
                                    1) Mezclar PM, Huevo, agua y aceite por 1 minuto en velocidad baja.<br>
                                    2) Cambiar a velocidad media por 5 minutos.<br>
                                    3) Disponer el batido en una lata previamente aceitada, distribuyendo de manera pareja en todo el molde<br>
                                    4) Distribuir la fruta en la superficie.<br>
                                    5) Hornear a 190° por 40 minutos.<br>
                                    6) Dejar enfriar y pintar con brillo frío.<br>
                                    7) Cortar trozos del tamaño deseado y servir.</p>
                                    <div class="centerimg">
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
          
                      </div>
                      </div>
                   </div>          
                 </div>

              <div class="col-lg-4">        
                <div class="card cardfondoblanco card2" >
                    <div class="centerimg">
                    <img class="card-img-top img-fluid alto" src="img/recetas/torta-panqueques-400x267.jpg" alt="">  
                    </div>         
                    <div class="card-body">
                      <h3 class="card-title text-center">Torta de panqueques</h3>
                      <div class="accordion accordion-flush center" id="accordionFlushExample">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="btn btn boton" type="button" data-bs-toggle="collapse" data-bs-target="#harina9" aria-expanded="true" aria-controls="harina9">
                                Receta
                              </button>
                            </h2>
                            <div id="harina9" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                              <div class="accordion-body card-body card-body2">
                                <p>Ingredientes<br>
                                  1000gr. PM QUEQUE<br>
                                  320gr. Huevo entero<br>
                                  120cc. Agua<br>
                                  320gr. Marg. Horneo<br>
                                  Instrucciones<br>
                                  1) Mezclar margarina, huevos, agua y Premezcla de Queque (vainilla, chocolate, naranja, plátano o nuez) por 1 minuto en velocidad baja.<br>
                                  2) Cambiar a velocidad rápida para batir por 8 minutos o hasta que tenga la apariencia cremosa.<br>
                                  3) Dosificar y espatular sobre una lata preparada previamente con papel mantequilla.<br>
                                  4) Hornear a 240° por 6 minutos.<br>
                                  5) Dejar enfriar antes de utilizar.<br>
                                  6) Unir las tapas con manjar, luego espolvorear con azúcar flor.</p>
                                  <div class="centerimg">
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
        
                    </div>
                  </div>
                </div>          
            </div>
          </div>
        </div>
        
        <!-- footer -->
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    </body>

</html>