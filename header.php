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

		<div class="container">

		<!-- Navigation -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hamburger" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Awesome Theme</a>
		    </div>
		    <div class="collapse navbar-collapse" id="hamburger">
		    	<?php 
					wp_nav_menu(array(
						'theme_location'=>'primary', 
						'container' => false,
						'menu_class' => 'nav navbar-nav navbar-right'
						)
					); 
				?>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!-- Close Navigation -->

		<!-- Header Image -->
		<img 
			src="<?php header_image(); ?>" 
			height="<?php echo get_custom_header()->height; ?>" 
			width="<?php echo get_custom_header()->width; ?>" 
			alt="Heaader Image" 
		/>

		

		