<?php require('header.php'); ?>

			<nav id="content">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				
					<div class="thumbnailImage">
						<a href="<?php the_permalink() ?>"><img src="<?php echo catch_first_image() ?>" alt="<?php the_title() ?>" /></a>
						<?php 
							$post_id = get_the_ID();
							
							if(get_post_meta($post_id, 'Tape Label', true) == '')
							{
								echo "<p class=\"thumbnailText\">";
								echo the_title();
								echo "</p>";
							}
							else
							{
								echo "<p class=\"thumbnailText\">". get_post_meta($post_id, 'Tape Label', true) ."</p>";
							}
						?>
						
					</div>
					
				<?php endwhile; ?>
				<?php endif; ?>
									
				<nav id="prev-next"><?php posts_nav_link(); ?></nav>
				
			</nav>

<?php require('footer.php'); ?>