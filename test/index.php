<?php get_header(); ?>
	<title>Document</title>
<div class="row" >
	<div class="col-sm-8">
		
			<?php 
				if(have_posts())
				{
					while(have_posts())
					{
						the_post();?>
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p><br>
					<?php 
					} 
				}
			?>	
	</div>

	<div class="col-sm-4"><?php get_sidebar(); ?>
	</div>
	<div id="comment">
		<?php 
		if(comments_open())
		{
			comments_template();
		} 
		else
		{ ?>
		<h1>comments are closed<h1>
		<?php }
		?>
		
	</div>
</div>

</html>


<?php get_footer(); ?>
