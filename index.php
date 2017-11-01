<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69629847-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-69629847-1');
    </script>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory')?>/icons/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory')?>/icons/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>ParaPlus</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/icons/foundation-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
  <div data-sticky-container class="headermenu show-for-small-only">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" >
        <div class="row" style="padding: 0px;" id="rowMobile">
          <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" style="background:transparent;">
            <div class="columns small-8 large-3 ">
                <ul class="menu">
                   <img src="<?php bloginfo('stylesheet_directory')?>/assets/logoParaPlus.svg">
                </ul>
            </div>
            <div>
                <button id="clickBtnMenu" class="menu-icon" type="button" data-toggle="example-menu"></button>
            </div>
          </div>

          <div class="top-bar show-for-small-only" id="example-menu" style="height: 100vh; width: 100vw; z-index: 1; /* Sit on top */">
            <div class="top-bar-left" style="height: 100%;">
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#first" >¿Cómo Funciona?</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#second">Modo de uso</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#third" >Mito acerca de los piojos</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#fourth" >Beneficios</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>
     <div data-sticky-container class="show-for-medium" style="min-height:  120px;">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" id="example-menu">
        <div class="row">
          <div class="columns small-5  large-3 show-for-medium" style="width: 250px;">
            <ul class="menu">
               <img id="logoParaPlusHeader" src="<?php bloginfo('stylesheet_directory')?>/assets/logoParaPlus.svg" style="max-width: 220px">
            </ul>
          </div>
          <div class="columns small-12 medium-9 show-for-medium" >
            <ul class="menu" data-magellan id="menuListHeader">
                <li><a href="#first" >¿Cómo Funciona?</a></li>
                <li><a href="#second">Modo de uso</a></li>
                <li><a href="#third" >Mito acerca de los piojos</a></li>
                <li><a href="#fourth" >Beneficios</a></li>
                <li><a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
       <img class="imgOrbit" style="width: 100%; height:auto;" data-interchange="[<?php bloginfo('stylesheet_directory')?>/assets/Slider1Mobile@2x.jpg, small], [<?php bloginfo('stylesheet_directory')?>/assets/Slider1Tablet.jpg, medium], [<?php bloginfo('stylesheet_directory')?>/assets/Slider1Desktop.jpg, large], [<?php bloginfo('stylesheet_directory')?>/assets/Slider1DesktopHD.jpg, xlarge]">  
    </div> 


    <div class="sections">
      <section id="first" data-magellan-target="first">
        <article>
            <div class="row container">       
                <div class="small-12 medium-6 columns card2">
                    <picture>
                        <img width="601" height="434" src="<?php bloginfo('stylesheet_directory')?>/assets/producto1.png" class="attachment-full size-full wp-post-image" alt="" />    
                    </picture>
                </div>
                <div class="small-12 medium-6 columns  card2-section align-self-middle">
                   <h5 style="margin-bottom: 0px;">¡De Cabeza</h5>
                   <h5 style="margin-bottom: 0px;">Contra los piojos!</h5>
                
                    <p style="padding-top: 20px;">Debido a sus propiedades suavizantes y lubricantes, PARA® Plus ayuda a la higiene del cabello, evitando la adherencia de Piojos y Liendres en el cuero cabelludo, facilitando así su eliminación por arrastre. <br><br>

                    PARA® Plus actúa por un mecanismo físico: la Dimeticona + Ciclometicona forman una película que recubre el piojo y la liendre provocando la muerte por asfixia. Con PARA® Plus no se produce resistencia.</p>
          
                </div>
            </div>
        </article> 
      </section>
      <section id="second" data-magellan-target="second">
        <article>
            <div class="row container">       
               
                <div class="small-12 medium-6 columns  card2-section align-self-middle">
                  <h5 class="text-center">Modo de uso</h5>
                <ol id="lista1"     style="padding-top: 20px;">
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/1.svg');">Aplicar sobre el cabello seco, desde la raíz del cuero cabelludo a las puntas, con suaves masajes.</li>
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/2.svg');">Poner especial atención detrás de las orejas y cuello.</li>
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/3.svg');">Una vez terminada la aplicación, esperar 10 minutos previo a la utilización del peine de arrastre.</li>
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/4.svg');">Pasar el peine desde la raíz hasta las puntas.</li>
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/5.svg');">Luego de utilizar el peine de arrastre, lavar el pelo con champú suave y agua tibia.</li>
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/6.svg');">Revisar el cabello y cuero cabelludo diariamente.</li>
                  <li style="list-style-image: url('<?php bloginfo('stylesheet_directory')?>/assets/7.svg');">Repetir la aplicación a los 7 días.</li>
                </ol>
                
                </div>
                 <div class="small-12 medium-6 columns card2">
                   <picture>
                        <img width="601" height="434" src="<?php bloginfo('stylesheet_directory')?>/assets/producto2.png" class="attachment-full size-full wp-post-image" alt=""  />    
                    </picture>
                </div>          
          </div>
        </article> 
      </section>
      <section id="third" data-magellan-target="third">
        <div class="row" id="video">
          <div class="small-12 columns  card2-section align-self-middle text-center">
            <h5 style="padding-top: 40px;">¿Verdadero o Falso?</h5>
            <h3>Conoce los mitos y verdades de esos pequeños invasores</h3>
           
            <div id ="columnaVideo" class="columns small-12">
              <div class="responsive-embed">
                  <div id ="columnaVideo" class="columns small-12 text-center" >
                      <iframe id ="videoFrame" width="960" height="540" src="<?php bloginfo('stylesheet_directory')?>/assets/video.mp4" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div> 
            </div>

          </div>    
        </div>

        
        <br>

      </section>
       <section id="fourth" data-magellan-target="fourth">

         <div class="row container">   
            <div class="small-12 medium-6 columns  card2-section align-self-middle show-for-small-only">
                    <h5 style="margin-bottom: 0px; color: #FF4A4A;">De Cabeza</h5>
                    <h5 style="margin-bottom: 0px; ">Contra los piojos!</h5>
                    <ul id="lista2" class="check"  style="padding-top: 20px;">
                      <li>Dejar actuar por 10 minutos</li>
                      <li>No es tóxico</li>
                      <li>No contiene pesticidas</li>
                      <li>No tiñe</li>
                      <li>Previene reinfestación</li>
                    </ul>
            </div> 
          </div>   

         

          <article id="fillete" >
              <div class="row container"  >   
                     
                  <div class="small-12 medium-6  columns card2 align-self-bottom ">
                     <picture>
                          <img width="601" height="434" src="<?php bloginfo('stylesheet_directory')?>/assets/producto3.png" class="attachment-full size-full wp-post-image" alt=""  id="productoGarden"/>    
                      </picture>
                  </div> 
                  <div class="small-12 medium-6 columns  card2-section align-self-top show-for-medium">
                    <h5 style="margin-bottom: 0px; color: #FF4A4A;">De Cabeza</h5>
                    <h5 style="margin-bottom: 0px;">Contra los piojos!</h5>
                    <ul id="lista2" class="check" style="padding-top: 20px;">
                      <li>Dejar actuar por 10 minutos</li>
                      <li>No es tóxico</li>
                      <li>No contiene pesticidas</li>
                      <li>No tiñe</li>
                      <li>Previene reinfestación</li>
                    </ul>
                  </div>

                                         
              </div>
                          
              </div>
          </article> 
      </section>
    </div>


    <div class="footer-container show-for-medium" >
        <footer class="footer row align-justify">
            <div class="small-3 column hide-for-small-only">
                <div class="row">
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/logo2ParaPlus.svg" class="attachment-full size-full wp-post-image" alt="">          
                </div>
                <div class="row footerSocial">
                    <div class="small-12 medium-4 columns align-self-middle"">
                        <a href="https://www.facebook.com/ParaPlusCL/"> 
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebookLogo.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com" style="padding-bottom: 20px;"></a>
                    </div>
                    <div class="small-12 medium-8 columns align-self-middle text-align-center">
                        <p>Síguenos en Facebook</p>
                    </div>
                </div>
            </div>
            <div class="small-9 column show-for-medium">
                <div class="row">
                    <nav class="menu-footer-container">
                        <ul id="menu-footer" class="menu footermenu">
                            <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                                <a href="#first">¿Cómo Funciona?</a>
                            </li>
                            <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                                <a href="#second">Modo de Uso</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                                <a href="#third">Mitos Acerca de los piojos</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                                <a href="#fourth">Beneficios</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                                <a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a>
                            </li>

                        </ul>
                    </nav>
                </div>  
                <div class="row">
                    <div class="columns small-9 footermenu">
                        <p> Derechos reservados Pharma Investi Chile S.A. </p>
                        <p> Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. </p>
                        <p> Teléfono:(2) 2340 5800 </p>
                    </div>
                    <div class="columns small-3">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/pharmaLogo.svg" class="attachment-full size-full wp-post-image" alt="">
                      </div>
                  </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="footer-container show-for-small-only">
        <footer class="footer row align-justify">
            <div class="columns small-12 show-for-small-only">
                <img src="<?php bloginfo('stylesheet_directory')?>/assets/logo2ParaPlus.svg" class="attachment-full size-full wp-post-image" alt="">
            </div>
            <div class="columns small-12 show-for-small-only" id="menuFooterMobile">
                <ul id="menu-footer-1" class="menu footermenu vertical menu">
                      <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                          <a href="#first">¿Cómo Funciona?</a>
                      </li>
                      <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                          <a href="#second">Modo de Uso</a>
                      </li>
                      <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                          <a href="#third">Mitos Acerca de los piojos</a>
                      </li>
                       <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                          <a href="#fourth">Beneficios</a>
                      </li>
                      <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                          <a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a>
                      </li>
                </ul> 
            </div>
            <div class="columns small-12 footermenu show-for-small-only">
               <p> Derechos reservados Pharma Investi Chile S.A. </p>
               <p> Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. </p>
               <p> Teléfono:(2) 2340 5800 </p>
               <br>
               <hr size="8px" color="white">
            </div>
            <div class="columns small-12 footermenu show-for-small-only">
                <div class="row footerSocial show-for-small-only">
                    <div class="small-6  columns">
                        <div class="row">
                            <div class="small-12  columns" id="imgFacebookMobile">
                            <a href="https://www.facebook.com/ParaPlusCL/"> 
                                <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebookLogo.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com">   
                             </a>
                        </div>
                    </div>
                </div>
                <div class="columns small-6 footermenu" id="imgLogoFooter2Mobile">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/pharmaLogo.svg" class="attachment-full size-full wp-post-image" alt=""> 
                </div>     
            </div>
        </footer>
    </div>
 
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.interchange.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/app.js"></script>
  

</body>
</html>


</body>
</html>