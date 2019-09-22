<?php 
get_header();


while(have_posts()){
    the_post();?>
   <div class="page-banner">
       <div class="white-overlay">
           <h1 id="example-title"><?php the_title(); ?></h1>
       </div>
    </div>  
    <div class="interior-page_bg">
        <div class="interior-page-container"> <?php the_content(); ?></div>
    </div>  
   
   <?php
}

get_footer();

?>