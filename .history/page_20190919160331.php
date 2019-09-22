<?php 
get_header();

while(have_posts()){
    the_post();?>
    <div class="page-banner">
    <div class="page-banner_bg-image" ></div>
    <div class="page-banner_content">
        <h1 class="page-banner_title"><?php the_title();?></h1>
    </div>  
    </div>
}

<?php
get_footer();
?>