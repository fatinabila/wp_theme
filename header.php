
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/business-frontpage.css" rel="stylesheet">
    <title><?php bloginfo('name');?></title>
	<?php wp_head(); ?>
</header>
<body <?php body_class();?>>

<div class="container">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header  site-nav" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url() ?>">Homepage</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<?php $args =array(
					     'theme_location' => 'primary'
				        );
			    ?>
                <ul class="nav navbar-nav">
				       	<?php
				        foreach ($args as $arg)
						{ ?>
                         <li><?php wp_nav_menu_no_ul(); ?> </li>
							  <?php
				            }

				       ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline"><?php bloginfo('name');?></h1>
                </div>
            </div>
        </div>
    </header>
