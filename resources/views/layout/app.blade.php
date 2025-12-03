<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATRACCIONES</title>
    
    <!-- importando JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- importando JQUERY VALIDATION-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js "></script>
    <!-- importacion validar extensiones de archivos -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <!--IMPORTACION DE DATATABLES-->
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <!--SEGUNDA IMPORTACION DE DATA TABLES -->
    <script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <!-- Botones datatables -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <!--IMPORTACION DE FILEINPUT (falta link rel)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/js/fileinput.min.js" integrity="sha512-0wQvB58Ha5coWmcgtg4f11CTSSxfrfLClUp9Vy0qhzYzCZDSnoB4Vhu5JXJFs7rU24LE6JsH+6hpP7vQ22lk5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/css/fileinput.min.css" integrity="sha512-yDVMONIXJPPAoULZ92Ygngsn8ZUGB4ejm6fCc6q9ZvdH8blFAOgg75XZSEaAJ5m4E/yPI1BAi5fF2axMHVuZ5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FILE INPUT AL ESPANOL -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-fileinput@5.5.3/js/locales/es.js"></script>
    <!-- importando iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <!-- importando SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('gotrip/assets/css/style.css') }}">

</head>


<body >
<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>                          
                                    
                                    <li>0987454595</li>
                                    <li> ECUADOR</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                <a href="{{ route('lugares.index') }}">
                                    <img src="{{ asset('gotrip/assets/img/logo/ecuador.png') }}" alt="" width="90">
                                </a>
                            </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="{{ route('lugares.index') }}">INICIO</a></li>
                                           
                                            <li><a href="{{ route('provincias.index') }}">Provincias</a></li>

                                            <li><a href="{{ route('tipoAtraccion.index') }}">Tipos de atracciones</a></li>
             
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

      <!-- slider Area Start-->
      <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
           <div class="single-slider hero-overly slider-height d-flex align-items-center" data-background="{{ asset('gotrip/assets/img/hero/quito.jpg') }}">                
             <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Encuentra tus <span>atracciones en el Ecuador</span> </h1>
                                <p>QUE LUGAR DESEARIAS VISITAR?</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    @yield('contenido')

<footer>
      <!-- Footer Start-->
      <div class="footer-area footer-padding footer-bg" data-background="{{ asset('gotrip/assets/img/service/galapagos.jpg') }}">
        <div class="container">
              <div class="row d-flex justify-content-between">
                  <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                     <div class="single-footer-caption mb-50">
                       <div class="single-footer-caption mb-30">
                            <!-- logo -->
                           <div class="footer-logo">
                              <a href="index.html"><img src="{{ asset('gotrip/assets/img/logo/ecuador.png') }}" alt="" width = "90"></a>                           </div>
                           <div class="footer-tittle">
                               <div class="footer-pera">
                                   <p>Lugares Turísticos, DESARROLLADO POR : ISMAEL AGAMA </p>
                              </div>
                           </div>
                       </div>
                     </div>
                  </div>
  
          
                  <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                      <div class="single-footer-caption mb-50">
                          <div class="footer-tittle">
                              <h4>AYUDA</h4>
                              <ul>
                               <li><a href="#">PREGUNTAS</a></li>
                               <li><a href="#">TERMINOS Y CONDICIONES</a></li>
                               <li><a href="#">POLITICA DE PRIVACIDAD</a></li>
                               
                               <li><a href="#">REPORTAR UN PROBLEMA</a></li>
                           </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Footer bottom -->
              <div class="row pt-padding">
               <div class="col-xl-7 col-lg-7 col-md-7">
                  <div class="footer-copy-right">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  <i class="ti-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Ismael</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  </div>
               </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
      
               </div>
           </div>
          </div>
      </div>
      <!-- Footer End-->
  </footer>

<!-- JS here -->

  <!-- All JS Custom Plugins Link Here here -->
  <script src="{{ asset('gotrip/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
  
  <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('gotrip/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('gotrip/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('gotrip/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/slick.min.js') }}"></script>
  <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('gotrip/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('gotrip/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/jquery.sticky.js') }}"></script>
      
      <!-- contact js -->
    <script src="{{ asset('gotrip/assets/js/contact.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/jquery.form.js') }}"></script>
    <!--<script src="{{ asset('gotrip/assets/js/jquery.validate.min.js') }}"></script> -->
    <script src="{{ asset('gotrip/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/jquery.ajaxchimp.min.js') }}"></script>
      
  <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('gotrip/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('gotrip/assets/js/main.js') }}"></script>



    <style>
    .error {
      color: red;
      font-weight: bold;
    }
    .form-control.error {
      border: 1px solid red;
    }


  </style>
  <!-- SweetAlert script -->
  @if(session('message'))
        <script>
            Swal.fire({
                text: "{{ session('message') }}",
                position: "center",
                icon: "{{ session('type') }}", 
                title: "CONFIRMACION",
            });
        </script>
    @endif
</body>
</html>