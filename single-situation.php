

<?php get_header(); ?>
    

<section class="panel" id="panel-name-1">
   <div class="sidebar">
      <h1 class="sidebar-template-title">Survie dans la </br> 
         <strong><?php the_title(); ?></strong>
      </h1>
   </div>
   <div class="contain-right">
   <div class="template-top">
      <h1 class="title-template-right-top"> HELLO </h1>
      <p><?php the_field('title-content'); ?></p>
      <h1 class="title-template-right-top-1">Principaux Dangers</h1>

      <?php if( have_rows('danger') ): ?>
       <?php while ( have_rows('danger') ) : the_row(); ?>
      <div class="template-situation">
         <h1><?php the_sub_field('title-danger'); ?></h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         </p>
      </div>
	<?php endwhile; ?>
<?php endif; ?>
   </div>
</section>




<section class="panel" id="panel-name-2">
   <div class="title-template">EGARE</div>
   <div class="float-box">
      <h1 class="title-template-1">A PROPOS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
   </div>
</section>
<section class="panel" id="panel-name-3">
   <div class="title-template">ORAGE</div>
   <div class="float-box">
      <h1 class="title-template-1">A PROPOS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
   </div>
</section>
<section class="panel" id="panel-name-4">
   <div class="title-template">Aniaml</div>
   <div class="float-box">
      <h1 class="title-template-1">A PROPOS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
   </div>
</section>
  
    <?php get_footer(); ?>
    
    
    
  </body>
</html>


