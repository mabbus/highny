<div class="navBar landing">
  <div class="row">
    <div class="navBarLogo landing"></div>
    <div class="col-md-6 pull-right p-0">
      <ul class="nav nav-pills">
	<li><a href="<?php print $GLOBALS['base_path'];?>events">EVENTS</a></li>
	<li class="dropdown">
          <a href="<?php print $GLOBALS['base_path'];?>education" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EDUCATION <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="drop2">
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>education/higher-learning">Interviews <i class="zmdi zmdi-camera-mic pull-right"></i></a>
            </li>
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>education/higher-learning">Recaps <i class="zmdi zmdi-tv-play pull-right"></i></a>
            </li>
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>education/higher-learning">Articles <i class="zmdi zmdi-view-headline pull-right"></i></a>
            </li>
          </ul>
        </li>
	<li><a href="<?php print $GLOBALS['base_path'];?>community">COMMUNITY</a></li>
	<li><a href="<?php print $GLOBALS['base_path'];?>blog">BLOG</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="navBarBoxShadow col-md-12 landing"></div>
<div class="body">
  <div class="col-md-12 anchor land">
     <video autoplay poster="" loop id="bgvid" preload="auto">
     <source src="<?php print $GLOBALS['base_path'];?>sites/default/files/Birds_7.mp4" type="video/mp4">
     <source src="movie.webm" type="video/webm">
     </video>
     <div class="landingLogo"></div>
  </div>
  <div class="col-md-12 anchor about">
     <div class="row col-md-8">
       <div class="row" style="margin-top: 10%;">
         <img src="<?php print $GLOBALS['base_path'];?>sites/default/files/highny_logoapple_01.png"/><h3>About Us</h3>
       </div>
       <div class="row">
         <p>High NY is a community organization dedicated to changing the way society uses Cannabis. We exist to elevate the city, the culture, and the world. Our monthly meetups are designed to inspire a new class of leaders and entrepreneurs, build cannabis awareness, and engage citizens in the political processes necessary to change the law.

     This isn’t about getting high or getting rich (not that there’s anything wrong with either). This is about solving substantial problems of social injustice, providing access to medicine, and legitimizing an industry that has been unfairly stigmatized for far too long.

     We have the responsibility to turn a new leaf in society and establish Cannabis as one of the most important industries in the world. We must lead by example and create socially responsible, environmentally sustainable, equal opportunity businesses. Let’s set a new standard for global business practices.

High NY is about taking massive action and having High Impact.</p>
       </div>
     </div>
     <div class="row col-md-6">
     <h4 class="pull-left">SUPPORT OUR MOVEMENT</h4><a href="http://www.meetup.com/HighNY/" target="_blank"><img class="pull-left" src="<?php print $GLOBALS['base_path'];?>sites/default/files/meetup.png" width="150"/></a><h4 class="pull-left">JOIN OUR MEETUP</h4>
     </div>
  </div>

  <div class="col-md-12 anchor roll">
     <div class="row">
       <h3>HOW WE ROLL</h3>
     </div>
     <div class="row col-md-10">
       <div class="row col-md-10">
         <div class="col-md-4">
           <h4>HIGH TECH <i class="zmdi zmdi-code-smartphone"></i></h4>
     <p>HIGH NY WORKS TO BRIDGE THE GAP BETWEEN NYC’S VIBRANT TECH COMMUNITY AND CANNABIS COMMUNITY.</p>
         </div>
         <div class="col-md-4">
         <h4>HIGH ART <i class="zmdi zmdi-edit"></i></h4>
     <p>The Cannabis Community champions and celebrates creativity. Its members are innovators and doers who will solve the largest issues facing our society. In addition to networking and education, our events feature the works of NYC based artists who support our movement.

     If you are interested in showcasing your art, collaborating with us or being connected with a community of artists who support the cause sign up below.</p>

     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Share your art</button>
         </div>
         <div class="col-md-4">
           <h4>HIGH IMPACT <i class="zmdi zmdi-flash"></i></h4>
     <p>CANNABIS WILL BE A KEY ISSUE IN 2016 ELECTIONS.</p>
         </div>
       </div>
     </div>

  </div>

  <div class="col-md-12 anchor signup">
     <div class="row">
     <div>
     <h3>Stay tuned</h3>
     <div class="col-md-12">
     <?php 
     $block = block_load('mailing_list', '1');
     $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
     print $output;
     ?>
     </div>
     </div>
     </div>
  </div>

  <div class="col-md-12 anchor partners">
    <div class="row">
         <div>
         <img src="http://highny.com/wp-content/uploads/2015/02/high-times.png" alt="High Times">
         <img src="http://highny.com/wp-content/uploads/2015/02/vice.png" alt="Vice">
         <img src="http://highny.com/wp-content/uploads/2015/02/leafly.jpg" alt="Leafly">
         <img src="http://highny.com/wp-content/uploads/2015/02/celeb-stoner-e1424649588920.jpg" alt="Celeb Stoner">
         <img src="http://highny.com/wp-content/uploads/2015/02/web-design-hosting-business-development.jpg" alt="Web Source Group">
         <img src="http://highny.com/wp-content/uploads/2015/02/nyi-langone-medical-center-e1424033588391.gif" alt="NYU Langone Medical Center">
         <img src="http://highny.com/wp-content/uploads/2015/02/rodawg.png" alt="Rodawg">
         <img src="http://highny.com/wp-content/uploads/2015/02/cannabis-hemp-association.png" alt="Cannabis &amp; Hemp Association">
         <img src="http://highny.com/wp-content/uploads/2015/02/potbotics.png" alt="Potbotics">
         <img src="http://highny.com/wp-content/uploads/2015/02/nyc-cannabis-parade.png" alt="NYC Cannabis Parade">
         <img src="http://highny.com/wp-content/uploads/2015/02/libertarian-party-e1424649487250.png" alt="Libertarian Party">
         <img src="http://highny.com/wp-content/uploads/2015/02/new-york-cannibis-alliance.jpg" alt="New York Cannabis Alliance">
         <img  class="x-img x-img-none none"  src="http://highny.com/wp-content/uploads/2015/02/mj.jpg" >
         <img src="http://highny.com/wp-content/uploads/2015/02/law-enforcement-against-prohibition.jpg" alt="Law Enforcement Against Prohibition">
         <img src="http://highny.com/wp-content/uploads/2015/02/trim-station-e1424649552187.png" alt="Trim Station">
         <img src="http://highny.com/wp-content/uploads/2015/02/logobeach.png" alt="The Wo/Men's Alliance for Medical Marijuana">
         <img  class="x-img x-img-none none"  src="http://highny.com/wp-content/uploads/2015/02/wm.png" >
         <img src="http://highny.com/wp-content/uploads/2015/02/center-for-optimal-living.jpg" alt="Center for Optimal Living">
         </div>
    </div>
  </div>
</div>

<div class="col-md-12 footer">
  Footer
</div>

<script>
     jQuery(document).ready(function () {

         var minHeight = 600;

         var windowHeight = function () {
             return jQuery(window).height() > minHeight ? jQuery(window).height() : minHeight;
         };

         var setNavBar = function () {
             if(jQuery(document).scrollTop() >= (windowHeight() * .5)) {
                 jQuery('.navBar').removeClass('landing');
                 jQuery('.navBarBoxShadow').removeClass('landing');
                 jQuery('.navBarLogo').removeClass('landing');
             } else {
                 if(!jQuery('.navBar').hasClass('landing')) {
                     jQuery('.navBar').addClass('landing');
                     jQuery('.navBarBoxShadow').addClass('landing');
                     jQuery('.navBarLogo').addClass('landing');
                 }
             }
         };

         var resize = function () {
             jQuery('.anchor').each(function (k,v) {
                 jQuery(v).height(windowHeight());
                 //jQuery('#bgvid').height(windowHeight());
             });
         };

         var setVideoParallax = function () {
             if(jQuery(window).scrollTop() <= windowHeight()){
                 jQuery('#bgvid').position.top = jQuery('#bgvid').position.top + (windowHeight() * .001);
             }
         }

         jQuery(window).resize(function(e) {
             if(windowHeight() > 600) {
                 resize();
             }
         });

         jQuery(window).scroll(function(e,t) {
             setNavBar();
             setVideoParallax();
         });

         resize();
         setNavBar();

         jQuery('.signUpBtn').click(function () {
             $('#modal').modal()
         });
     });
</script>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>