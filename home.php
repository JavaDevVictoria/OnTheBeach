<?php 
get_header();
query_posts('pagename=home'); 
 if (have_posts()) 
 {
    while (have_posts())  
    {
        art_post();
        comments_template();
    }
 } else {    
    art_not_found_msg();
 }

get_footer(); 