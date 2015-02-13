<?php get_header(); ?>
	
	<section>
		<div class="clearfix">
			<div class="main">
			<img src="http://localhost:8888/spring2015/wp-content/themes/pressed/images/hero.jpg" />
			</div>
			
			<?php get_sidebar(); ?>
		</div>	
			<section>
				<p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
				<p>We also make pancakes on the side.</p>
			</section>
			
			<section>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article> 
					<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</article>
			<?php endwhile; else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</section>
			
	</section>
<?php get_footer(); ?>