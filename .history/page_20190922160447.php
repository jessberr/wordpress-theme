<?php 
get_header();


while(have_posts()){
    the_post();?>

    <div class="interior-page_bg">
        <div class="interior-page-container"> <?php the_content(); ?></div>
    </div>  
   
   <?php
}

get_footer();

?>