<div class="navBar landing">
  <div class="row">
    <div class="navBarLogo landing"></div>
    <div class="col-md-6 pull-right p-0">
      <ul class="nav nav-pills">
	<li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="drop2">
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>events/upcoming">Upcoming <i class="zmdi zmdi-calendar-note pull-right"></i></a>
            </li>
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>events/recaps">Recaps <i class="zmdi zmdi-tv-play pull-right"></i></a>
            </li>
          </ul>
        </li>
	<li class="dropdown">
          <a href="<?php print $GLOBALS['base_path'];?>education" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EDUCATION <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="drop2">
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>education/interviews">Interviews <i class="zmdi zmdi-camera-mic pull-right"></i></a>
            </li>
            <li>
              <a href="<?php print $GLOBALS['base_path'];?>education/articles">Articles <i class="zmdi zmdi-view-headline pull-right"></i></a>
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
   <source src="<?php print $GLOBALS['base_path'];?>sites/default/files/movie.mp4" type="video/mp4"> 
     <source src="<?php print $GLOBALS['base_path'];?>sites/default/files/movie.webm" type="video/webm">
     </video>
     <div class="landingLogo"></div>
  </div>
  <div class="col-md-12 anchor about">
     <div class="row col-md-8">
       <div class="row" style="margin-top: 10%;">
         <img class="logo_apple" src="<?php print $GLOBALS['base_path'];?>sites/default/files/highny_logoapple_01.png"/><div class="pull-right col-md-9">
	   <h3>HIGH NY IS A COMMUNITY</h3>
	   <p>Dicated to improving the way society interacts with Cannabis. <a href="#signup">Join our mailing list</a></p>
	 </div>
       </div>
     </div>
     <div class="row col-md-8 text">
     <div class="col-md-5">We host New York's largest Cannabis Meetup</div><div class="col-md-2"><a href="http://www.meetup.com/HighNY/" target="_blank"><img class="pull-left meetup" src="<?php print $GLOBALS['base_path'];?>sites/default/files/meetup.png" width="150"/></a></div><div class="col-md-5">Support the momement by joining the Meetup!</div>
     </div>
  </div>

  <div class="col-md-12 anchor roll">
     <div class="row">
       <h3>Cannabis Stats</h3>
     </div>
     <div class="row col-md-10">
       <div class="col-md-6">
         <div class="stats">
         NEW YORKERS WHO SUPPORT MEDICAL USE
         <div class="statsContainer 88" stats="88"><div class="bar"></div></div>
         </div>
         <div class="stats">
         NYC POSSESSION ARRESTS THAT ARE OF BLACKS & HISPANICS
         <div stats="86" class="statsContainer 86"><div class="bar"></div></div>
         </div>
         <div class="stats">
         INCREASE IN NYC MARIJUANA ARRESTS: 1,000% IN THE LAST 25 YEARS
         <div stats="1000" class="statsContainer 1000" ><div class="bar"></div></div>
         </div>
       </div>
       <div class="col-md-6">
         <div class="stats">
         NEW YORKERS WHO SUPPORT FULL LEGALIZATION OF CANNABIS
         <div stats="57" class="statsContainer 57" ><div class="bar"></div></div>
         </div>
         <div class="stats">
         INCREASE IN DEATHS FROM ACCIDENTAL OVERDOSE ON PRESCRIPTION DRUG: 360% IN U.S. SINCE 1999
         <div stats="360" class="statsContainer 360"><div class="bar"></div></div>
         </div>
       </div>
     </div>
  </div>

  <div class="col-md-12 anchor signup">
     <a name="signup"></a>
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

  </div>
</div>

<div class="col-md-12 footer">
    <div class="row">
     <?php 
     $block = block_load('block', '2');
     $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
     print $output;
     ?>
    </div>  
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

         var statsLoaded = false;
         var statsLoader = function () {
             var pos = (windowHeight()) + (windowHeight() / 2) ;

             if(jQuery(window).scrollTop() >= pos && !statsLoaded) {
                 statsLoaded = true;
                 var valObj = jQuery('.stats').find('.statsContainer');

                 valObj.each(function ( ){
                   var val = jQuery(this).attr('class').split(' ')[1];
                   jQuery(this).find('.bar').width(val+'%');
                   jQuery(this).find('.bar').html(val + '%');
                 });
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
             statsLoader();
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
