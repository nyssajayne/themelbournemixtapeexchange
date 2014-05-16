<?php require('header.php'); ?>
		
			<article id="regular">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<header>
					<h1><?php the_title();?></h1>
				</header>
				
				<?php the_content(); ?>
				
				<?php endwhile; endif; ?>
			
			</article>
			
<?php require('footer.php'); ?>