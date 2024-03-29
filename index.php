<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FONT FAMILY-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--Estilos-->
    <link rel="stylesheet" href="styles.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--Hamburguer-->
    <link href="css/dist/hamburgers.css" rel="stylesheet">
     <!--Api reCAPTCHA-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" sizes="150x150" href="img-web/final-icon-pn.png">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W6JNN2D6LF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-W6JNN2D6LF');
    </script>
 
    <!--Swipper
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    -->
    <title>PREZA</title>
</head>
<body>
    <header>
     <?php include('../servicios-integrales/php/components/header.php'); ?>
    </header>

    <section class="hero-container">
        <div class="flex-container">
            <div class="flex-1">
                <p>Bienvenido a PREZA</p>
                <h1>Nos Dedicamos a Realizar</h1>
                <div class="container">
                    <div class="box">
                        <div class="carousel">
                            <div class="hide">
                                <div class="slide">
                                    <div class="text">Instalaciones <br> Eléctricas.</div>
                                    <div class="text">Mantenimiento <br> Integral.</div>
                                    <div class="text">Instalación de Aire Acondicionado</div>
                                    <div class="text">Servicios de <br>Plomería.<br></div>
                                    <div class="text">Instalaciones de <br>Gas.</div>
                                    <div class="text  text-aire">Instalación Cámaras de seguridad</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info btn-lg mt-4 btn-consulta rounded-0 ">
                    <a href="#contacto">CONSULTAR</a>
                </button>
            </div>
         <div class="slider">
            
        </div>

        </div>
       
       
    </section>

    <main>
        <section class="card-servicios-container" id="servicios">
           <p>SERVICIOS</p>
           <H1>CONOCÉ TODOS LOS SERVICIOS QUE OFRECEMOS</H1> 
           <div class="cards-container">
                <div class="card">
                    <div class="circulo">
                        <img src="/img-web/circuloAireCond-min.png" alt="AAC">
                    </div>
                    <span>Instalación de aire acondicionado</span>
                    <p>
                        Service y mantenimiento 
                        de equipos de climatización ya instaladas
                    </p>
                    <button><a href="https://prezaserviciosintegrales.com/aire.html">+VER MAS</a></button>
                </div>
                <div class="card">
                    <div class="circulo">
                        <img src="/img-web/Circulo-rayo-min.png" alt="Rayo">
                    </div>
                    <span>Instalacines <br> Eléctricas</span>
                    <p>
                        Técnico Electricista. Instalaciones y reparaciones. Cortes de luz,
                        cableados, urgencias.
                    </p>
                    <button><a href="https://prezaserviciosintegrales.com/electricidad.html">+VER MAS</a></button>
                </div>
                <div class="card">
                    <div class="circulo">
                        <img src="/img-web/circuloPlomeria-min.png" alt="Caño plomeria">
                    </div>
                    <span>Servicio de <br> Plomería</span>
                    <p>
                        Servicio de plomería
                        y destapaciones a domicilio para pequeñas
                        empresas y particulares
                    </p>
                    <button><a href="https://prezaserviciosintegrales.com/plomeria.html">+VER MAS</a></button>
                </div>
                <div class="card">
                    <div class="circulo">
                        <img src="/img-web/CirucoloGas-min.png" alt="Llama">
                    </div>
                    <span>Instalaciones<br> de Gas</span>
                    <p>
                        Gasistas matriculados: Reparación, 
                        mantenimiento e instalación de redes de gas y artefactos.
                    </p>
                    <button class="btn-gas"><a href="https://prezaserviciosintegrales.com/gas.html">+VER MAS</a></button>
                </div>
                <div class="card">
                    <div class="circulo">
                        <img src="/img-web/CiculoMantenimiento-min.png" alt="Mantenimiento">
                    </div>
                    <span>Mantenimiento y <br> Reparación</span>
                    <p>
                        Nos ocupamos de la reforma integral de tu oficina, 
                        empresa, hogar de forma rápida y eficaz
                    </p>
                    <button class="btn-mantenimiento"><a href="https://prezaserviciosintegrales.com/mantenimiento.html">+VER MAS</a></button>
                </div>
                <div class="card">
                    <div class="circulo">
                        <img src="/img-web/CirculoCamarasSeguridad-min.png" alt="Camaras de Seguridad">
                    </div>
                    <span>Instalación de Cámaras de Seguridad y Vigilancia</span>
                    <p>
                        Expertos en instalación de cámaras de seguridad en 
                        residencias y comercios con monitoreo remoto
                    </p>
                    <button class="btn-camaras"><a href="https://prezaserviciosintegrales.com/camaras.html">+VER MAS</a></button>
                </div>
           </div>
        </section>  
        
        <section class="emergencias-container">
            <div class="barra-separadora-container">
               <p>EMERGENCIA</p>
               <H1>¿TENÉS UNA EMERGENCIA Y NO SABES COMO RESOLVERLO?</H1>
            </div>
            <div class="card-emergencia-container">
                <div class="card-roja">
                    <p>
                        Preza te brinda el servicio telefónico para que puedas ser 
                        asesorado por nuestros especialistas, con el fin de poder ayudarte 
                        a solucionar tu problema y luego coordinar una visita para verificar 
                        el correcto funcionamiento.
                    </p>
                    <div class="llamar-container">
                        <div class="llamar">
                            <a href="tel:600123456">
                                <img src="/img-web/llamada-telefonica.png" alt="Llamada">
                                LLAMAR
                            </a>
                        </div>
                        <div class="ring-principal"></div>
                        <div class="pulse">
                            <div class="ring"></div>
                            <div class="ring"></div>
                            <div class="ring"></div>
                        </div>
                        <div class="ws">
                            <a href="https://api.whatsapp.com/send?phone=5491159637882" target="_blank">
                                <img src="/img-web/llamada-telefonica-ws.png" alt="Llamada whatsapp">WhatsApp</a>
                        </div>
                    </div>

                </div>
                <div class="card-con-imagen" id="emergencia">
                    <ul>
                        <li><img src="/img-web/phone-call 5.png" alt="Telefono">1. Comunicate con nosotros.</li>
                        <li><img src="/img-web/pago-con-tarjeta-de-credito.png" width="43px" alt="Pagar">2. Abonas la consulta.</li>
                        <li><img src="/img-web/servicio-al-cliente.png" width="43px" alt="Call">3. Te asesoramos como proceder.</li>
                        <li><img src="/img-web/investigar.png" width="43px" alt="Buscar">4. Coordinas una visita para su revisión.</li>
                    </ul>
                    <p>Aceptamos todos los medios de pago.</p>

                    <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="97042066-48b52b21-8c70-4cf3-a433-8cb654b058cb" data-source="button">
                    </script>
                
                    <div class="img-mp-container">
                         <img src="/img-web/mercadopago-logo-png-gris-2.png" alt="" width="100px">
                    </div>
                </div>

            </div>

        </section>

        <div class="banner-container">
            <a href="https://instagram.com/veros_indumentaria?igshid=YmMyMTA2M2Y=" target="_blank"><img src="./img-web/indumentaria-desk.gif" alt="Estudio contable publicidad banner"></a>  
        </div>
        <div class="banner-container-mobile">
            <a href="https://instagram.com/veros_indumentaria?igshid=YmMyMTA2M2Y=" target="_blank"><img src="./img-web/indumentaria-mob.gif" alt="Estudio contable publicidad banner"></a>  
        </div>

        <section class="quienes-somos-container">
            <div class="barra-separadora-container-azul">
                <div>
                   <p id="nosotros">NOSOTROS</p>
                   <H1>¿QUÉ OFRECEMOS?</H1> 
                </div>
                <p class="parrafo-ofrecemos">
                    Brindamos servicios integrales para su hogar, oficina o empresa trabajamos para su bienestar y 
                    su comodidad. Tenemos amplia experiencia y responsabilidad en el rubro, contamos con Técnicos 
                    especializados y capacitados, para resolver todo tipo de problemas. Nuestra garantía es su tranquilidad y su tranquilidad y comodidad es nuestro desafío. 
                </p>
            </div>
            <div class="texto-ofrecemos">
                
            </div>
        </section>

        <div class="banner-container">
            <a href="https://estudiocontablesotelo.com.ar/" target="_blank"><img src="./img-web/contable.gif" alt="Estudio contable publicidad banner"></a>  
        </div>
        <div class="banner-container-mobile">
            <a href="https://estudiocontablesotelo.com.ar/" target="_blank"><img src="./img-web/ESTUDIO CONTABLE SOTELO- mobile.gif" alt="Estudio contable publicidad banner"></a>  
        </div>
        
        <section class="contacto-container" id="contacto">
            <div class="barra-separadora-container-azul">
                <p>CONTACTO</p>
                <span>Trabajamos en Capital Federal y Gran Buenos Aires.</span>
                <span>Email: mail@prezaserviciosintegrales.com</span>
                <div class="redes redes-contacto">
                    <span style="padding-top: 10px;">Seguinos:</span>
                    <a href="https://www.facebook.com/profile.php?id=100085134056978" target="_blank"><img src="img-web/facebook-azul.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/preza_instalaciones/" target="_blank"><img src="img-web/instagram-azul.png" alt="instagram"></a>
                </div>
            </div>

            <div id="map"></div>

            <div class="formulario-container">
                <div class="container">
                    <form class="form-style" method="post" id="datos_formulario" onsubmit="return submitUserForm();">
                        
                        
                        <div class="column d-flex justify-content-end flex-column align-items-end" id="mi-row">

                              <div class="form-style-container">
                                <div class="label-input-container col-sm-12">
                                    <label for="nombre" class="label labelnombre text-white">Nombre</label>
                                    <input class=" rounded-0 form-control" name="nombre" id="nombre" placeholder="Nombre">
                                </div>
    
                               <div class="label-input-container col-sm-12">
                                 <label for="email" class="label labeldni text-white">Email</label>
                                 <input class="rounded-0 form-control" name="email" id="email" placeholder="email">
                               </div>
                      
                            <div class="label-input-container col-sm-12">
                                <label for="servicios" class="label labelservicios text-white">Servicios</label>
                                <select class="form-select rounded-0 label-input-container" aria-label="Default select example" name="servicios" id="servicios">
                                    <option value="" class="text-secondary" selected>Selecionar Servicio</option>
                                    <option value="Instalación Electrica">Instalaciones Eléctricas</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="Aire Acondicionado">Aire Acondicionado</option>
                                    <option value="Plomería">Plomería</option>
                                    <option value="Gas">Gas</option>
                                    <option value="Camaras de seguridad">Instalación Cámaras de seguridad</option> 
                                </select>
                            </div>
                
                               <div class="form-group label-input-container col-sm-12">
                                   <label for="mensaje" class="text-white">Comentario</label>
                                   <textarea class="form-control rounded-0" name="mensaje" rows="3" id="mensaje"></textarea>
                               </div>
                        
                              

                               <div class="g-recaptcha" data-sitekey="6LdGMpwhAAAAAFLC1QgEPkjrj8uELa0-eGGLNlST" data-callback="verifyCaptcha"></div>
                               <div id="g-recaptcha-error"></div>
    
                               <div class="form-group boton-enviar text-center">
                                   <button type="submit" name="submit" class="btn enviar col-sm-10" id="id-enviar">Enviar</button>
                               </div>
                               <div class="loader">
                                   <img class="" src="/img-web/rolling.gif" alt="" width="30">
                               </div>
                              </div>
                         
                        </div>         
                    </form>             
                </div>
            </div>
        </section>

        <section class="testimonios-container">
            <h1>TESTIMONIOS DE NUESTROS CLIENTES</h1>
            <div class="cards">
                  <div class="swiper-sliden">
                    <img src="/img-web/cita.png" alt="cita" width="50px">
                    <p>
                        Super amables y predispuestos. 
                        Hicieron el trabajo en tiempo y forma y respondieron todas mis consultas.
                        Ya los había contratado con anterioridad para un trabajo de plomería y por el excelente labor los volví a elegir. 
                        Mil gracias!
                    </p>
                    <div class="text-final-card">
                       <span>Nadia Flores</span>
                       <i>Buenos Aires</i> 
                    </div>
                  </div>
                  <div class="swiper-sliden">
                    <img class="cita-2" src="/img-web/cita.png" alt="cita" width="50px">
                    <p>
                        
                        Lo recomiendo. Es experto, tiene mucha experiencia, 
                        te explica super claro todo. Precios super acordes. Es rápido y trabaja de manera prolija.
                        
                    </p>
                    <div class="text-final-card">
                       <span>Gabriel Ponce</span>
                       <i>Buenos Aires</i> 
                    </div>
                    

                  </div>
                  <div class="swiper-sliden">
                    <img class="cita-3" src="/img-web/cita.png" alt="cita" width="50px">
                    <p>
                        
                        Excelente la verdad , rápido una vez coordinado, se tomaron su tiempo para encontrar la falla , se solucionó , y precio accesible. 
                        Súper súper recomiendo más cuando hoy en día es difícil conseguir uno !!!.
                         
                    </p>
                    <div class="text-final-card">
                       <span>Germán Ruiz</span>
                       <i>Buenos Aires</i> 
                    </div>
                    

                  </div>
            </div>
        </section>

        <section class="gracias-container">
            <h1>¡GRACIAS POR VISITAR NUESTRO SITIO WEB!</h1>
            <p>Esperamos que la información brindada les sea de utilidad.</p>
        </section>
    </main>

    <section class="ws-container">
        <a href="https://api.whatsapp.com/send?phone=5491159637882" target="_blank">
             <img src="/img-web/whatsapp.png" alt="WhatsApp">
        </a>
    </section>

    <footer>
        <div class="logo-container"><img src="/img-web/LOGO-color-footer.png" alt=""></div>
        <div class="menu-footer-container">
            <ul>
                <li  class="">
                   <a class="click" href="#inicio">Inicio</a>
                   <div class="dropdown">
                     <button class="test btn dropdown-toggle text-blue" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Servicios
                     </button>
                     <ul class="dropdown-menu ">
                       <li><a class="click dropdown-item text-white" href="https://prezaserviciosintegrales.com/aire.html" target="_blank">Aire Acondicionado</a></li>
                       <li><a class="click dropdown-item text-white" href="https://prezaserviciosintegrales.com/electricidad.html" target="_blank">Electricidad</a></li>
                       <li><a class="click dropdown-item text-white" href="https://prezaserviciosintegrales.com/plomeria.html" target="_blank">Plomería</a></li>
                       <li><a class="click dropdown-item text-white" href="https://prezaserviciosintegrales.com/gas.html" target="_blank">Servicio de Gas</a></li>
                       <li><a class="click dropdown-item text-white" href="https://prezaserviciosintegrales.com/mantenimiento.html" target="_blank">Mantenimiento y reparación</a></li>
                       <li><a class="click dropdown-item text-white" href="https://prezaserviciosintegrales.com/camaras.html" target="_blank">Instalación Camaras de seguridad</a></li>
                     </ul>
                   </div>
                   <a class="click" href="#contacto">Contacto</a>
                   <a class="click" href="https://prezaserviciosintegrales.com/#nosotros">Nosotros</a>
                   <a class="click" href="#emergencia">Emergencias</a>
                   <a class="click enlace-trabaja" href="https://forms.gle/1xnkskvDbCvYcpDEA" target="_blank">Trabaja Con Nosotros</a>
                 </li>
             </ul>
        </div>
        <div class="redes-container">
            <a href="https://www.facebook.com/profile.php?id=100085134056978" target="_blank"><img src="img-web/facebook-azul.png" alt="facebook"></a>
            <a href="https://www.instagram.com/preza_instalaciones/" target="_blank"><img src="img-web/instagram-azul.png" alt="instagram"></a>
        </div>
    </footer>
    <script>
        var recaptcha_response = '';
        function submitUserForm() {
            if(recaptcha_response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="recaptcha-error" style="border-color:#ff4757; background: #ffe0e3; color: #ff4757;">Verifica que no eres un Robot!.</span>';
                return false;
            }
            return true;
        }
         
        function verifyCaptcha(token) {
            recaptcha_response = token;
            document.getElementById('g-recaptcha-error').innerHTML = '';

            let formulario = document.getElementById('datos_formulario');



formulario.addEventListener('submit', e=>{
    e.preventDefault();
    
    let removerClase = document.querySelectorAll('.remover');
    let botonEnviar = document.querySelector('.boton-enviar');
    let $loader = document.querySelector('.loader');
    let input = document.querySelectorAll(".label-input-container");

    const colocarErrores = (i) =>{
        i.forEach(element => {
            element.classList.add("padding-top-label");
        });
    }

    const limpiarErrores = (inp) =>{
        inp.forEach(element => {
          element.classList.remove("padding-top-label");
        });
    }
    
    //Activar Loader
    botonEnviar.style.display ="none";
    $loader.setAttribute("id","show");

   

    
    if(removerClase.length > 0){
        for(let i = 0; i< removerClase.length; i++ ){
            removerClase[i].parentNode.removeChild(removerClase[i])
        }
    }
    
    //Crear instancia de objeto para luego vincularlo.
    let datos = new FormData(formulario);

    let peticion = {
        method:'POST',
        body:datos,
    }



    fetch('php/recibir-data-formulario.php',peticion)
         //Primera promesa que contiene una respuesta, que sera recibida en formato json
        .then(respuesta => respuesta.json())
        //Segunda promesa que sera nuestra respuesta que contendra toda la info, la respuesta del servidor
        .then(respuesta =>{
            
            //Si la respuesta esta ok te envia a la pag. principal
            if(respuesta['respuesta']){
               
                window.location.href = "https://prezaserviciosintegrales.com/mensajeEnviado.html";
                
            
            //Si contiene algu error: popUp.
            }else{
                console.log(respuesta);
                
                for(const resultado in respuesta){
                    let padre = document.querySelector('#'+resultado);
                    padre.classList.add("resaltar");
                    colocarErrores(input);
                    let txt = document.createElement('p');
                    txt.classList.add('text-mi');
                    txt.classList.add('remover');
                    txt.classList.add("text-light");
                    txt.classList.add("bg-dark");
                    txt.innerHTML = respuesta[resultado];
                    document.querySelector('#'+resultado).insertAdjacentElement('afterend', txt);
                    swal("Alerta", "Formulario cuenta con errores", "error");
                }

        
             

                //Desactivar loader Loader
                botonEnviar.style.display ="flex";
                $loader.style.display = "none";
             
               
            

    
            }

        }).catch(error =>console.warn('error', error));

});
        }
    </script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="js/app.js"> </script>
   <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   -->
</body>
</html>