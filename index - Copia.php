<?php 
	include "config.php";
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title><?php echo $lang['title']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
   		 <script src="js/jquery.easing.min.js"></script>
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700,800,900,600,200' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----requred-js-files---->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		    <script src="js/html5shiv.js"></script>
		    <script src="js/respond.min.js"></script>
		<![endif]-->
		<!----//requred-js-files---->
		<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>

		<!-- Piwik -->
		<script type="text/javascript">
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="http://cluster-piwik.locaweb.com.br/";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', 3732]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
            })();
		</script>
		<!-- End Piwik Code -->

		<!----GoogleAnalitc---->
		<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-79289611-1', 'auto');
            ga('send', 'pageview');

		</script>
	</head>
	<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
		<!----start-container----->
		<div class="head-bg sTop">
			<div id="language_list">
					<div class="col-3 col align-self-center">
						<a href="index.php?lang=en"><img src="images/en.png" height="12" alt="en" width="18" class="lazyloaded" data-was-processed="true"></a>

						<a href="index.php?lang=es"><img src="images/es.png" height="12" alt="es" width="18" class="lazyloaded" data-was-processed="true"></a>

						<a href="index.php?lang=pt-br"><img src="images/pt-br.png" height="12" alt="pt-br" width="18" class="lazyloaded" data-was-processed="true"></a>
					</div>
			</div>
			<div class="conatiner">
				<div class="col-lg-12">
					<div class="user-item">
						<div class="avatar">
							<img src="images/cristian.jpg">
						</div>
					</div>
				</div>
			</div>
			<div class="conatiner">
				<div class="col-lg-12 header-note" style="padding-top: 10px;">
					
					<h1><?php echo $lang['cargo']; ?></h1>
					<h4 class="text-center">
						<?php echo $lang['descricao']; ?>
					<a class="btn btn-primary big-btn" href="#"><?php echo $lang['lermais']; ?><span> </span></a>
				</div>
			</div>
		</div>
		<!----//End-container----->
		<!----start-top-nav---->
		<nav class="subMenu navbar-custom navbar-scroll-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <img src="images/nav-icon.png" title="drop-down-menu" /> 
	                </button>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-left navbar-main-collapse">
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="active">
	                        <a id="sTop" class="subNavBtn" href="#"><?php echo $lang['home']; ?></a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s1" class="subNavBtn" href="#"><?php echo $lang['quemsou']; ?></a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s2" class="subNavBtn" href="#"><?php echo $lang['portifolio']; ?></a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s3" class="subNavBtn" href="#"><?php echo $lang['contato']; ?></a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	             	<a  id="s4" class="right-msg subNavBtn msg-icon"href="#"><span> </span></a>
	                <div class="clearfix"> </div>
	        </div>
	        <!-- /.container -->
   	  </nav>
		<!----//End-top-nav---->
		<!---- start-top-grids---->
		<div class="container">
			<div class="row  section s1 top-grids">
				<div class="col-md-4 top-grid">
					<span class="icon1"> </span>
					<h2>Responsive Design</h2>
					<p>
						9 de cada 10 personas poseen móvil. Es más común que usted navega por Internet utilizando su teléfono movíl que su ordenador, verdad?
					</p>
				</div>
				<div class="col-md-4 top-grid">
					<span class="icon2"> </span>
					<h2>Web Development</h2>
					<p>
						Para quien tiene un negocio, estar en internet hoy en día es prácticamente imprescindible. Con el fin de ampliar la marca y captar nuevos clientes.
					</p>
				</div>
				<div class="col-md-4 top-grid">
					<span class="icon3"> </span>
					<h2>Internet Marketing</h2>
					<p>Mejoras de posicionamiento SEO de tu web con enlaces externos o SEO</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!---- //End-top-grids---->
		<!----start-about---->
		<div class="about">
			<div class="container">
				<div class="col-md-6 divice">
					<img class="img-responsive" src="images/clickconsultorio.PNG" title="divice" style="width: 250px;margin-left: 90px;"/>
				</div>
				<div class="col-md-6 divice-info">
					<h3>Responsive Design</h3>
					<p>
						O DISEÑO RESPONSIVO
						La importancia de poseer un sitio profesional hoy en día es bien obvia: Además de ser utilizado como herramienta de captura de nuevos clientes, tener una identidad virtual es sinónimo de profesionalismo y credibilidad. Lo que no todo el mundo sabe, es sobre la importancia de tener un sitio responsivo.

						Yendo directo al punto, un sitio responsivo es un sitio que se adapta a todos los tamaños de pantallas - desde las pequeñas pantallas de los celulares hasta el más grande de los monitores.
					</p>
					<a class="btn btn-primary btn-red" href="#">Leer Más <span> </span></a>
				</div>
			</div>
		</div>
		<!----//End-about---->
		<!----start-portfolio---->
		<div class="portfolio section s2">
			<div class="container portfolio-head">
				<h3> Portfolio</h3>
				<p>Trabajos de Diseño Web, SEO, Adwords, Local, Email Marketing...</p>
			</div>
			<!---- start-portfolio-script----->
			<script src="js/hover_pack.js"></script>
			<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
			<script type="text/javascript">
				$(function () {
					var filterList = {
						init: function () {
						
							// MixItUp plugin
							// http://mixitup.io
							$('#portfoliolist').mixitup({
								targetSelector: '.portfolio',
								filterSelector: '.filter',
								effects: ['fade'],
								easing: 'snap',
								// call the hover effect
								onMixEnd: filterList.hoverEffect()
							});				
						
						},
						hoverEffect: function () {
							// Simple parallax effect
							$('#portfoliolist .portfolio').hover(
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
									$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
								},
								function () {
									$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
									$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
								}		
							);				
						
						}
			
					};
					// Run the show!
					filterList.init();
				});	
			</script>
			<!----//End-portfolio-script
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">All</span></li>
						<li><span class="filter" data-filter="app">Branding</span></li>
						<li><span class="filter" data-filter="card">Illustraions</span></li>
						<li><span class="filter" data-filter="icon">Web design</span></li>
					</ul>
					----->
					<div id="portfoliolist">
					<div class="portfolio logo1 mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/click.PNG" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/CRM.PNG" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>		
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/redeSocial.PNG" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/e193.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>	

					<div class="clearfix"> </div>																																					
				</div>
		</div>
		<!----//End-portfolio---->
		<!---testmonials---->
		<div  class="testmonials section s3">
			<div class="container">
			<div class="bs-example">
			    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
			    	<!-- Carousel indicators -->
			        <ol class="carousel-indicators pagenate-icons">
			            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			            <li data-target="#myCarousel" data-slide-to="1"></li>
			            <li data-target="#myCarousel" data-slide-to="2"></li>
			        </ol>   
			       <!-- Carousel items -->
			        <div class="carousel-inner">
			            <div class="active item">
			                <h2><img src="images/click.PNG" title="ClickConsultorio y CRM" style="width: 100px; height: 100px;" /></h2>
			                <div class="carousel-caption caption">
			                  <h3>ClickConsultorio y CRM</h3>
			                  <p>Echos desde cero con PHP y MySql, FrontEnd con BootStrapp, JavaScript y controller con Json, BackEnd con FrameWork CodeIgniter, controle de version con Git. </p>
			                </div>
			            </div>
			            <div class="item">
			                <h2><img src="images/redeSocial.PNG" title="RedeSocial" style="width: 100px; height: 100px;"/></h2>
			                <div class="carousel-caption caption">
			                  <h3>Rede Social</h3>
			                  <p>Echo desde cero con FrameWork Symfony. </p>
			                </div>
			            </div>
			            <div class="item">
			                <h2><img src="images/e193.png" title="Bomberos" style="width: 100px; height: 100px;" /></h2>
			                <div class="carousel-caption caption">
			                  <h3>e193-Bomberos</h3>
			                  <p>Sistema de Atención de emergencias, para el Bomberos de Brasil, echo con PHP y PostgreSQL en padron MVC. </p>
			                </div>
			            </div>
			        </div>
			        <!-- Carousel nav -->
			    </div>
		</div>
		</div>
		</div>
		<!---testmonials---->
		<!----start-model-box---->
						<a data-toggle="modal" data-target=".bs-example-modal-md" href="#"> </a>
						<div class="modal fade bs-example-modal-md light-box" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-md">
						    <div class="modal-content light-box-info">
						    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" title="close" /></button>
						     <h3>Place Yours content here</h3>
						     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque posuere diam et est hendrerit, eget sodales lectus tincidunt. Etiam suscipit orci sapien, at molestie lorem imperdiet vitae. Fusce nunc eros, congue non hendrerit sed, lobortis scelerisque magna. Ut in nunc sem. Integer bibendum enim et erat molestie, sed interdum nisl ultricies. In hac habitasse platea dictumst. Nullam sem diam, tincidunt dapibus tellus pulvinar, pulvinar tempus dui. Integer eu faucibus arcu. Duis adipiscing commodo ipsum dapibus elementum.</p>
						    </div>
						  </div>
						</div>
						<!----start-model-box---->
		<!----start-contact---->
		<div class="contact section s4">
			<div class="container">
				<h4>Contacto</h4>
				<p class="contact-head">
					¿VAMOS TRABAJAR JUNTOS?
					Póngase en contacto conmigo rellenando el formulario abajo.
				</p>
				<div class="row contact-form">
					<form>
						<div class="col-md-6 text-box">
							<input type="text" placeholder="Nombre" />
							<input type="text" placeholder="Email" />
						</div>
						<div class="col-md-6 textarea">
							<textarea>Mensaje</textarea>
						</div>
						<div class="clearfix"> </div><br />
						<input class="btn btn-primary btn-red-lg" type="submit" value="Enviar Mensaje" />
					</form>
				</div>
				<!----start-social-icons--->
				<div class="social-icons">
					<ul>
						<li><a class="facebook" href="#"> <span> </span></a></li>
						<li><a class="twitter" href="#"> <span> </span></a></li>
						<li><a class="dribbble" href="#"> <span> </span></a></li>
					</ul>
				</div>
				<!----//End-social-icons--->
				<!----start-copy-right---->
				<div class="copy-right">
					<p>Copyright &#169; 2017 <span>Cristian Marques.</span> All Rights Reserved.</p>
					<p>Design by<a href="http://awktec.com/">awk</a></p>
				</div>
				<!----//End-copy-right---->
			</div>
		</div>
		<!----//End-contact---->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

