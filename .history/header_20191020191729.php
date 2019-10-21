<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
   <?php wp_head(); ?>
</head>
<body>
<!-- Header Navigation Menu with Social Media. Uses Responsive Menu Plugin-->   
   <header class="wrapper">   
     <div class="navigation">
     <nav class="social-media">
        <a href="https://github.com/jessberr" target="_blank"><i class="fa fa-github"></i></a>
        <a href="https://www.linkedin.com/in/jessica-berrett/" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/jesserberr/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.pinterest.com/jberrett2/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
      </nav>
       
     </div>
<!-- Website logo and description--> 
     <div class="site-branding">
        <a id="top" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
        <h2 id="site-subname">Web Developer</h2>
     </div>
<!-- Page banner with title of current page--> 
     <div class="page-banner">
       <div class="white-overlay">
           <h2 id="example-title"><?php the_title(); ?></h2>
       </div>
    </div>
     
   </header>
 
 



