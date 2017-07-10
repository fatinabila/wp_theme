<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>

	  <!-- Page Content -->
    <div class="container">

        

        <div class="row">
            <?php 
                $portfolio=new WP_Query('cat=3&&posts_per_page=3&&order=asc');

                 if ($portfolio ->have_posts()):
                 while($portfolio -> have_posts()) : $portfolio -> the_post() ; ?>
                 <div class="col-sm-4">
                     <h3><?php the_title(); ?></h3>
                     <p><?php the_content() ; ?></p>
                 </div>
             <?php 
                 endwhile;

                 else:
                 //hai
                 endif;
             ?>
        </div>
        <!-- /.row -->


<?php get_footer(); ?>
