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
		<div id="content" class="site-content" role="main" style="padding:20px;">
			<div class="slide-show" style="margin-bottom: 20px;">
				<?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
			</div>
			<br>
			<div class="post-slider">
				<?php echo do_shortcode('[advps-slideshow optset="1"]'); ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
