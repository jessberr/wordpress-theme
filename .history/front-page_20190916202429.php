<?php
get_header();
add_action( 'jb_content_area', 'jb_home_page' );
function jb_home_page() {?>

  <div class="container"> 
    <section class="slideshow">
      <div class="white-overlay">
        <h3 id="example-title">LIKE THIS LAYOUT?</h3>
        <h4 id="example-description">Checkout my process of how I made my own website and how I can make or customize yours!</h4>
        <button>Read now</button>
      </div>
    </section>
    <section class="pages">
      <div id="pages-one">
        <div class="white-overlay">
          <a href="/about"><h3 id="example-title">ABOUT</h3></a>
        </div>
      </div>
      <div id="pages-two">
        <div class="white-overlay">
          <a href="/portfolio"><h3 id="example-title">PORTFOLIO</h3></a>
        </div>
      </div>
      <div id="pages-three">
        <div class="white-overlay">
          <a href="/contact"><h3 id="example-title">CONTACT</h3></a>
        </div>
      </div>
    </section>
    <section class="mission-statement">
         <h3 id="example-title">I'm passionate about simple, clean, and responsive websites.</h3>
         <h4 id="example-description">Ut dignissim diam urna, at tempus tortor vehicula hendrerit. Nam urna felis, ultrices non mi molestie, sollicitudin porttitor justo. Aenean faucibus mauris lorem, vel lobortis turpis scelerisque at. Nullam ac dapibus nisi. Donec placerat mattis justo a eleifend. Vestibulum ac lacus bibendum id, rhoncus lorem commodo, blandit nunc. Etiam sapien nibh, lobortis in sagittis elementum. Nulla lobortis ac dolor lobortis sodales. Nullam ac dapibus nisi. Donec placerat mattis justo a eleifend.</h4>
         <button>Read More</button>      
    </section>
    <section id="gray-background">
      <h3 id="example-title" >LATEST PROJECTS</h3>
      <div  class="polariod">
      <div id="polariod-one">
        <div class="white-overlay">
          <a href="#"><h3 id="example-description">WORDPRESS THEME</h3></a>
        </div>
      </div>
      <div id="polariod-two">
        <div class="white-overlay">
          <a href="#"><h3 id="example-description">DOG ENCYCLOPEDIA</h3></a>
        </div>
      </div>
      <div id="polariod-three">
        <div class="white-overlay">
          <a href=""><h3 id="example-description">POMODORO TIMER</h3></a>
        </div>
      </div>
      </div>
      
    </section>
    

  </div>
   
   <?php }

do_action( 'jb_content_area' );
get_footer();



