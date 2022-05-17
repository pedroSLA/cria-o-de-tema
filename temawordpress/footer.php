<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<div class="row">
		<div class="col-md-12 rodape">
			<p>Feito por min Footer</p>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>