<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="mid-content" style="margin-bottom: 20px;">
				<div class="slideshow">
					<?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
				</div>
				<div class="right-sidebar">
					<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	                	<?php dynamic_sidebar( 'right-sidebar' ); ?>
					<?php endif; ?>
				</div>
				<div class="clear"></div>
			</div>
			<br>
			<div class="post-slider">
				<div class="title-slider">
					Sản phẩm mới
				</div>
				<div class="new-product">
				<?php
					echo do_shortcode('[jigoshop_product_list]');
				?>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
