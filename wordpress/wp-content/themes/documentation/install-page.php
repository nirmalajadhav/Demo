<?php
 /**
  * Template Name: Install Page
  *
  * A custom page template without sidebar.
  *
  * The "Template Name:" bit above allows this to be selectable
  * from a dropdown menu on the edit page screen.
  *
  * @package WordPress
  * @subpackage Twenty_Ten
  * @since Twenty Ten 1.0
  */
 
 get_header(); ?>
 <div id="blog">
 	<div class="container sect_cont">
 		<div class="row-fluid">
 			<div class="span3">
 				<?php get_sidebar(); ?>
 			</div>
 			<div class="span9 documentation_sect">		
 				<div class="article">
 					<?php get_template_part( 'loop', 'install-page' ); ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 
 <?php get_footer(); ?>