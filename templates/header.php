<?php
/*

	## Programado por Sergio Sobrevela Guaita
	## 12-09-2013
	## @BetterSergio
	## bettersergiosg@gmail.com

*/
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['lang']; ?>">
	<head>
		<title><?php echo $lang['title']; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link href="jQuery/css/style.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#apDiv1 {
				position: absolute;
				width: 275px;
				height: 64px;
				z-index: 1;
				left: 691px;
				top: 22px;
			}
		</style>
			<!--[if lt IE 9]>
			<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
			<script type="text/javascript" src="js/html5.js"></script>
			<![endif]-->
		<script src="includes/jquery-1.4.2.js" type="text/javascript"></script>
		<script src="jQuery/js/jquery.jsocial.js" type="text/javascript"></script>
		<script type="text/xml">
			<!--
			<oa:widgets>
			  <oa:widget wid="2149023" binding="#social" />
			</oa:widgets>
			-->
		</script>
	</head>
	<?php
		if(isset($_GET['contacto'])){
			$page = 'page5';
		} else {
			$page = 'page1';
		}
	?>
	<body id="<?php echo $page; ?>">
	<div class="body1">
		<div class="body2">
			<div class="main">
				<!-- header -->
				<header>
					<div class="wrapper">
				    	<div class="social"></div>
				    	<script type="text/javascript">
								// BeginOAWidget_Instance_2149023: #social	
								$('.social').jsocial({
										twitter		:  '@MisitioVlc',
										facebook	:  'facebook.com/misitiovalencia?ref=ts&fref=ts',
										
										center		: false,	
										inline		: true,
										small		: false,
										newPage		: true
									});
							// EndOAWidget_Instance_2149023
	                  	</script>
						<form id="search" method="post" style="visibility:hidden;">
						    <div>
								<input type="submit" class="submit" value="">
								<input type="text" class="input">
							</div>
					    </form>
					</div>
					<div class="wrapper">
						<nav>
							<ul id="menu">
								<li><a href="index.php"><?php echo $lang['inicio']; ?></a></li>
								<li><a href="?servicios"><?php echo $lang['servicios']; ?></a></li>
								<li><a href="?visita"><?php echo $lang['visita_virtual']; ?></a></li>
								<li><a href="?galeria"><?php echo $lang['galeria']; ?></a></li>
								<li><a href="?contacto"><?php echo $lang['contacto']; ?></a></li>
								<?php if($lang['lang'] == 'es') { ?>
								<li><a href="?lang=val"><img src="images/valencia.png" height="20" width="20" style="padding-top:15px"><?php echo $lang['valen']; ?></a></li>
								<?php } else { ?>
								<li><a href="?lang=es"><img src="images/castellano.png" height="20" width="20" style="padding-top:15px"><?php echo $lang['esp']; ?></a></li>
								<?php } ?>
							</ul>
						</nav>
			  		</div>
					<div class="wrapper">
						<div class="col">
							<h2><?php echo $lang['misitio']; ?><span>Galería Jorge Juan</span></h2>