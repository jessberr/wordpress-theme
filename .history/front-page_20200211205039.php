<?php
get_header();
add_action( 'jb_content_area', 'jb_home_page' );
function jb_home_page() {?>

  <div class="container"> 
 <!-- Page banner with title of current page--> 
 <div class="page-banner">
       <div class="white-overlay">
           <h2 id="example-title"><?php the_title(); ?></h2>
       </div>
    </div>   
<!--Pages Section with white-overlay style-->
    <section class="pages">
      <a href="/about">
        <div id="pages-one">
          <div class="white-overlay">
            <h3 id="example-title">ABOUT</h3>
          </div>
         </div>
      </a>
     

      <a href="/portfolio">
        <div id="pages-two">
          <div class="white-overlay">
            <h3 id="example-title">PORTFOLIO</h3>
          </div>
         </div>
      </a>
      <a href="/contact">
        <div id="pages-three">
          <div class="white-overlay">
            <h3 id="example-title">CONTACT</h3>
          </div>
         </div>
      </a>
    </section>

<!-- Mission Statement Section -->
    <section class="mission-statement">
         <h3 id="example-title">I'm passionate about simple, clean, and responsive websites.</h3>
         <h4 id="example-description">It only takes a few seconds to know if you want to stay on a website. Let me help you create a place that is welcoming and easy to navigate. </h4>
         <a href="/contact"><button>Contact</button></a>      
    </section>
  
<!-- Featured Projects Section with Polariod Style-->
    <section id="gray-background">
      <h3 id="example-title" >FEATURED PROJECTS</h3>
      <div  class="polariod">
      <a href="/portfolio/theme">
        <div id="polariod-one">
          <div class="white-overlay">
            <h3 id="example-description">WORDPRESS THEME</h3>
          </div>
        </div>
      </a>
      <a href="/portfolio/responsive-fcc">
        <div id="polariod-two">
          <div class="white-overlay">
            <h3 id="example-description">FCC RESPONSIVE DESIGN</h3>
          </div>
        </div>
      </a>
        <a href="/portfolio/marion-dentistry">
        <div id="polariod-three">
          <div class="white-overlay">
            <h3 id="example-description">MARION DENTISTRY</h3>
          </div>
        </div>
        </a>
       
     </div>
    </section>
    

  </div>
   
   <?php }

do_action( 'jb_content_area' );
get_footer();



