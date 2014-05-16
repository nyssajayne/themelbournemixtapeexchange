<?php require('header.php'); ?>

			<div id="container">
		
				<article id="blog">
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<header>
						<h1><?php the_title();?></h1>
					</header>
					
					<?php the_content(); ?>
					
					
					<h2><time pubdate><?php the_date(); ?></time></h2>
					
					<nav id="prev-next"><?php previous_post_link('%link','<img src="' . get_bloginfo("template_directory") . '/images/left_filled.png" /> %title'); ?> | <?php next_post_link('%link','%title <img src="' . get_bloginfo("template_directory") . '/images/right_filled.png" />'); ?></nav>
					
					<?php endwhile; endif; ?>
				
				</article>
				
				<aside>
			
				<h1>Recent Posts</h1>
				
				<ul>
				
					<?php echo list_recent_posts(); ?>

				</ul>
			</aside>
				
			</div>

<?php require('footer.php'); ?>