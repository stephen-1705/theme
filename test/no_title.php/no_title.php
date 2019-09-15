<?php 
/*
* Template name: No title
*/
get_header(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php 
		if(have_posts())
		{
			while(have_posts())
			{
				the_post();?>
			
			<p><?php the_content(); ?></p><br>
			<?php 
			} 
		}
	?>	

</body>
</html>
<?php get_footer(); ?>
