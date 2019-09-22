<?php 
get_header();

while(have_posts()){
    the_post();?>
    <div class="page-banner">
    </div>    
   <div> <?php the_content(); ?></div>
   <?php
}

get_footer();

?>