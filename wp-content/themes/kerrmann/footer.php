<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer_content">
		    <a href="">Mentions légales</a> - Copyright© 2017 Kerrmann - Site réalisé par KONG Alexandre
		</div>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/design.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/protonet/jquery.inview/jquery.inview.min.js"></script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
