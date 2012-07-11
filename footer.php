<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Elementary
 * @since Elementary 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'elementary_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'elementary' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'elementary' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'elementary' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'elementary' ), 'Elementary', '<a href="http://sajithdilshan.github.com" rel="designer">Sajith Dilshan</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>