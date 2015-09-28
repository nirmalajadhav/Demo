<?php
/*
Template Name: Redirect
*/
 
if (have_posts()) {
  the_post();
//  $pattern = '@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@';
 // preg_match($pattern, get_the_excerpt(), $matches);
 // if ($matches[0]) {
	  Header( "HTTP/1.1 301 Moved Permanently" ); 
	  header('Location: '.get_the_excerpt());

 // }
}
?>