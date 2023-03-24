
<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Oswald:wght@200&display=swap" rel="stylesheet">
    
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Titillium Web" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="shortcut icon" href="Img/LogoMini.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Estilos.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/modal.css">
    <link rel="stylesheet" href="CSS/modal2.css">
    <link rel="stylesheet" href="CSS/videos.css">
    
</head>
<body>

    <?php
    session_start();
    if (isset($_SESSION['secionError'])){
        if($_SESSION['secionError']== 1){
            echo "<style>
            .modal{
            display:block;
            }
            #Ing{
            opacity: 1;
            }
            #regis{
                opacity: 0;
            }
            </style> ";
        }
        
        if($_SESSION['secionError'] == 2){
            echo "<style>
            .modal{
            display:block;
            }

            #Ing{
            opacity: 0;
            }
            #regis{
            opacity: 1;
            }
            </style> ";
        }
        $_SESSION['secionError'] = 0;
        }
        if (isset($_SESSION['activo'])){
        if($_SESSION['activo']== 1){
            echo "<style>
            .modal{
            display:none;
            }
            </style> ";     
        }
        }  
    ?>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form action="NuevoUsu.php" method="POST">
                        <h1>Crear cuenta</h1>
                        <input type="text" name="nombre" id="nombreC" placeholder="Nombre" />
                        <input type="email" name="email"  id="emailC" placeholder="Correo" />
                        <input type="password" name="clave"  id="claveC" placeholder="Contraseña" />
                        <button>Registrarse</button>
                        <label class="Noti" id="regis"><?php if (isset($_SESSION['error'])){for($i = 0; $i < count($_SESSION['error']); $i++){echo "<li>" .  $_SESSION['error'][$i] . "</li>";}}//?></label>
                    </form>

                </div>

                
                <div class="form-container sign-in-container">
                    <form action="verificacion.php" method="POST">
                        <h1>Iniciar sesion</h1>
                        <input type="email" name="usuario" placeholder="Correo" />
                        <input type="password" name="clave" placeholder="Contraseña" />
                        <button type="submit" class="btn boton" value="Enviar">Iniciar sesion</button>
                        <label class="Noti" id="Ing"><?php if (isset($_SESSION['error'])){echo $_SESSION['error'][0];} ?></label>
                    </form>
                    <a href="#">Olvido su contraseña?</a>
                   
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Mucho gusto!</h1>
                            <p>Ingresa tus datos personales para unirte a nosotros</p>
                            <button class="ghost" id="signIn">Iniciar sesion</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Bienvenido de vuelta!</h1>
                            <p>Para conectarte, inicia sesion con tus datos personales</p>
                            
                            <button class="ghost" id="signUp">Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="model-container2" id="modal_container2">
        <div class="modal2">
            <form  action="cerrarS.php" method="POST">
            <h1>Ventana model</h1>
            <p><?php 
            if (isset($_SESSION['correo'])) 
            echo $_SESSION['correo'];
            echo "<br>";
            if (isset($_SESSION['nombre'])) 
            echo $_SESSION['nombre'];
            ?>
            </p>
            <button class="btn-p" name="Cerrar" value="Enviar" >Cerrar Seccion</button>
            </form>
            <button class="btn-p" id="closes">Cerrar</button>
        </div>
    </div>
    <header>
        <nav>        
            <label><img src="Img/cisteam_aguila.png" alt=""  class="logo"></label>
            <a href="#">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
            <a href="#">Clientes</a>
            <label>
                <input  class="buscar" type="search" placeholder="find in Ciste@m" required>
                <i class="fas fa-search"></i>
                </input>
            </label>
            <label class="lbl2">
                <img src="Img/lupa1.png" alt=""  class="lupa">           
            </label>

            <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {

                echo "<ul class='hola'id='hola'>User</ul>";
            }else{

                echo"<ul class='singup' id='myBtn'>Sing up</ul>";
            }
            ?>
        </nav>

        <section class="textos-header">
            <h1>Ciste<font color="#2ED5D9">@</font>m</h1>
            <h2>Facilitamos tu vida</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);">
            </path></svg>
        </div>
        <div class="mundo"></div>
        <div class="astron1"></div>
    
    </header>
    <main >
        
        <section class="Nuestros_Serv">
            <h2 class="titulo">Servicios</h2>
            <div class="contenedor-servicios">
                <img src="Img/pc34.png" alt="" class="imagen-servicios">         
                <div class="contenedor-textos">

                    <h3 class="subtitulo"> Desarrollo de software </h3>
                    <p class="parrafos1">
                        Desarrollo de software a la medida para agilizar procesos, 
                        optimizar trabajo y los recursos de tu empresa
                    </p>
                    
                    <h3  class="subtitulo"> Conectividad empresarial </h3>
                    <p class="parrafos1">
                        Servicios en Red, Internet e Intranet, Sitios Web, Asesoría Tecnológica.
                    </p>

                    <h3 class="subtitulo">  Venta y mantenimiento. </h3>
                    <p class="parrafos1">
                        Venta, mantenimiento, instalación y actualización de equipo. Instalación software, Antivirus, Configuración de S.O. 
                        Automatización computacional, optimizacion empresarial
                    </p>

                </div>
            </div>
        </section>

        <section class="productos">
            <h2 class="tituloPr">Productos</h2>
            <div class="contenedor-productos">
                <img src="Img/pc26.png" alt="" class="imagen-productos">         
                <div class="contenedor-textos">

                    <h3  class="subtitulo">  SICOIN </h3>
                    <p class="parrafos1">
                        Base de datos y gestiones integrales empresariales.
                    </p>

                    <h3  class="subtitulo"> MR. TEC </h3>
                    <p class="parrafos1">
                        Área de especialización y modulación de redes, centro de datos, programación de software a la medida, 
                        equipo especializado de computación, telefonía IP e innumerables soluciones de ingeniería aplicada en corelación de las ciencias computacionales.
                    </p>

                    <h3  class="subtitulo"> DATS </h3>
                    <p class="parrafos1">
                        DATS Manager es una aplicación web pensada para la gestión logística y financiera de datos 
                        (Distribuidores Autorizados TELCEL) de una manera fácil y eficaz.
                    </p>
    
                </div>
            </div>
        </section>

        <section class="videos">
            <h2 class="tituloCl">Videos</h2>
            <div class="slider">            
                <div style="height: 100%; overflow-x: hidden; text-align: center">
                    <div class="csslider infinity" id="slider1">
                        <input type="radio" name="slides" checked="checked" id="slides_1"/>
                        <input type="radio" name="slides" id="slides_2"/>
                        <input type="radio" name="slides" id="slides_3"/>
                        <input type="radio" name="slides" id="slides_4"/>
                        <input type="radio" name="slides" id="slides_5"/>
                        <input type="radio" name="slides" id="slides_6"/>
                        <input type="radio" name="slides" id="slides_7"/>
                        <input type="radio" name="slides" id="slides_8"/>
                        <input type="radio" name="slides" id="slides_9"/>
                        <input type="radio" name="slides" id="slides_10"/>
                        <ul>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/LjZAG22S_AE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/TghPPv7ioX8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/DNweVuwPOWE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/2HtzSQAZhPI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/m6vjf8YyhTA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/_PZargVQ0A8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/IMBHiRmRnfc?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/9ibsHRq3CWI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/0AerErHz9fA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/8yNVISc-B0k?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </p>
                            </li>
                            <li>
                                <p>
                                <video controls preload>
                                    <source src="" />
                                </video> 
                                </p>
                            </li>
                            <li>
                                <p>
                                <video controls preload>
                                <source src="" />
                                </video> 
                                </p>
                            </li>
                        </ul>
                        <div class="arrows">
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                            <label for="slides_4"></label>
                            <label for="slides_5"></label>
                            <label for="slides_6"></label>
                            <label for="slides_7"></label>
                            <label for="slides_8"></label>
                            <label for="slides_9"></label>
                            <label for="slides_10"></label>
                            <label class="goto-first" for="slides_1"></label>
                            <label class="goto-last" for="slides_10"></label>
                        </div>
                        <div class="navigation"> 
                            <div>
                                <label for="slides_1"></label>
                                <label for="slides_2"></label>
                                <label for="slides_3"></label>
                                <label for="slides_4"></label>
                                <label for="slides_5"></label>
                                <label for="slides_6"></label>
                                <label for="slides_7"></label>
                                <label for="slides_8"></label>
                                <label for="slides_9"></label>
                                <label for="slides_10"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clientes">
            <h2 class="tituloCl">Clientes</h2>
            <div class="contenedor">            
                <div>
                    <img src="Img/clientes2.png" alt="" class="galeria-clts">
                </div>
                <div>
                    <img src="Img/clientes1.png" alt=""  class="galeria-clts">
                </div>
            </div>
        </section>

        <footer class="footercomp">
            <div class="contenedor-footer">
            <div class="contenedor-foo">
                <h4>Teléfono</h4>
                <p>2212661579</p>
            </div>
            <div class="contenedor-foo">
                <h4>E-mail</h4>
                <p>contable@cisteam.com</p>
            </div>
            <div class="contenedor-foo">
                <h4>Teléfono</h4>
                <p>2212661579</p>
            </div>
            </div>
        </footer>


        <!--Script Color barra de búsqueda-->
        <script type="text/javascript">
            window.addEventListener("focusin",function(){
                var input=document.querySelector("input.buscar");
                input.classList.toggle("selec", input.click);
            })
        </script>
        
        <script type="text/javascript">
            window.addEventListener("focusout",function(){
                var input=document.querySelector("input.selec");
                input.classList.remove("selec",window.click);
            })
        </script>
        
    </main>
    
            <?php
            if (isset($_SESSION['activo']) && $_SESSION['activo'] == 1) {
                echo "<script src='JS/script2.js'></script>";
            }else{
                echo "<script src='JS/script.js'></script> <!--FUNCIONES JS-->";
            }
            ?>
      
</body>
</html>