<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<p><a href="http://trippnology.com">Trippnology</a> have got you covered: 
			<a href="web-design-attleborough">Web design Attleborough</a> &#183; 
			<a href="search-engine-optimisation-attleborough">SEO Attleborough</a> &#183; 
			<a href="it-support-attleborough">IT support Attleborough</a></p>
			<p><a href="http://creativecommons.org/licenses/by-sa/2.0/uk/" rel="license" title="Creative Commons Attribution-ShareAlike 2.0 UK: England &amp; Wales license"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cc-by-sa-80x15.png" alt="Creative Commons Attribution-ShareAlike 2.0 UK: England &amp; Wales license"></a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>