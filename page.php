<?php 
get_header();


while(have_posts()){
    the_post();?>
   <div class="page-banner">
       <div class="white-overlay">
           <h2 id="example-title"><?php the_title(); ?></h2>
       </div>
    </div>  
    <div class="interior-page_bg">
        <div class="interior-page-container"> <?php the_content(); ?></div>
    </div>  
   
   <?php
}

get_footer();

?>