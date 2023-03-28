<?php
include "config.php";
require_once '../cotacao.consultoriawk.com/app/config/config.php';
require_once '../cotacao.consultoriawk.com/app/model/hg-api.php';

$hg = new HG_API(HG_API_KEY);
$dolar = $hg->dolar_quotation();
$euro = $hg->euro_quotation();

$chave = '66598a3b';
$cid = '455861'; //ID Yahoo da cidade que deseja exibir o tempo
// Resgata o IP do usuario
$ip = $_SERVER["REMOTE_ADDR"];
$dados = unserialize(file_get_contents("http://frameworks.hgbrasil.com/tempo/hg_tempo.php?woeid=$cid")); //Recebe os valores do HG Framework
$graus = " ºC";

/* 4 - Nome da Cidade (requer chave) */
$dados = hg_request(array(
	'city_name' => 'Florianópolis'
), $chave);

function hg_request($parametros, $chave = null, $endpoint = 'weather')
{
	$url = 'http://api.hgbrasil.com/' . $endpoint . '/?format=json&';

	if (is_array($parametros)) {
		// Insere a chave nos parametros
		if (!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));

		// Transforma os parametros em URL
		foreach ($parametros as $key => $value) {
			if (empty($value)) continue;
			$url .= $key . '=' . urlencode($value) . '&';
		}

		// Obtem os dados da API
		$resposta = file_get_contents(substr($url, 0, -1));

		return json_decode($resposta, true);
	} else {
		return false;
	}
}
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
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
	<script type="text/javascript" src="js/jquery.smint.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.subMenu').smint({
				'scrollSpeed': 1000
			});
		});
	</script>

	<!-- Piwik
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
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-79289611-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!----api tempo yahoo---->
	<script type="text/javascript">
		var now = new Date();
		var tempURL = 'https://weather-ydn-yql.media.yahoo.com/forecastrss?location=blumenau,ca&format=json';
		//var encoded = encodeURIComponent(tempURL);
		$.ajax({
			url: tempURL,
			dataType: 'json',
			type: 'GET',
			beforeSend: function() {
				$('#tempo').html('Carregando...');
			},
			success: function(data) {
				if (data !== null && data.query !== null && data.query.results !== null && data.query.results.channel.description !== 'Yahoo! Weather Error') {
					var temp = data.query.results.channel.item.condition.temp;

					$('#tempo').html(temp + '°C');
				}
			},
			error: function() {
				$('#tempo').html('Erro');
			}

		});
	</script>

	<!----style tempo yahoo---->
	<style type="text/css">
		/* HG Brasil CSS Framework */
		* {
			margin: 0 0 7 0;
			padding: 0;
			list-style: none;
		}

		body {
			font: normal 16px Arial;
			color: #FFF;
		}

		#HGweather {
			background-image: url(http://frameworks.hgbrasil.com/tempo/backgroud.png);
			width: 270px;
			height: 79px;
			position: absolute;
			top: 7px;
			/* Altere aqui para mudar a posição do tempo */
			left: 7px;
			/* Altere aqui para mudar a posição do tempo */
			background-repeat: no-repeat;
		}

		#imagem {
			position: relative;
			top: 4px;
			left: 0px;
		}

		#cidade {
			position: relative;
			top: -100px;
			left: 90px;
		}

		#condicao {
			position: relative;
			top: -105px;
			left: 90px;
		}

		#temperatura {
			position: relative;
			top: -105px;
			left: 220px;
		}
	</style>

</head>

<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
	<!----start-container----->
	<div class="head-bg sTop">
		<div id="language_list">
			<div class="row d-flex justify-content-between">
				<div class="col-xs-6 col-md-4" style="height: 140px;">
					<div class="col-xs-6 col-md-3">
						<img src="images/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo" height="70" width="100">
					</div>
					<div class="col-xs-6 col-md-8">
						<?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
						<?php echo $dados['results']['description']; ?>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
					<?php if ($hg->is_error() == false) : ?>
						<p>Dólar: <span class="text-center"><?php echo (round($dolar['buy'], 2)); ?> / Euro: <span class="text-center"><?php echo (round($euro['buy'], 2)); ?></span></p>
					<?php else : ?>
						<p>Cotação <span class="text-center">Serviço indisponível</span></p>
					<?php endif; ?>
				</div>
				<div class="col-xs-6 col-md-4" style="height: 0px;  width: 350px;  padding-left: 250px;  padding-right: 10px;">
					<a href="index.php?lang=en"><img src="images/en.png" height="12" alt="en" width="18" class="lazyloaded" data-was-processed="true"></a>
					<a href="index.php?lang=es"><img src="images/es.png" height="12" alt="es" width="18" class="lazyloaded" data-was-processed="true"></a>
					<a href="index.php?lang=pt-br"><img src="images/pt-br.png" height="12" alt="pt-br" width="18" class="lazyloaded" data-was-processed="true"></a>
				</div>
			</div>
		</div>
		<div class="conatiner">
			<div class="row">
				<div class="col-xs-12 col-sm-12"></div>
				<div class="col-xs-12 col-sm-12" style="text-align: center; vertical-align:middle; display:table-cell;"><img src="images/cristian.jpg" width="130" height="130" style="border-radius: 50%;"></div>
				<div class="col-xs-12 col-sm-12"></div>
			</div>
		</div>
		<div class="conatiner">
			<div class="col-lg-12 header-note" style="padding-top: 0px;">

				<h1><?php echo $lang['cargo']; ?></h1>
				<h4 class="text-center">
					<?php echo $lang['descricao']; ?>
					<!-- <a class="btn btn-primary big-btn" href="#"><?php echo $lang['lermais']; ?><span> </span></a> -->
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
			<a id="s4" class="right-msg subNavBtn msg-icon" href="#"><span> </span></a>
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
				<h2><?php echo $lang['titulo1']; ?></h2>
				<p>
					<?php echo $lang['texto1']; ?>
				</p>
			</div>
			<div class="col-md-4 top-grid">
				<span class="icon2"> </span>
				<h2><?php echo $lang['titulo2']; ?></h2>
				<p>
					<?php echo $lang['texto2']; ?>
				</p>
			</div>
			<div class="col-md-4 top-grid">
				<span class="icon3"> </span>
				<h2><?php echo $lang['titulo3']; ?></h2>
				<p><?php echo $lang['texto3']; ?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---- //End-top-grids---->
	<!----start-about---->
	<div class="about">
		<div class="container">
			<div class="col-md-6 divice">
				<img class="img-responsive" src="images/wk_cel.jpg" title="divice" style="width: 250px;margin-left: 90px;" />
			</div>
			<div class="col-md-6 divice-info text-info">
				<h3><?php echo $lang['titulo1']; ?></h3>
				<p class="text-info">
					<?php echo $lang['textoResponsivo']; ?>
				</p>
				<!-- <a class="btn btn-primary btn-red" href="#"><?php echo $lang['lermais']; ?><span> </span></a> -->
			</div>
		</div>
	</div>
	<!----//End-about---->
	<!----start-portfolio---->
	<div class="portfolio section s2">
		<div class="container portfolio-head">
			<h3><?php echo $lang['portifolio']; ?></h3>
			<p><?php echo $lang['textoPortifolio']; ?></p>
		</div>
		<!---- start-portfolio-script----->
		<script src="js/hover_pack.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {
				var filterList = {
					init: function() {

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
					hoverEffect: function() {
						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(
							function() {
								$(this).find('.label').stop().animate({
									bottom: 0
								}, 200, 'easeOutQuad');
								$(this).find('img').stop().animate({
									top: -30
								}, 500, 'easeOutQuad');
							},
							function() {
								$(this).find('.label').stop().animate({
									bottom: -40
								}, 200, 'easeInQuad');
								$(this).find('img').stop().animate({
									top: 0
								}, 300, 'easeOutQuad');
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
					<a data-toggle="modal" data-target=".bs-example-modal-md" href="https://blog.consultoriawk.com/my-car-2023/" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/MyCar.PNG" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt="" /></h2>
						</div>
					</a>
				</div>
			</div>
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a data-toggle="modal" data-target=".bs-example-modal-md" href="https://intelligence.lojaimportados.com.br/" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/intelligence.PNG" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt="" /></h2>
						</div>
					</a>
				</div>
			</div>
			<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a data-toggle="modal" data-target=".bs-example-modal-md" href="https://www.lojaimportadosbr.com.br/" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/loja_importados.PNG" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt="" /></h2>
						</div>
					</a>
				</div>
			</div>
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">
					<a data-toggle="modal" data-target=".bs-example-modal-md" href="https://woog1.bubbleapps.io/version-test/" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/woog.PNG" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt="" /></h2>
						</div>
					</a>
				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!----//End-portfolio---->
	<!---testmonials---->
	<div class="testmonials section s3">
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
							<h2><img src="images/MyCar.PNG" title="SaaS de Gestão Automotiva" style="width: 100px; height: 100px;" /></h2>
							<div class="carousel-caption caption">
								<h3><?php echo $lang['titulo4']; ?></h3>
								<p><?php echo $lang['texto4']; ?></p>
							</div>
						</div>
						<div class="item">
							<h2><img src="images/busca_cep.PNG" title="Busca CEP" style="width: 100px; height: 100px;" /></h2>
							<div class="carousel-caption caption">
								<h3><?php echo $lang['titulo5']; ?></h3>
								<p><?php echo $lang['texto5']; ?></p>
							</div>
						</div>
						<div class="item">
							<h2><img src="images/woog.PNG" title="Plataforma de Afiliados e Indicação criada em Bubble" style="width: 100px; height: 100px;" /></h2>
							<div class="carousel-caption caption">
								<h3><?php echo $lang['titulo6']; ?></h3>
								<p><?php echo $lang['texto6']; ?> </p>
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
			<h4><?php echo $lang['contato']; ?></h4>
			<p class="contact-head">
				<? echo $lang['textoContato']; ?>
			</p>
			<div class="row contact-form">
				<form>
					<div class="col-md-6 text-box">
						<input type="text" placeholder="<? echo $lang['nome']; ?>" />
						<input type="text" placeholder="<? echo $lang['mail']; ?>" />
					</div>
					<div class="col-md-6 textarea">
						<textarea><? echo $lang['msg']; ?></textarea>
					</div>
					<div class="clearfix"> </div><br />
					<input class="btn btn-primary btn-red-lg" type="submit" value="<?php echo $lang['enviarMsg']; ?>" />
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
				<p>Design by<a href="http://consultoriawk.com/">WK</a></p>
			</div>
			<!----//End-copy-right---->
		</div>
	</div>
	<!----//End-contact---->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>