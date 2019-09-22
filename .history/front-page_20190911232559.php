<?php
get_header();
add_action( 'jb_content_area', 'jb_home_page' );
function jb_home_page() {?>

  <div class="container"> 
    <section class="slideshow">
      <div class="white-overlay">
        <h3 id="example-title">HOW TO <br>CREATE A THEME</h3>
        <h4 id="example-description">BUILD FROM SCRATCH OR CUSTOMIZE WHAT'S ANNOYING YOU</h4>
        <button>Read now</button>
      </div>
    </section>
    <section class="pages">
      <div id="pages-one">
        <div class="white-overlay">
          <a href="#"><h3 id="example-title">ABOUT</h3></a>
        </div>
      </div>
      <div id="pages-two">
        <div class="white-overlay">
          <a href="#"><h3 id="example-title">PORTFOLIO</h3></a>
        </div>
      </div>
      <div id="pages-three">
        <div class="white-overlay">
          <a href=""><h3 id="example-title">CONTACT</h3></a>
        </div>
      </div>
    </section>
    <section class="mission-statement">
         <h3 id="example-title">I'm passionate about simple, clean, and responsive websites.</h3>
         <h4 id="example-description">Ut dignissim diam urna, at tempus tortor vehicula hendrerit. Nam urna felis, ultrices non mi molestie, sollicitudin porttitor justo. Aenean faucibus mauris lorem, vel lobortis turpis scelerisque at. Nullam ac dapibus nisi. Donec placerat mattis justo a eleifend. Vestibulum ac lacus bibendum id, rhoncus lorem commodo, blandit nunc. Etiam sapien nibh, lobortis in sagittis elementum. Nulla lobortis ac dolor lobortis sodales. Nullam ac dapibus nisi. Donec placerat mattis justo a eleifend.</h4>
         <button>Read More</button>      
    </section>
    <section id="gray-background">
      <h3 id="example-title" >LATEST FROM THE BLOG</h3>
      <div  class="polariod">
      <div id="polariod-one">
        <div class="white-overlay">
          <a href="#"><h3 id="example-description">ABOUT</h3></a>
        </div>
      </div>
      <div id="polariod-two">
        <div class="white-overlay">
          <a href="#"><h3 id="example-description">PORTFOLIO</h3></a>
        </div>
      </div>
      <div id="polariod-three">
        <div class="white-overlay">
          <a href=""><h3 id="example-description">CONTACT</h3></a>
        </div>
      </div>
      </div>
      
    </section>
    

  </div>
   
   <?php }

do_action( 'jb_content_area' );
get_footer();



