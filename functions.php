<?php
	
	//Adapted from http://www.wprecipes.com/how-to-get-the-first-image-from-the-post-and-display-it
	function catch_first_image()
	{
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];

		if(empty($first_img))
		{ //Defines a default image
			$first_img = "/images/default.jpg";
		}
		return $first_img;
	}
	
	function list_recent_posts()
	{
		$args = array('numberposts' => 5);
		$recent_posts = wp_get_recent_posts($args);

		foreach( $recent_posts as $recent )
		{
			echo "<li><a href=\"".get_permalink($recent["ID"])."\">".$recent["post_title"]."</a></li>";
		}
	}
	
	function theme_name_scripts() 
	{
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.js', array('jquery'), '2.0b2.120519', false );
		wp_enqueue_script( 'infinitescroll' );
		
	}
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );