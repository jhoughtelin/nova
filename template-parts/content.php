<?php
/**
 * The template part for displaying content
 *
 * @package NovaUB
 */
?>

<div class="blog-item well">
	<?php the_title( '<h2><a href=""' . esc_url( get_permalink()) . '">', '</a></h2>'); ?>

	<div class="blog-meta clearfix">
		<p class="pull-left">
			<i class="icon-user"></i> by
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
				<?php the_author(); ?>
			</a> |
			<i class="icon-folder-close"></i> Category <?php echo get_the_category_list(', '); ?>|
			<i class="icon-calendar"></i> <?php echo get_the_date(); ?>
		</p>

		<?php if(comments_open()) : ?>
		<p class="pull-right">
			<i class="icon-comment pull"></i>
			<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
		</p>
		<?php endif; ?>

	</div>
	<p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>
	<p><?php the_excerpt(); ?></p>
	<a class="btn btn-link" href="<?php echo get_permalink(); ?>">Read More <i class="icon-angle-right"></i></a>
</div>
<!-- End Blog Item -->