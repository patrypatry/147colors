<?php
/*
Template Name: Grid2
 */

get_header(); ?>

	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args= array(
			'posts_per_page' => -1,
			'paged' => $paged
		);
		query_posts($args);
	?>
	
	<?php if(have_posts()) : ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33393426-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>
<header>
	<a class="back" href="/"><i class="icon-arrow-left"></i> Back to 147 Colors</a>
  <nav id="nav">
    <ul id="filter">
      <li>Filter Colors</li>
      <li class="current"><a href="#">All</a></li>
      <li><a href="#">Pink</a></li>
      <li><a href="#">Red</a></li>
      <li><a href="#">Orange</a></li>
      <li><a href="#">Yellow</a></li>
      <li><a href="#">Brown</a></li>
      <li><a href="#">Green</a></li>
      <li><a href="#">Cyan</a></li>
      <li><a href="#">Blue</a></li>
      <li><a href="#">Purple</a></li>
      <li><a href="#">Gray</a></li>
    </ul>
  </nav>
</header>
<div id="page">
	<div id="main">
		<div id="primary">
			<div id="content" role="main">				

					<div id="post-wrap">
						<ul id="portfolio">
							<?php  query_posts('orderby=title&order=ASC&posts_per_page=-1'); ?>
							<?php while(have_posts()) : the_post(); ?>

							<?php 
							echo '<li style=" background: '. get_the_title().' ;" class="' 
			              ?>

			              <?php
			              $cats = wp_get_post_terms($post->ID,'category');
							foreach($cats as $cat){
								echo $cat->slug . ' ';
							}
							?>

							<?php
							echo '">';
							 ?>

			        <?php
							echo '<a href=" '. get_permalink().' ">' ;
							the_title();
							echo '</a></li>' ;
							?>

							<?php the_excerpt(); ?>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>

			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>