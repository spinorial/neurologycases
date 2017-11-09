<?php
/**
 * Template name: homepage
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area"> -->
 <!-- <main id="content" class="site-content" role="main"> -->
		<div>
		<main>

			<?php 	$article_posts = new WP_Query( array (
											  'post_type' => 'article',
											  'posts_per_page' => 6
) );?>


		<div class="homeposts">
			<?php while ( $article_posts->have_posts() ) : $article_posts->the_post(); ?>
			
				<div class="col-sm-3 homeicon" style="padding:0">
				<div class="col-sm-12" style="padding:0">
				<?php if ( has_post_thumbnail() ) : ?>
				<?php $thumbclass = "homethumb-" .get_the_ID(); ?>
   				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        		<?php the_post_thumbnail('thumbnail',array('class'=>$thumbclass )); ?>
    			</a>
				<?php endif; ?>
				</div>
				<div class="col-sm-12 homethumb-title" style="padding:0"><?php echo get_the_title(); ?></div>
				</div>
	

			<?php endwhile; // end of the loop. ?>
		</div>

		<div class="col-sm-12 homesearch"><?php get_template_part( 'content/searchform' ) ?></div>
		</main>
		<!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<script>
	

</script>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
