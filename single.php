<style type="text/css" media="screen">
body {
background: <?php the_title(); ?>;
}
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  var pluginUrl =
  '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-33393426-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<?php get_header(); ?>

<body class="<?php
        $category = get_the_category(); 
        echo $category[0]->cat_name;
        echo " ";
        echo $category[1]->cat_name;
        ?>">

<div id="page">
	<div id="main">
		<div id="primary">
			<div id="content" role="main">
			
				<?php wp_reset_query(); ?>

				<?php while ( have_posts() ) : the_post(); ?>
								
        <div id="post-wrap">
            <h1 id="fittext1"><?php the_title(); ?></h1>
            <div id="main-nav">
              <ul>
                <li><a href="#about">&#64;</a></li>
                <li><a href="/grid"><i class="icon-grid" aria-hidden="true"></i></a></li>
                <li class="shuffle"><a href="/"><i class="icon-shuffle" aria-hidden="true"></i></a></li>
              </ul>
            </div>

          </div>
          
          <div id="about">
            <a class="close" href="#">+</a>
            <h3>About 147 Colors</h3>
            <p>This is a tool built to help web designers and developers learn the 147 CSS color names that are available today. The 147 Colors consist of 17 standard plus 130 more.</p>
            <p>The 17 standard colors are: aqua, black, blue, fuchsia, gray, grey, green, lime, maroon, navy, olive, purple, red, silver, teal, white and yellow.</p>
            <p>If you have enjoyed this tool please help by sharing it with other designers and friends!</p>
            <p><a href="http://www.brianmaierjr.com" target="_blank">Brian Maier Jr.</a> made 147 Colors using <a href="http://wordpress.org">WordPress</a>, <a href="http://www.fonts.com/font/typetogether/adelle-sans?QueryFontType=Web#product_top">Fonts from fonts.com</a>, <a href="http://icomoon.io">IcoMoon icon fonts</a> and some help from <a href="http://www.w3schools.com/cssref/css_colornames.asp" target="_blank">w3schools.</a></p>
          </div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>