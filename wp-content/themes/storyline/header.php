<?php
/*
* Theme Name: Storyline Board Theme
*
* Description: Storyline Board Theme is a stand-out-of-the-crowd product, 
* a perfect board to display your creative work or just amaze your friends
* with a new generation blog.
*
* Version: 1.1 
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php 
if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
	echo bloginfo( 'name' ); echo ''; bloginfo( 'description', 'display' );  ?> 
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <?php 
if(is_single() && has_post_thumbnail() || is_page() && has_post_thumbnail() ) {
	$srcf = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full', true );
}?>
<meta name="twitter:image" content="<?php if(isset($srcf[0])){echo $srcf[0];} ?>">
<meta property="og:title" content="<?php if ( is_single() || is_page() ) { the_title(); }else{ bloginfo('name'); }?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php if ( is_single() || is_page() ) { the_permalink(); }else{ echo get_site_url(); }?>" /> 
<meta name="twitter:url" content="<?php if ( is_single() || is_page() ) { the_permalink(); }else{ echo get_site_url(); }?>">
<meta name="og:description" content="<?php if ( is_single() || is_page() ) { if(get_the_excerpt()!=''){echo get_the_excerpt();}else{ the_title(); }}else{bloginfo('name'); echo " - "; bloginfo('description');} ?>" />

<meta name="twitter:site" content="@flasherland">

		<!--[if lte IE 8]><style>.ss-container, .header-white, .ss-nav, .ss-row-clear{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
        <!--[if IE]>
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styleIE.css" />
        <![endif]-->
    	
<!-- Force to reload page on back button for firefox
================================================== -->
<script>

	window.name = "reloader" ;
	window.onbeforeunload = function() {
   		window.name = "reloader"; 
	}
	window.onunload = function(){};
	 
</script>
<?php  ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script('jquery');

	wp_get_archives('type=monthly&format=link');
	wp_head();
?>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
	<script src='<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js'></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

</head>

<body <?php body_class();?>>
<header>
	<div class="header-up headerSection">
		<figure>
			<img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png">
		</figure>
		<div class="header-numbers numberSection">
			<div class="numbers-pbx">
				<p>PBX  Bogotá:  </p>
				<p>Teléfonos:  </p>
				<img src="<?php bloginfo('template_url'); ?>/images/tel.png">
			</div>
			<div class="numbers-tel">
				<p><span>(1) </span>  2567665</p>
				<p>320 3622949</p>
				<p>316 8782232</p>
				<p>301 5477199</p>
			</div>
		</div>
	</div>
	<div class="header-menu headerSection">
		<p>Nuestros Servicios:</p>
		<div>
			<a class="web" onmouseover="webOver()" onmouseout="webOut()">Web y App</a>
			<a class="branding" onmouseover="brandingOver()" onmouseout="brandingOut()">Branding</a>
			<a class="marketing" onmouseover="marketingOver()" onmouseout="marketingOut()">Marketing</a>
			<a class="produccion" onmouseover="produccionOver()" onmouseout="produccionOut()">Producción</a>
			<a>Estrategia</a>
			<a>Hosting</a>
		</div>
	</div>
</header>


<div onmouseover="webOver()" onmouseout="webOut()" id="web" class="menu-web-y-app hidden" >
	<span class="web-line"></span>
	<div class="web-content">
		<h2>Mypymes</h2>
		<div class="web-section">
			<div>
				<p><span></span><a>Micrositios</a></p>
				<p><span></span><a>Sitios Básicos</a></p>
				<p><span></span><a>Sitios Administrables</a></p>
			</div>
			<div>
				<p><span></span><a>Catalogo en Línea</a></p>
				<p><span></span><a>Tienda en Línea</a></p>
			</div>

		</div>
		<h2>Grandes empresas,  Gobierno y organizaciones</h2>
		<div class="web-section1">
			<div class="first-articule">
				<p><span></span><a>Landing page</a></p>
				<p><span></span><a>Portales</a></p>
				<p><span></span><a>Sitios de desarrollo especial</a></p>
			</div>
			<div>
				<p><span></span><a>Plataformas institucionales</a></p>
				<p><span></span><a>Aplicaciones móviles</a></p>
				<p><span></span><a>Software a media</a></p>
			</div>

		</div>
	</div>
</div>

<div class="menu-branding hidden" onmouseover="brandingOver()" onmouseout="brandingOut()" id="branding">
	<span class="branding-line"></span>
	<div class="branding-content">
		<h2>Soluciones gráficas</h2>
		<div class="branding-section">
			<div>
				<p><span></span><a>Diseño gráfico</a></p>
				<p><span></span><a>Imagen corperativa</a></p>
				<p><span></span><a>Diseño publicitario</a></p>
			</div>
			<div class="second-article">
				<p><span></span><a>Diseño de personajes</a></p>
				<p><span></span><a>Diseño de logotipos</a></p>
				<p><span></span><a>Publicidad exterior</a></p>
			</div>
			<div>
				<p><span></span><a>Diseño de empaques</a></p>
				<p><span></span><a>Diseño editorial</a></p>
				<p><span></span><a>Diseño orientado a Web</a></p>
			</div>

		</div>
		<h2>Agencia de publicidad</h2>
		<div class="branding-section1">
			<div class="first-articule">
				<p><span></span><a>Estrategias de comunicación y campañas de publicidad - Fee</a></p>
			</div>
		</div>
	</div>
</div>

<div class="menu-marketing  hidden" onmouseover="marketingOver()" onmouseout="marketingOut()" id="marketing">
	<span class="marketing-line"></span>
	<div class="marketing-content">
		<h2>Estrategia digital</h2>
		<div class="marketing-section">
			<div>
				<p><span></span><a> Mail Marketing</a></p>
				<p><span></span><a>Posicionamiento web - SEO</a></p>
			</div>
			<div class="second-article">
				<p><span></span><a>Social media</a></p>
				<p><span></span><a>Marketing digital-SEM</a></p>
			</div>
			<div>
				<p><span></span><a>Adwords con Google</a></p>
			</div>

		</div>

	</div>
</div>

<div class="menu-produccion  hidden" onmouseover="produccionOver()" onmouseout="produccionOut()" id="produccion">
	<span class="produccion-line"></span>
	<div class="produccion-content">
		<h2>Producción de vídeo </h2>
		<div class="produccion-section">
			<div>
				<p><span></span><a>Video comercial o publicitario</a></p>
				<p><span></span><a>Video infográfico</a></p>
				<p><span></span><a>Video marketing</a></p>
				<p><span></span><a>Video animado</a></p>
				<p><span></span><a>Infomerciales o vídeo documental</a></p>
				<p><span></span><a>Fotografía profesional</a></p>
			</div>
			<div >
				<p><span></span><a>Video Corporativos</a></p>
				<p><span></span><a>Cubrimiento de eventos</a></p>
				<p><span></span><a>Videoclips o vídeos musicales</a></p>
				<p><span></span><a>Video de inducción</a></p>
				<p><span></span><a>Edición en vivo</a></p>
			</div>

		</div>

	</div>
</div>




		<div class="header-top-p">
		<div id="ss-container" class="ss-container  <?php if(!is_home() && of_get_option('header-height') == 0 && of_get_option('active-header', 'no entry' ) == '1'){ ?> pad-slider<?php }; ?> <?php if(of_get_option('active-glass') == 1){?>glassstyle <?php }?> <?php if(of_get_option('active-dglass') == 1){?>dglassstyle <?php }?>">
        <?php if ( ! isset( $content_width ) ) $content_width = 900; ?>
		<div id="ytbgvideo"></div>