<?php 
get_header();

while(have_posts()){
    the_post();?>
    <div class="page-banner">
    <div class="page-banner_bg"></div>
    <div class="page-banner_content">
    <h1><?php the_title(); ?></h1>
    <div class="page-banner_intro">
        <p>DONT FORGET TO REPLACE</p>
    </div>
    </div>    
    </div>
   
    <?php the_content(); 
}

get_footer();

?>