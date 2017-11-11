<?php
/**
 * Template name: homepage-carousel
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area"> -->
 <!-- <main id="content" class="site-content" role="main"> -->
		<div>
		<main>

			<?php  ?>

			

			<?php 	$article_posts = new WP_Query( array (
											  'post_type' => 'article',
											  'posts_per_page' => 6));?>

		<div class="home-page-carousel">

			<?php while ( $article_posts->have_posts() ) : $article_posts->the_post(); ?>

				<div class="col-sm-4" style="height:100px"><?php the_post_thumbnail('thumbnail',array('class'=>$thumbclass )); ?></div>

			<?php endwhile; // end of the loop. ?>

		</div>

		
		</main>
		<!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<script>

    $(document).ready(function(){
      $('.home-page-carousel').slick({
          lazyLoad: 'ondemand',
  			slidesToShow: 1,
  			slidesToScroll: 1
      });
    });
  </script>
	

</script>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
