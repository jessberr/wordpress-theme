<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content= 
        "width=device-width, initial-scale=1.0"> 
   <?php wp_head(); ?>
</head>
<body>
<!-- Header Navigation-->   
   <header class="wrapper">   
     <div class="navigation">
     <nav class="social-media">
        <a href="https://github.com/jessberr" target="_blank"><i class="fa fa-github"></i></a>
        <a href="https://www.linkedin.com/in/jessica-berrett/" target="_blank"><i class="fa fa-linkedin"></i></a>
      </nav>
       <nav class="primary-nav">
          <?php wp_nav_menu(); ?>
       </nav>
     </div>
<!-- Website logo and description--> 
     <div class="site-branding">
        <a id="top" href="/"><img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
        <h2 id="site-subname">Web Developer</h2>
     </div>
     
   </header>
 
 



