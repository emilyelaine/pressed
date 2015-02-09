<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( ' name ' ) ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>"/>	
</head>
	<body>
		<header>
			<h1><?php bloginfo( ' name ' ) ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="http://localhost:8888/spring2015/wp-content/themes/pressed/images/hero.jpg" />
			
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
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>