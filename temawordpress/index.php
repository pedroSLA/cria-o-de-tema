<!DOCTYPE html>
<html>
<head>
	<title>Tema</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<?php get_header(); ?>

<h1>Olá Mundo</h1>

<h2>Meu 1º tema</h2>

<h3>Autor: Pedro dos Reis</h3>

<figure>
	
	<figcaption>
		Aizen
	</figcaption>


	<p><img src="<?php echo get_template_directory_uri() ?>/assets/img/aizen.png" width="136" heigth="200"></p>
</figure>	

</body>
</html>