<?php
// Do not allow direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */
?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<div class="footer-center">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				<?php endif; ?>
			</div>		
		<div class="site-info">
		<?php
		if ( get_theme_mod( 'my_style__copyright' ) ) {
			echo wp_kses_post( get_theme_mod( 'code_copyright_text' ) );
		}
		else { ?>
			<a class="powered" href="<?php echo esc_url( __( 'https://wordpress.org/', 'my-style' ) ); ?>">
				<?php
				esc_html_e( 'Powered by WordPress', 'my-style' );
				?>
			</a>
			<p>
				<?php esc_html_e( 'All rights reserved', 'my-style' ); ?>  &copy; <?php bloginfo( 'name' ); ?>			
				<a title="Seos Theme - My Style" href="<?php echo esc_url( 'https://seosthemes.com/', 'my-style' ); ?>" target="_blank"><?php esc_html_e( 'My Style Theme by Seos Themes', 'my-style' ); ?></a>
			</p>
		<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php if( get_theme_mod( 'activate_back_to_top', true ) ) { my_style__to_top(); } ?>
<?php wp_footer(); ?>
</body>
</html>