@extends('fronts.layouts.app')
@section('meta')
<title>Free Quote - Cargo Movers Canada</title>

<!-- This site is optimized with the Yoast SEO plugin v12.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Free Quote - Cargo Movers Canada" />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Free Quote - Cargo Movers Canada" />
        
<meta property="og:title" content="Free Quote"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="FREE QUOTE 
REQUEST A NO OBLIGATION       
Quote Request Form 
We aim to respond to all quote requests within a 24 hour period Monday-Friday. However if this isn&#039;t the case, please be patient as we receive a lot of emails every day."/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection
@php
 $userlogin = Auth::User();
@endphp
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Get Free Quote</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Get Free Quote</a></li>
    </ul>
  </div>
</section>
<section class="sec-padding contact-page-content">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>GET FREE QUOTE</span></h2>
      <p>GET FREE QUOTE</p>
    </div>
    <div class="row">
      <div class="col-md-12">

        <form id="msform">
  <fieldset>
    <h2 class="fs-title">Save up to 65% on your move</h2>
    <!-- <h3 class="fs-subtitle"></h3> -->
    <input type="text" name="from_location" placeholder="From Location" style="width: 42%" />
    <input type="text" name="to_location" placeholder="To Location" style="width: 42%" />
    <input type="button" name="next" class="next action-button" value="Next" style="width: 13%" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">I would like to move on…</h2>

    <div class="" id="datepicker">
      
    </div>
    <input type="hidden" name="move_date" id="move_date">
    <input type="button" name="previous" class="previous action-button on-top-place" value="Previous" />
    <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property type</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
    <div>
      <label>
        <input type="radio" name="property_type" value="House"  class="styles-inp property-type-cls ">
        <img src="{{ url('UserImage/house.png') }}" style="width: 200px;">
        <p>House</p>
      </label>

      <label>
        <input type="radio" name="property_type" value="Apartment" class="styles-inp property-type-cls">
        <img src="{{ url('UserImage/apartment.png') }}" style="width: 200px;">
        <p>Apartment</p>
      </label>

      <label>
        <input type="radio" name="property_type" value="Commercial" class="styles-inp property-type-cls">
        <img src="{{ url('UserImage/business-building.png') }}" style="width: 200px;">
        <p>Commercial</p>
      </label>
  </div>
    <input type="button" name="previous" class="previous action-button on-top-place" value="Previous" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property size</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
    <div class="">
         <label>
          <input type="radio" name="propery_size" value="STUDIO" class="styles-inp">
          <div class="property-size property-size-cls"> STUDIO </div>
        </label>
        <label>
          <input type="radio" name="propery_size" value="1 bedroom" class="styles-inp">
          <div class="property-size property-size-cls"> 1 bedroom </div>
        </label>

        <label>
          <input type="radio" name="propery_size" value="2 bedroom" class="styles-inp">
          <div class="property-size property-size-cls"> 2 bedroom </div>
        </label>

    </div>
    <div class="">
        <label>
          <input type="radio" name="propery_size" value="3 bedroom" class="styles-inp">
          <div class="property-size property-size-cls"> 3 bedroom </div>
        </label>
        <label>
          <input type="radio" name="propery_size" value="4 bedroom" class="styles-inp">
          <div class="property-size property-size-cls"> 4 bedroom </div>
        </label>
        <label>
          <input type="radio" name="propery_size" value="5+ bedroom" class="styles-inp">
          <div class="property-size property-size-cls"> 5+ bedroom </div>
        </label>
    </div>
    <input type="button" name="previous" class="previous action-button on-top-place" value="Previous" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Searching for movers in your area…..</h2>
    <!-- <h3 class="fs-subtitle">3 movers</h3> -->
    <div class="">
      <div class="progress" style="position: relative; margin: 100px 0px;">
          <div class="progress-bar progress-bar-striped indeterminate">
          </div>
      </div>
    </div>
    <input type="button" name="previous" class="previous action-button on-top-place" value="Previous" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Your quote is only a click away</h2>
    <h3 class="fs-subtitle">3 movers found!</h3>
      <input type="text" name="name" placeholder="Name" style="width: 28%" />
      <input type="text" name="email" placeholder="Email" style="width: 30%" />
      <input type="text" name="phone" placeholder="Phone" style="width: 30%" />
      <input type="button" name="next" class="next action-button" value="Submit" style="width: 10%" />
    <input type="button" name="previous" class="previous action-button on-top-place" value="Previous" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Your quote is only a click away</h2>
    <div class="">


  </div>
    <input type="button" name="previous" class="previous action-button on-top-place" value="Previous " />
    <input type="submit" name="next" class="next action-button" value="GET FREE QUOTES" style="width: 200px;" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Thank you!</h2>
    <h3 class="fs-subtitle">Your request has been submitted and we look forward to helping you with your move on </h3>
      <div class="fs-subtitle">
        Our professional movers will contact you shortly with your quote.
      </div>
  </fieldset>

</form>
      </div>
      <!-- <div class="col-md-7 col-sm-6 col-xs-12 pull-left">
        <form action="include/sendemail.php" class="contact-form contact-page" novalidate="novalidate">
          <p>
            <input type="text" placeholder="Name" name="name">
          </p>
          <p>
            <input type="text" placeholder="Email" name="email">
          </p>
          <p>
            <input type="text" placeholder="Subject" name="subject">
          </p>
          <p>
            <textarea name="message" placeholder="Message"></textarea>
          </p>
          <button type="submit" class="thm-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
        </form>
        <br>
        <br>
      </div> -->
    </div>
  </div>
</section>
@endsection
@section('style')
<style type="text/css">
  /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
  height: 100%;
  /*Image only BG fallback*/
  
  /*background = gradient + image pattern combo*/
  background: 
    linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}

body {
  font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
  margin: 50px auto;
  text-align: center;
  position: relative;
  height: 500px;
}
#msform fieldset {
  background: white;
  border: 0 none;
  border-radius: 3px;
  /*box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);*/
  padding: 20px 30px;
  box-sizing: border-box;
  width: 80%;
  margin: 0 10%;
  background-color: #0072bc;
  border-radius: 10px;
  
  /*stacking fieldsets above each other*/
  position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
  display: none;
}
/*inputs*/
#msform input, #msform textarea {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2C3E50;
}
/*buttons*/
#msform .action-button {
  width: 100px;
  background: #880b17;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 1px;
  cursor: pointer;
  padding: 15px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
  box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
  text-transform: uppercase;
  color: #FFF;
  margin: 20px 0px;
  font-weight: 600;
}
.fs-subtitle {
  font-weight: normal;
  color: #fff;
  margin-bottom: 20px;

}
/*progressbar*/
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  /*CSS counters to number the steps*/
  counter-reset: step;
}
#progressbar li {
  list-style-type: none;
  color: white;
  text-transform: uppercase;
  width: 33.33%;
  float: left;
  position: relative;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 20px;
  line-height: 20px;
  display: block;
  color: #333;
  background: white;
  border-radius: 3px;
  margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: white;
  position: absolute;
  left: -50%;
  top: 9px;
  z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
  /*connector not needed before the first step*/
  content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
  background: #27AE60;
  color: white;
}
.ui-datepicker-inline{
  display: inline-block !important;
}


#msform .styles-inp[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
#msform .styles-inp[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
#msform .styles-inp[type=radio]:checked + img {
  outline: 2px solid #f00;
}


/* IMAGE STYLES */
#msform .styles-inp[type=radio] + div.property-size {
  cursor: pointer;
}

/* CHECKED STYLES */
#msform .styles-inp[type=radio]:checked + div.property-size {
  outline: 2px solid #f00;
}


.property-size {
    border: 1px solid #eeeeee;
    width: 200px;
    height: 100px;
    background: #eeeeee;
    border-radius: 27px;
    margin: 10px;
    color: #000;
    font-size: 24px;
    padding-top: 33px;
}

.property-size:hover {
    border: 1px solid #880b17;
    width: 200px;
    height: 100px;
    background: #880b17;
    border-radius: 27px;
    margin: 10px;
    color: #fff;
}

.progress-bar.indeterminate {
  position: relative;
  animation: progress-indeterminate 3s linear infinite;
}

@keyframes progress-indeterminate {
   from { left: -25%; width: 25%; }
   to { left: 100%; width: 25%;}
}


.on-top-place{
  position: absolute;
  top: 5px;
  left:5px;
  border-radius: 5px;
}

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('script')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
  $(function(){
    $( "#datepicker" ).datepicker({
      numberOfMonths:2,
      onSelect: function(dateText, inst) {
        $("#move_date").val(dateText);
        var elem = $('#move_date');
         next_func(elem);
      }
    });
  })
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  next_func(this);
});

$(".property-type-cls").click(function(){
  next_func(this);
});

$(".property-size-cls").click(function(){
  next_func(this);
  setTimeout(function(){
    var elem = $('.progress-bar');
    next_func(elem);
  }, 5000);
});


// $('body').on('change', '#move_date', function(e){
//   console.log($(this).val());
// })

function next_func(_this){
  if(animating) return false;
  animating = true;
  
  current_fs = $(_this).closest('fieldset');
  next_fs = $(_this).closest('fieldset').next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //_this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
}

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).closest('fieldset');
  previous_fs = $(this).closest('fieldset').prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

// $(".submit").click(function(){
//   return false;
// })

</script>
@endsection