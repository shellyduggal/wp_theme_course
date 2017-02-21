<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Awesome Theme</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<?php wp_head(); ?>
	</head>

	<?php 
		if(is_front_page()):
			$awesome_classes = array('awesome-class', 'my-class');
		else:
			$awesome_classes = array('no-awesome-class');
		endif;
	?>

	<body <?php body_class($awesome_classes); ?> >

		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Heaader Image" />