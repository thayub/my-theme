<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Basic Bootstrap
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
<section class="footer">
	<div class="container">
	<footer id="colophon" class="row" role="contentinfo">
		<div class="col-sm-4">
			<?php if ( ! dynamic_sidebar( 'footer left' ) ) : ?>

		    <aside id="categories" class="widget"><h4>Categories</h4>
				<ul>
				<?php wp_list_categories( 'title_li=' ); ?>
				</ul>
		    </aside>

			<?php endif; ?>
		</div>

		<div class="col-sm-4">
			<?php if ( ! dynamic_sidebar( 'footer center' ) ) : ?>

		    <aside id="categories" class="widget"><h4>Categories</h4>
				<ul>
				<?php wp_list_categories( 'title_li=' ); ?>
				</ul>
		    </aside>

			<?php endif; ?>
		</div>

		<div class="col-sm-4">
			<?php if ( ! dynamic_sidebar( 'footer right' ) ) : ?>

		    <aside id="categories" class="widget"><h4>Categories</h4>
				<ul>
				<?php wp_list_categories( 'title_li=' ); ?>
				</ul>
		    </aside>

			<?php endif; ?>
		</div>
	</footer><!-- #colophon -->
	</div>
</section>

<?php wp_footer(); ?>

</body>
</html>
