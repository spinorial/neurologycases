<?php
/**
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php if ( has_post_thumbnail() && !independent_publisher_has_full_width_featured_image() ) : ?>
		<?php the_post_thumbnail( 'independent_publisher_post_thumbnail', array( 'itemprop' => 'image' ) ); ?>
	<?php endif; ?>
	<header class="entry-header">
		<?php if ( independent_publisher_post_has_post_cover_title() ): ?>
			<h2 class="entry-title-meta">
      <span class="entry-title-meta-author">
        <?php if ( !independent_publisher_categorized_blog() ) {
			echo independent_publisher_entry_meta_author_prefix() . ' ';
		}
		independent_publisher_posted_author() ?></span>
				<?php if ( get_post_meta( get_the_ID(), 'independent_publisher_primary_category', true ) ) { // check for a custom field named 'independent_publisher_primary_category'
					echo independent_publisher_entry_meta_category_prefix() . ' ' . get_post_meta( get_the_ID(), 'independent_publisher_primary_category', true ); // show the primary category as set in ACF
				} else if ( independent_publisher_categorized_blog() ) {
					echo independent_publisher_entry_meta_category_prefix() . ' ' . independent_publisher_post_categories();
				} ?>
				<span class="entry-title-meta-post-date">
				<span class="sep"> <?php echo apply_filters( 'independent_publisher_entry_meta_separator', '|' ); ?> </span>
					<?php independent_publisher_posted_on_date() ?>
			</span>
				<?php do_action( 'independent_publisher_entry_title_meta', $separator = ' | ' ); ?>
			</h2>
		<?php else: ?>
			<h2 class="entry-title-meta">
			<span class="entry-title-meta-author">
				<?php if ( !independent_publisher_categorized_blog() ) {
					echo independent_publisher_entry_meta_author_prefix() . ' ';
				}
				independent_publisher_posted_author() ?>
			</span>
				<?php if ( independent_publisher_categorized_blog() ) {
					echo independent_publisher_entry_meta_category_prefix() . ' ' . independent_publisher_post_categories();
				} ?>
				<span class="entry-title-meta-post-date">
				<span class="sep"> <?php echo apply_filters( 'independent_publisher_entry_meta_separator', '|' ); ?> </span>
					<?php independent_publisher_posted_on_date() ?>
			</span>
				<?php do_action( 'independent_publisher_entry_title_meta', $separator = ' | ' ); ?>
			</h2>
			<h1 class="entry-title p-name" itemprop="name"><?php the_title(); ?></h1>
		<?php endif; ?>
	</header>
	<!-- .entry-header -->
	<div class="entry-content e-content" itemprop="mainContentOfPage">
		
        <?php get_template_part( 'article/history'); ?>     
        <?php get_template_part( 'article/neuroexam'); ?>
        <?php //get_template_part( 'article/investigations'); ?> 
        <?php //get_template_part( 'article/discussion'); ?>

	</div>
	<!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
