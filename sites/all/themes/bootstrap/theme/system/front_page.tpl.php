<div class="navBar landing">
  <div class="row">
    <div class="navBarLogo"></div>
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
<div class="body">
  <div class="col-md-12 anchor land">
    <div class="parallax">
      <div class="landingVideoOverlay"></div>
      <video autoplay poster="" loop id="bgvid" preload="auto">
	<source src="<?php print $GLOBALS['base_path'];?>sites/default/files/movie.mp4" type="video/mp4"> 
	  <source src="<?php print $GLOBALS['base_path'];?>sites/default/files/movie.webm" type="video/webm">
      </video>
    </div>
  </div>
  <div class="col-md-12 press">
     <h2>Featured:</h2> <div style="height: 10px; width: 10px; background: red;"></div>
  </div>
  <div class="col-md-12 anchor about">
    <div class="autoHeight">
      <div class="row">
	<div class="row community">
          <div class="row">
	    <p><span class="highny">High NY</span> is a community dedicated to improving the way society interacts with Cannabis.</p>
	  </div>
          <div class="row">
            <img class="logo_apple" src="<?php print $GLOBALS['base_path'];?>sites/default/files/highny_logoapple_01.png"/>
          </div>
	</div>
      </div>
      <div class="row col-md-8 text">
	<p>Join New York's largest Cannabis Meetup <a href="http://www.meetup.com/HighNY/join" target="_blank"><img class="meetup" src="<?php print $GLOBALS['base_path'];?>sites/default/files/meetup.png" width="100"/></a>
      </div>
      <div class="row col-md-12">
        <div class="row events">
         <div class="col-md-4"><div class="event1"></div></div>
         <div class="col-md-4"><div class="event2"></div></div>
         <div class="col-md-4"><div class="event3"></div></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 anchor roll">
    <div class="autoHeight">
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
  </div>

  <div class="col-md-12 anchor signup">
    <div class="autoHeight">
      <a name="signup"></a>
      <div class="row">
	<div>
	  <h3>Be our bud!</h3>
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

         var windowWidth = function () {
             return jQuery(window).width();
         };

         function numberWithCommas(x) {
             return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
         }

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
                 var div = jQuery(v).find('.autoHeight');
                 if(div.height()) {
                   var marginTop = (windowHeight() - div.height()) / 2;
                   div.css({
                       'margin-top': marginTop
                   });
                 } 
             });
         };

         var scaleLogo = function () {
             var pos = jQuery(window).scrollTop();

             /* middle out 
             if(pos < windowHeight()) {
                 var xDistance = jQuery(window).width();
                 var limit = windowHeight() + (windowHeight()*.2);
                 var step = 1 - (pos / limit);
                 var marginLeft = (jQuery(window).width() - jQuery('.navBarLogo').width()*step) / 2;
                 var marginTop = (jQuery('.navBarLogo').height()*(1 - step)) + (jQuery('navbarLogo').height()/2) ;
                 var top = (windowHeight() / 2) - (jQuery('.navBarLogo').height()/2);

                 jQuery('.navBarLogo').css({
                        '-webkit-transform' : 'scale(' + step + ')',
                        '-moz-transform'    : 'scale(' + step + ')',
                        '-ms-transform'     : 'scale(' + step + ')',
                        '-o-transform'      : 'scale(' + step + ')',
                        'transform'         : 'scale(' + step + ')',
                        'margin-left'       :  '-' + marginLeft + 'px',
                        'margin-top'        :  '-' + marginTop + 'px',
                        'top'               :  top + 'px'
                 });
             }

		  */

		      /*
             // out to middle
             if(pos < windowHeight()) {
		 var maxWidthScale = (windowWidth()/250);
                 var step = maxWidthScale/windowHeight();
		 var scale = maxWidthScale - step*pos;
                 var z = scale > 1 ? scale : 1;                 
                 var marginTop = windowHeight()/2 - jQuery('.navBarLogo').height()/2  - pos/2;
                 var x = marginTop > 20 ? marginTop : 40;
                 var marginLeft = ((jQuery('.navBarLogo').width()+1)/2) * maxWidthScale - (pos+100);
                 var y = marginLeft > 20 ? marginLeft : 40;
                 console.log(y);
		 jQuery('.navBarLogo').css({
                        '-webkit-transform' : 'scale(' + z + ')',
                        '-moz-transform'    : 'scale(' + z + ')',
                        '-ms-transform'     : 'scale(' + z + ')',
                        '-o-transform'      : 'scale(' + z + ')',
                        'transform'         : 'scale(' + z + ')',
		        'top'               : x + 'px',
                        'left'              : y + 'px'
		 });
             }

             */

             if(pos< windowHeight()) {
 		 var maxWidthScale = (windowWidth());
                 var wStep = maxWidthScale / windowHeight();
		 var hStep = maxWidthScale / windowWidth();
                 var height = windowHeight() - pos*hStep + 20;
		 var h = height > 32 ? height : 32;
      
                 var width = windowWidth() - pos*wStep + 20;
                 var w = width > 250 ? width : 250;
                 jQuery('.navBarLogo').css({
                      'width': w + 'px',
		      'height': h + 'px'
                 });
             } else {
                 jQuery('.navBarLogo').css({
                      'width' : '250px',
                      'height': '32px'
                 });
             } 
         }

         var setParallax = function () {
             if(jQuery(window).scrollTop() <= windowHeight()){
                 jQuery('.parallax').css({
                        'transform'   :  'translateY(' + jQuery(window).scrollTop() + 'px)'
                 });
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
                   jQuery(this).find('.bar').html(numberWithCommas(val) + '%');
                 });
             }
         }

         jQuery(window).resize(function(e) {
             scaleLogo();
             if(windowHeight() > 600) {
                 resize();
             }
         });

         jQuery(window).scroll(function(e,t) {
             scaleLogo();
             //setNavBar();
             statsLoader();
             //setParallax();
         });
         scaleLogo();
         resize();
         //setNavBar();

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
