<?php
ob_start("ob_gzhandler");
?>

<?php
$subjectPrefix = '[Contato via Site]';
$emailTo = 'contato@fabiolimarocha.com.br';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['nome']));
    $email    = stripslashes(trim($_POST['email']));
    $message  = stripslashes(trim($_POST['mensagem']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $message){
        $subject = "$subjectPrefix";
        $body = "Nome: $name <br /> Email: $email <br /> Mensagem: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?><!doctype html>
<html lang="pt-BR">
	<head>

	<title>Fábio Lima Rocha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@fabiolimarocha"> 
    <meta name="twitter:creator" content="@fabiolimarocha">
    <meta name="twitter:title" content="Fábio Lima Rocha - Web Developer">
    <meta name="twitter:description" content="Eu sou o Fábio. Sou Desenvolvedor Web e trabalho na Editora CARAS. Também sou fundador da Lima Solutions, apreciador de um bom café, apaixonado pela web e pelos livros do Stephen King. Sou graduado em Análise de Desenvolvimento de Sistemas pela Estácio e torcedor fanático do São Paulo Futebol Clube :)">
    <meta name="twitter:image" content="http://static.fabiolimarocha.com.br/imgs/logo.png">

    <meta name="title" content="Fábio Lima Rocha - Web Developer">
    <meta name="description" content="Eu sou o Fábio. Sou Desenvolvedor Web e trabalho na Editora CARAS. Também sou fundador da Lima Solutions, apreciador de um bom café, apaixonado pela web e pelos livros do Stephen King. Sou graduado em Análise de Desenvolvimento de Sistemas pela Estácio e torcedor fanático do São Paulo Futebol Clube :)">
    <meta name="keywords" content="Fábio Lima Rocha, Web Developer, Desenvolvedor Web, Front-End, Desenvolvedor, Programador, HTML, CSS, Javascript, jQuery">
    <meta name="news_keywords" content="Fábio Lima Rocha, Web Developer, Desenvolvedor Web, Front-End, Desenvolvedor, Programador, HTML, CSS, Javascript, jQuery">
  
    <meta property="fb:admins" content="100000796672456">
    <meta property="fb:app_id" content="100000796672456">
    <meta property="og:title" content="Fábio Lima Rocha - Web Developer">
    <meta property="og:url" content="http://fabiolimarocha.com.br/">
    <meta property="og:image" content="http://static.fabiolimarocha.com.br/imgs/logo.png">
    <meta property="og:site_name" content="Fábio Lima Rocha - Web Developer"/>
    <meta property="og:description" content="Eu sou o Fábio. Sou Desenvolvedor Web e trabalho na Editora CARAS. Também sou fundador da Lima Solutions, apreciador de um bom café, apaixonado pela web e pelos livros do Stephen King. Sou graduado em Análise de Desenvolvimento de Sistemas pela Estácio e torcedor fanático do São Paulo Futebol Clube :)">
  	<meta property="og:locale" content="pt_BR">
        
  	<meta itemprop="uri" content="http://fabiolimarocha.com.br/">
  	<meta itemprop="image" src="http://static.fabiolimarocha.com.br/imgs/logo.png">
    <meta itemprop="keywords" content="Fábio Lima Rocha, Web Developer, Desenvolvedor Web, Front-End, Desenvolvedor, Programador, HTML, CSS, Javascript, jQuery">
  	<meta itemprop="publisher" content="Fábio Lima Rocha - Web Developer">

    <!-- CSS geral --> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- CSS - Owl Carousel Assets (begin) -->
	<link type="text/css" href="css/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link type="text/css" href="css/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- CSS - Owl Carousel Assets (end) -->
        
    <!-- CSS responsive -->    
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- Chamada Google Analytics (begin) -->
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-64560258-1', 'auto');
      ga('send', 'pageview');

    </script>
	<!-- Chamada Google Analytics (end) -->    

	</head>
	<body id="home">

		<header class="clearfix lazy-background" data-original="http://static.fabiolimarocha.com.br/imgs/bg-header.jpg" style="background-image: url('http://static.fabiolimarocha.com.br/imgs/transparent.gif')">

			<div class="wrap-logo">
				<div class="logo">
					<a><img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/logo.png" alt="Fábio Lima Rocha - Web Developer" title="Fábio Lima Rocha - Web Developer"></a>
				</div>
				<div class="info">
					<h1>Fábio Lima Rocha</h1>
					<h2>Web Developer</h1>
				</div>
			</div>	

		</header>

		<nav>

			<div class="nav-menu">
				<a href="#" class="icon-menu"></a>
				<ul class="menu">
					<span>$(document).ready(function() {</span>

					<li><a href="#home" class="scroll_ancoras">Home();</a></li>
					<li><a href="#sobre" class="scroll_ancoras">Sobre();</a></li>
					<li><a href="#portfolio" class="scroll_ancoras">Portfolio();</a></li>
					<li><a href="#contato" class="scroll_ancoras">Contato();</a></li>

					<span>});</span>
				</ul>
			</div>

			<div class="logo-mini">
				<img src="http://static.fabiolimarocha.com.br/imgs/logo.png" alt="Fábio Lima Rocha - Web Developer" title="Fábio Lima Rocha - Web Developer">
			</div>

			<ul class="redessociais">
				<li><a href="https://www.facebook.com/fabiolimarocha" target="_blank" class="icon-facebook"></a></li>
				<li><a href="https://twitter.com/fabiolimarocha" target="_blank" class="icon-twitter"></a></li>
				<li><a href="https://br.linkedin.com/pub/fábio-lima-rocha/3b/572/61" target="_blank" class="icon-linkedin"></a></li>
			</ul>
		</nav>

		<div class="wrap-container">

			<section class="sobre">
				<div class="content clearfix">
					<h1><a id="sobre"><span>function</span> Sobre() <span>{</span></a></h1>

					<p>Hi ;)</p>

					<p>Eu sou o Fábio Lima. Sou Desenvolvedor Web e trabalho na Editora CARAS, sou apreciador de um bom café, apaixonado pela web e pelos livros do Stephen King, graduado em Análise e Desenvolvimento de Sistemas pela Estácio e torcedor fanático do São Paulo Futebol Clube :)</p>

					<p>Em 2013 trabalhei no Jornal "O Estado de São Paulo", atuando em projetos como o novo portal do Jornal do Carro e nos especiais da Copa do Mundo 2014.</p>

					<p>Hoje na CARAS trabalho com 18 projetos incríveis. São eles, o portal da própria editora (Versão desktop e mobile) e os portais das revistas: Ana Maria, Aventuras na História, Bons Fluidos, Contigo!, Manequim, Máxima, Minha Casa, Minha Novela, Placar, Recreio, Sou Mais Eu, Tititi, Vida Simples, Viva Mais, Você RH e Você S/A. (Todos responsivos) </p>

				</div>
			</section>

			<section class="portfolio">
				<div class="content clearfix">
					<h1><a id="portfolio"><span>} function</span> Portfolio() <span>{</span></a></h1>

					<!-- carousel (begin) -->
					<div class="carousel-portfolio">
						
						<div id="owl-portfolio" class="owl-portfolio">
							<div class="item">
								<a href="http://caras.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/caras.jpg" alt="CARAS" title="CARAS">
							    	</div> 
							    	<h2>Portal de Notícias: Editora CARAS</h2>  
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p> 
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion.</p>
                                    <p>- Construção/Adaptação do sistema de importação de feed dos blogs e dinamização dos posts em ColdFusion e MySQL</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>       		
								</a>
							</div>
							<div class="item">
								<a href="http://jornaldocarro.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/jornaldocarro.jpg" alt="Jornal do Carro" title="Jornal do Carro">
							    	</div>  
							    	<h2>Portal de Notícias: Jornal do Carro</h2>
                                    <p>- Front-End: HTML, CSS e Javascript/jQuery</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            
                            <!--  -->
                            
                            <div class="item">
								<a href="http://andrewskphotographer.com/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/andrewsk.jpg" alt="Carol Andrewsk Photographer" title="Carol Andrewsk Photographer">
							    	</div>  
							    	<h2>Portfolio Carol Andrewsk Photographer</h2>
                                    <p>- Front-End: HTML, CSS e Javascript/jQuery</p>
							    	<p>- Customização de tema Wordpress</p>   
                                    <p>- Construção da interface responsiva</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://aventurasnahistoria.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/aventuras.jpg" alt="Revista Aventuras na História" title="Revista Aventuras na História">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Aventuras na História</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://bonsfluidos.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/bonsfluidos.jpg" alt="Revista Bons Fluidos" title="Revista Bons Fluidos">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Bons Fluidos</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.callstation.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/callstation.jpg" alt="CallStation" title="CallStation">
							    	</div>  
							    	<h2>Site Institucional: CallStation</h2>
							    	<p>- Front-End: HTML, CSS e Javascript/jQuery</p>
							    	<p>- Customização de tema Wordpress</p>
                                    <p>- Construção da interface responsiva</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://drfulgencio.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/clinicahlpa.jpg" alt="Clínica Dr. Fulgêncio HLPA" title="Clínica Dr. Fulgêncio HLPA">
							    	</div>  
							    	<h2>Site Institucional: Clínica Dr. Fulgêncio HLPA</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery</p> 
                                    <p>- Back-End: Dinamização das páginas com PHP</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.ursinhobranco.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/escola-ursinho.jpg" alt="Escola Ursinho Branco" title="Escola Ursinho Branco">
							    	</div>  
							    	<h2>Site Institucional: Escola Ursinho Branco</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery</p>
                                    <p>- Back-End: Dinamização das páginas com PHP</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>  
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.espacovilla18.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/espacovilla18.jpg" alt="Espaço Villa 18" title="Espaço Villa 18">
							    	</div>  
							    	<h2>Site Institucional: Espaço Villa 18</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery</p> 
                                    <p>- Back-End: Dinamização das páginas com PHP</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>   
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.grupoferrasa.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/ferrasa.jpg" alt="Grupo Ferrasa" title="Grupo Ferrasa">
							    	</div>  
							    	<h2>Site Institucional: Grupo Ferrasa</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery</p>
                                    <p>- Back-End: Dinamização das páginas com PHP</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
                                    <p>- Construção da interface responsiva</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://manequim.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/manequim.jpg" alt="Revista Manequim" title="Revista Manequim">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Manequim</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://maxima.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/maxima.jpg" alt="Revista Máxima" title="Revista Máxima">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Máxima</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://minhacasa.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/minhacasa.jpg" alt="Revista Minha Casa" title="Revista Minha Casa">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Minha Casa</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://minhanovela.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/minhanovela.jpg" alt="Revista Minha Novela" title="Revista Minha Novela">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Minha Novela</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                           <!--  <div class="item">
								<a href="http://conservasole.com.br/abad2012/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img src="http://static.fabiolimarocha.com.br/imgs/portfolio/ole-abad.jpg" alt="Olé ABAD" title="Olé ABAD">
							    	</div>  
							    	<h2>Hotsite: Olé ABAD</h2>
							    	<p>Desenvolvimento do HTML, CSS e JQuery</p>   
							    	<span>Visite :)</span>            		
								</a>
							</div> -->
                            <!-- <div class="item">
								<a href="http://conservasole.com.br/olimpiadas/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img src="http://static.fabiolimarocha.com.br/imgs/portfolio/ole-olimpiadas.png" alt="Olé Olimpíadas" title="Olé Olimpíadas">
							    	</div>  
							    	<h2>Hotsite: Olé Olimpíadas</h2>
							    	<p>Desenvolvimento do HTML, CSS e JQuery</p>   
							    	<span>Visite :)</span>            		
								</a>
							</div> -->
                            <div class="item">
								<a href="http://recreio.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/recreio.jpg" alt="Revista Recreio" title="Revista Recreio">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Recreio</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>   
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://sgmbrasil.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/sgm.jpg" alt="SGM Brasil" title="SGM Brasil">
							    	</div>  
							    	<h2>Site Institucional: SGM Brasil</h2>
							    	<p>- Front-End: HTML, CSS e Javascript/jQuery</p>
							    	<p>- Customização de tema Wordpress</p> 
                                    <p>- Criação e implementação de plugins</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>   
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://soumaiseu.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/soumaiseu.jpg" alt="Revista Sou Mais Eu" title="Revista Sou Mais Eu">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Sou Mais Eu</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.spplast.com.br/sitenovo/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/spplast.jpg" alt="SP Plast" title="SP Plast">
							    	</div>  
							    	<h2>Site Institucional: SP Plast</h2>
							    	<p>- Front-End: HTML, CSS e Javascript/jQuery</p>
							    	<p>- Customização de tema Wordpress</p>  
                                    <p>- Criação e implementação de plugins</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>    
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.studioimpress.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/studioimpress.jpg" alt="Studio Impress" title="Studio Impress">
							    	</div>  
							    	<h2>Site Institucional: Studio Impress</h2>
							    	<p>- Front-End: HTML, CSS e Javascript/jQuery</p>
                                    <p>- Back-End: Dinamização das páginas com PHP</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://vidasimples.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/vidasimples.jpg" alt="Revista Vida Simples" title="Revista Vida Simples">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Vida Simples</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.vistaconceicao.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/vista.jpg" alt="Vista Conceição" title="Vista Conceição">
							    	</div>  
							    	<h2>Hotsite: Vista Conceição</h2>
							    	<p>- Front-End: HTML, CSS e Javascript/jQuery</p>
                                    <p>- Back-End: Dinamização das páginas com PHP</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://vivamais.uol.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/vivamais.jpg" alt="Revista Viva Mais" title="Revista Viva Mais">
							    	</div>  
							    	<h2>Portal de Notícias: Revista Viva Mais</h2>
							    	<p>- Front-End: HTML, CSS, Javascript/jQuery, AJAX, JSON, XML e CFML</p>
                                    <p>- Back-End: Dinamização de páginas e includes com ColdFusion</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <div class="item">
								<a href="http://www.imoveissaobento.com.br/property_type/homepage/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img class="lazy" src="http://static.fabiolimarocha.com.br/imgs/transparent.gif" data-original="http://static.fabiolimarocha.com.br/imgs/portfolio/vorlene.jpg" alt="Vorlene & Chagas" title="Vorlene & Chagas">
							    	</div>  
							    	<h2>Site Institucional: Vorlene & Chagas</h2>
							    	<p>- Front-End: HTML, CSS e Javascript/jQuery</p>
							    	<p>- Customização de tema Wordpress</p>  
                                    <p>- Criação e implementação de plugins</p>
                                    <p>- Construção da interface responsiva</p>
                                    <p>- Tratamento de imagens e recorte de layout com Photoshop</p>    
							    	<span>Visite :)</span>            		
								</a>
							</div>
                            <!-- <div class="item">
								<a href="http://amigosreal.com.br/" target="_blank">
									<div class="crop-owl-portfolio">
							    		<img src="http://static.fabiolimarocha.com.br/imgs/portfolio/amigosreal.jpg" alt="Escolinha de Futebol Amigos Real" title="Escolinha de Futebol Amigos Real">
							    	</div>  
							    	<h2>Site Institucional: Escolinha de Futebol Amigos Real</h2>
							    	<p>Desenvolvimento do HTML, CSS e JQuery</p>   
							    	<span>Visite :)</span>            		
								</a>
							</div> -->
                            
                            <!--  -->
                            
						</div>

						<div class="navigation-carousel">
							<a class="btn prev"></a>
							<a class="btn next"></a>
						</div>	

					</div>
					<!-- carousel (end) -->

				</div>
			</section>

			<section class="contato">
				<div class="content clearfix">
					<h1><a id="contato"><span>} function</span> Contato() <span>{</span></a></h1>
                    
                    <?php if(!empty($emailSent)): ?>
                        <span class="sucess">Sua mensagem foi enviada com sucesso.</span>
                    <?php else: ?>
                        <?php if(!empty($hasError)): ?>
                            <span class="error">Houve um erro no envio, tente novamente mais tarde.</span>
                        <?php endif; ?>

					<form name="contato" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
						<label>Nome:</label>
						<input type="text" name="nome" id="nome" required>
						<label>E-mail:</label>
						<input type="text" name="email" id="email" required>
						<label>Mensagem:</label>
						<textarea id="mensagem" name="mensagem" required></textarea>
						<input type="submit" class="btn-enviar" name="enviar" value="Enviar">
					</form>
                    <?php endif; ?>
                    
					<p>contato@fabiolimarocha.com.br</p>

					<span class="fecha-chave">}</span>

				</div>
			</section>

		</div>

		<footer>
			<div class="content clearfix">
				<p>© 2015 - Fábio Lima Rocha - Todos os direitos reservados.</p>
				<a id="voltar-topo">Voltar_ao_topo();</a>
			</div>
		</footer>
        
        <!-- scrits padrão (begin) -->
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/modernizr.min.js"></script>
        <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
        <script async defer type="text/javascript" src="js/scripts.js"></script>
        <!-- scrits padrão (end) -->

        <!-- JS - Owl Carousel Assets (begin) -->
        <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
        <!-- JS - Owl Carousel Assets (end) -->
		
        <!-- init lazyload (begin) -->
        <script type="text/javascript" charset="utf-8">
          //lazy padrão
          $(function() {
             $("img.lazy").lazyload({
               effect : "fadeIn"
             });
          });
            
          //lazy background    
          $(function() {
             $("header.lazy-background").lazyload();
          });    
        </script>
        <!-- init lazyload (end) -->
        
	</body>
</html>
