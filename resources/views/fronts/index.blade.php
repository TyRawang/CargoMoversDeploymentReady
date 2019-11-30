@extends('fronts.layouts.app')


@section('meta')
<title>Cargo Movers Residential and Commercial Moving Company in Canada</title>
<meta name="description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices."/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="canonical" href="{{ \Request::fullUrl() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Cargo Movers Residential and Commercial Moving Company in Canada" />
<meta property="og:description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Cargo Movers Canada one of the best professional and reliable packing, moving and storage company. we provides all services at affordable prices." />
<meta name="twitter:title" content="Cargo Movers Residential and Commercial Moving Company in Canada" />
<meta property="og:title" content="Cargo Movers Canada Home"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ \Request::fullUrl() }}"/>
<meta property="og:site_name" content="Cargo Movers Canada "/>
<meta property="og:description" content="WE MAKE IT SIMPLE 
PROFESSIONAL SERVICE WITH QUALITY AND CUSTOMER SATISFACTION    GET A FREE QUOTE ONLINE NOW!    
Residential &amp; Commercial Moving Company 
We at Cargo Movers help you move your home from one place to the other by taking charge of"/>
<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection


@php
$userlogin = Auth::User();
$menuquery = App\Category::where('isActive',1)->get();
$homecategory  = App\Category::Orderby('order_by_cat','ASC')->where('p_id','0')->where('top','0')->get();
$homeservices  = App\Category::Orderby('order_by_cat','ASC')->where('p_id','0')->where('top','1')->get();
$homesubcategory = App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=',0)->where('top','1')->get();
@endphp
@section('content')
<section class="nbs-main">
  <div class="mainwraperab">
    <div class="container">

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
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property type</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
    <div>
      <label>
        <input type="radio" name="test" value="small" checked class="styles-inp">
        <img src="{{ url('UserImage/house.png') }}" style="width: 200px;">
        <p>House</p>
      </label>

      <label>
        <input type="radio" name="test" value="big" class="styles-inp">
        <img src="{{ url('UserImage/apartment.png') }}" style="width: 200px;">
        <p>Apartment</p>
      </label>

      <label>
        <input type="radio" name="test" value="big" class="styles-inp">
        <img src="{{ url('UserImage/business-building.png') }}" style="width: 200px;">
        <p>Commercial</p>
      </label>
  </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Select property size</h2>
    <!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
    <div class="">
         <label>
          <input type="radio" name="test" value="big" class="styles-inp">
          <div class="property-size"> STUDIO </div>
        </label>
        <label>
          <input type="radio" name="test" value="big" class="styles-inp">
          <div class="property-size"> 1 bedroom </div>
        </label>

        <label>
          <input type="radio" name="test" value="big" class="styles-inp">
          <div class="property-size"> 2 bedroom </div>
        </label>

    </div>
    <div class="">
        <label>
          <input type="radio" name="test" value="big" class="styles-inp">
          <div class="property-size"> 3 bedroom </div>
        </label>
        <label>
          <input type="radio" name="test" value="big" class="styles-inp">
          <div class="property-size"> 4 bedroom </div>
        </label>
        <label>
          <input type="radio" name="test" value="big" class="styles-inp">
          <div class="property-size"> 5+ bedroom </div>
        </label>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
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
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Your quote is only a click away</h2>
    <h3 class="fs-subtitle">3 movers found!</h3>
      <input type="text" name="name" placeholder="Name" style="width: 32.33%" />
      <input type="text" name="email" placeholder="Email" style="width: 33.33%" />
      <input type="text" name="phone" placeholder="Phone" style="width: 33.33%" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Your quote is only a click away</h2>
    <div class="">

      <label class="container">One
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>

        <label class="container">Two
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>

        <label class="container">Three
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>

        <label class="container">Four
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>

  </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Thank you!</h2>
    <h3 class="fs-subtitle">Your request has been submitted and we look forward to helping you with your move on </h3>
      <div class="fs-subtitle">
        Our professional movers will contact you shortly with your quote.
      </div>
  </fieldset>

</form>
      <!-- <div class="mainwidth">
        <h2>Save up to 65% on your move </h2>
        <div class="irds clearfix">
          <div class="hds-mn">
            <h5>Quick Contact</h5>
          </div>
          <div class="irdsinner clearfix">
            <div class="location-info-bx">
              <div class="clearfix">
                <div class="col-md-6" style="padding: 0; margin: 0;">
                  <div class="lkmn">
                    <label>Moving From</label>
                    <input type="text" name="from_location" id="from_location" class="form-control hgh" placeholder="City, Province">

                    <input type="hidden" name="from_venue_city" id="from_venue_city">
                    <input type="hidden" name="from_venue_postal_code" id="from_venue_postal_code" >
                    <input type="hidden" name="from_venue_state" id="from_venue_state">
                    <input type="hidden" name="from_venue_country" id="from_venue_country" >
                    <input type="hidden" name="from_geo_lat" id="from_geo_lat" >
                    <input type="hidden" name="from_geo_lng" id="from_geo_lng">



                  </div>
                </div>
                <div class="col-md-6" style="padding: 0; margin: 0;">
                  <div class="lkmn">
                    <label>Moving To</label>
                    <input type="email" name="to_location" id="to_location" class="form-control hgh" placeholder="City, Province">

                  <input type="hidden" name="to_venue_city" id="to_venue_city">
                  <input type="hidden" name="to_venue_postal_code" id="to_venue_postal_code" >
                  <input type="hidden" name="to_venue_state" id="to_venue_state">
                  <input type="hidden" name="to_venue_country" id="to_venue_country" >
                  <input type="hidden" name="to_geo_lat" id="to_geo_lat" >
                  <input type="hidden" name="to_geo_lng" id="to_geo_lng">



                  </div>
                </div>
              </div>
              <div class="lkmn subnm">
               <br>
               <label>&nbsp;</label>
                <button type="Button" class="btn jkl location-next-btn">Next</button>
              </div>
            </div>
            <div class="user-info-bx" style="display: none;">
              <div class="clearfix">
                <div class="col-md-3" style="padding: 0; margin: 0;">
                  <div class="lkmn">
                    <input type="email" class="form-control hgh" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-3" style="padding: 0; margin: 0;">
                  <div class="lkmn">
                    <input type="email" class="form-control hgh" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-3" style="padding: 0; margin: 0;">
                  <div class="lkmn">
                    <input type="email" class="form-control hgh" placeholder="Mobile">
                  </div>
                </div>
                <div class="col-md-3" style="padding: 0; margin: 0;">
                  <div class="lkmn">
                    <input type="email" class="form-control hgh" placeholder="Message">
                  </div>
                </div>
              </div>
              <div class="lkmn subnm">
                <button type="submit" class="btn jkl">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<section class="about-info-box sec-padding">
  <div class="thm-container">
    <div class="row">
      <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
        <div class="img-cap-effect">
          <div class="img-box"> <img src="http://demo.edtech.in/cargomoverscanada/uploads/cms/18352.jpg" alt="About Us"/>
            <div class="img-caption">
              <div class="box-holder"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="sec-title ">
          <h2><span>About Us</span></h2>
          <div class="mytextes">
            <p>Cargo Movers Canada started as a local business and now we are growing as one of the leading moving companies in Calgary. Our mission is to provide our services with professionalism, attention to each and every specific detail, and concern for the safety of our customer’s properties and belongings.</p>
           <!--  <ul>
              <li>Deliver Environmentally Responsible Client Services</li>
              <li>Provide Employees with an Attractive Working Environment</li>
              <li>Be an Active Community Partner</li>
              <li>Maintain High Ethical Standards</li>
              <li>Drive Continuous Improvement</li>
            </ul> -->
          </div>
          <a href="#" class="thm-btn">view our services <i class="fa fa-arrow-right"></i></a> </div>
      </div>
    </div>
  </div>
</section>
@foreach($homeservices as $value)
<section class="welcome-services home-one">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span> {{ $value->category_name }}</span></h2>
      <p> {{ $value->category_name }}</p>
    </div>
    <div class="row"> 

      @foreach($homesubcategory as $v)
      @if($value->id == $v->p_id)
      <div class="col-md-6">
        <div class="welcome-single-services">
          <div class="img-box"><a href="{{ route('l',['list'=>$value->slug,'catlist'=>$v->slug])}}"><img src="{{ url($v->image) }}" alt=""></a> </div>
          <div class="text-box">
            <div class="content"> <a href="{{ route('l',['list'=>$value->slug,'catlist'=>$v->slug])}}">
              <h3>{{ $v->category_name }}</h3>
              </a>
              <p>{{ $v->shortdescription }}</p>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach </div>
  </div>
</section>
@endforeach
<section class="call-to-action">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-7 hidden-xs hidden-sm">
        <div class="right-full-image"> <img src="{{ asset('assets/front/images/call-to-action/1.png')}}" alt="Awesome Image"/> </div>
      </div>
      <div class="col-md-5">
        <div class="call-to-action-text">
          <h3>We Remove The Headache From Moving <br>
            Move With Ease</h3>
          <p>Our professional services are designed to take care of your goods right from the picking from your home to the next destination where you want to unload the goods. We have a solution for all your residential & commercial needs.</p>
          <a href="#" class="thm-btn">View services <i class="fa fa-arrow-circle-right"></i></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="faq-section sec-padding">
  <div class="thm-container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="sec-title">
          <h2><span>some of our core values</span></h2>
        </div>
        <div class="accrodion-grp" data-grp-name="faq-accrodion">
          <div class="accrodion active">
            <div class="accrodion-title">
              <h4>Our Mission</h4>
            </div>
            <div class="accrodion-content">
              <div class="img-caption">
                <div class="img-box"> <img src="{{ asset('assets/front/images/accrodion/1.jpg')}}" alt="Awesome Image"/> </div>
                <div class="content-box">
                  <h4>Our Delivery is all our our country</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehen- derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <ul>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accrodion ">
            <div class="accrodion-title">
              <h4>Our Vision</h4>
            </div>
            <div class="accrodion-content">
              <div class="img-caption">
                <div class="img-box"> <img src="{{ asset('assets/front/images/accrodion/1.jpg')}}" alt="Awesome Image"/> </div>
                <div class="content-box">
                  <h4>Our Delivery is all our our country</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehen- derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <ul>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accrodion">
            <div class="accrodion-title">
              <h4>Our About</h4>
            </div>
            <div class="accrodion-content">
              <div class="img-caption">
                <div class="img-box"> <img src="{{ asset('assets/front/images/accrodion/1.jpg')}}" alt="Awesome Image"/> </div>
                <div class="content-box">
                  <h4>Our Delivery is all our our country</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehen- derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <ul>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                    <li><i class="fa fa-long-arrow-right"></i> Adipis civelit</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!--  <div class="col-lg-4 col-md-4">
        <div class="sec-title">
          <h2><span>Our locations</span></h2>
        </div>
        <div class="view-location"> <img src="{{ asset('assets/front/images/view-location.png')}}" alt="Awesome Image"/>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non numquam eius modi.</p>
          <a href="#">view our locations</a> </div>
      </div> -->
    </div>
  </div>
</section>
<section class="request-qoute has-overlay">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-6">
        <div class="sec-padding has-overlay">
          <div class="sec-title">
            <h2><span>Testimonials</span></h2>
          </div>
          <div class="testimonial-box with-carousel">
            <div class="owl-carousel owl-theme">
              @foreach($home_testimonial as $testi)
              <div class="item">
                <div class="content-box">
                  <div class="top">
                    <div class="qoute-box"> " </div>
                    <div class="title">
                      <h3></h3>
                    </div>
                  </div>
                  <div class="content">
                    <p>{!! $testi->description !!}</p>
                    <span> {{ $testi->title }}</span> <img src="{{ url('UserImage/default_profile.png') }}" alt=""> </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="sec-padding">
          <div class="sec-title">
            <h2><span>request a quote</span></h2>
          </div>
          <form action="http://designarc.biz/demos/logic-cargo/includes/sendemail.php" class="contact-form">
            <div class="form-grp full">
              <input type="text" name="name" placeholder="Name">
            </div>
            <div class="form-grp full">
              <input type="text" name="email" placeholder="Email*">
            </div>
            <!-- <div class="form-grp"> -->
              <!-- <div class="form-grp half">
                <select class="select-menu" name="selectMenu">
                  <option value="default">Choose Something...</option>
                  <option value="Ware Housing">Ware Housing</option>
                  <option value="Ware Housing">Ware Housing</option>
                  <option value="Ware Housing">Ware Housing</option>
                  <option value="Ware Housing">Ware Housing</option>
                  <option value="Ware Housing">Ware Housing</option>
                </select>
              </div> -->
              <div class="form-grp full">
                <input type="text" name="subject" placeholder="Subject">
              </div>
            <!-- </div> -->
            <div class="form-grp">
              <textarea name="message" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="thm-btn">Submit Now <i class="fa fa-arrow-circle-right"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="team-section sec-padding">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>our team members</span></h2>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member img-cap-effect">
          <div class="img-box"> <img src="http://demo.edtech.in/cargomoverscanada/uploads/image/79881.jpg" alt="Awesome Image"/>
            <div class="img-caption">
              <div class="box-holder">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="name-box">
              <h3>Jenefir White</h3>
              <span> Supervisor </span> </div>
            <p>Lorem ipsum dolor sit ametetd consectetur adipiscing elit.</p>
          </div>
          <a href="#" class="readmore">CONTACT ME <i class="fa fa-long-arrow-right"></i></a> </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member img-cap-effect">
          <div class="img-box"> <img src="http://demo.edtech.in/cargomoverscanada/uploads/image/46982.jpg" alt="Awesome Image"/>
            <div class="img-caption">
              <div class="box-holder">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="name-box">
              <h3>Jenefir White</h3>
              <span> Supervisor </span> </div>
            <p>Lorem ipsum dolor sit ametetd consectetur adipiscing elit.</p>
          </div>
          <a href="#" class="readmore">CONTACT ME <i class="fa fa-long-arrow-right"></i></a> </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member img-cap-effect">
          <div class="img-box"> <img src="http://demo.edtech.in/cargomoverscanada/uploads/image/94283.jpg" alt="Awesome Image"/>
            <div class="img-caption">
              <div class="box-holder">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="name-box">
              <h3>Jenefir White</h3>
              <span> Supervisor </span> </div>
            <p>Lorem ipsum dolor sit ametetd consectetur adipiscing elit.</p>
          </div>
          <a href="#" class="readmore">CONTACT ME <i class="fa fa-long-arrow-right"></i></a> </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member img-cap-effect">
          <div class="img-box"> <img src="http://demo.edtech.in/cargomoverscanada/uploads/image/95834.jpg" alt="Awesome Image"/>
            <div class="img-caption">
              <div class="box-holder">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content">
            <div class="name-box">
              <h3>Jenefir White</h3>
              <span> Supervisor </span> </div>
            <p>Lorem ipsum dolor sit ametetd consectetur adipiscing elit.</p>
          </div>
          <a href="#" class="readmore">CONTACT ME <i class="fa fa-long-arrow-right"></i></a> </div>
      </div>
    </div>
  </div>
</section> -->
<!-- <section class="fact-counter sec-padding">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="single-fact-counter">
          <div class="icon-box"> <i class="icon icon-User"></i> </div>
          <div class="text-box">
            <h4 class="timer" data-from="0" data-to="250"></h4>
            <p>Emploies in Team</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-fact-counter">
          <div class="icon-box"> <i class="icon icon-BigTruck"></i> </div>
          <div class="text-box">
            <h4 class="timer" data-from="0" data-to="106"></h4>
            <p>Company Vihicles</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-fact-counter">
          <div class="icon-box"> <i class="icon icon-WorldGlobe"></i> </div>
          <div class="text-box">
            <h4 class="timer" data-from="0" data-to="406"></h4>
            <p>Worldwide Clients</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-fact-counter">
          <div class="icon-box"> <i class="icon icon-Briefcase"></i> </div>
          <div class="text-box">
            <h4 class="timer" data-from="0" data-to="308"></h4>
            <p>Projects Done</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="latest-blog sec-padding">
  <div class="thm-container">
    <div class="sec-title">
      <h2><span>latest Blog</span></h2>
    </div>
    <div class="row">
      @foreach($latest_news as $val)
      <div class="col-md-6">
        <div class="single-blog-post img-cap-effect">
          <div class="img-box"> <img src="{{ asset($val->slider_image) }}"/>
            <div class="img-caption">
              <div class="box-holder">
                <ul>
                  <li><a href="h{{ route('blog-detail',['slug'=>$val->slug])}}"><i class="fa fa-link"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="content-box">
            <div class="date"> <span>{{ date('d', strtotime($val->created_at)) }}</span>/{{ date('M', strtotime($val->created_at)) }} </div>
            <a href="{{ route('blog-detail',['slug'=>$val->slug])}}">
            <h3>{{ $val->title }}</h3>
            </a>
            <p>{!! $val->shortdescription !!}</p>
            <a href="{{ route('blog-detail',['slug'=>$val->slug])}}" class="thm-btn">Read More <i class="fa fa-arrow-right"></i></a> </div>
        </div>
      </div>
      @endforeach
     
    </div>
  </div>
</section>
<section class="footer-top">
  <div class="thm-container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">
          <h3>Logistic and cargo</h3>
          <p>Contact us now to get quote for all your global <br>
            shipping and cargo need.</p>
        </div>
        <div class="col-md-6"> <a class="thm-btn" href="{{ url('contactus') }}">Contact Us <i class="fa fa-arrow-circle-right"></i></a> </div>
      </div>
    </div>
  </div>
</section>
<!-- <section>
  <div class="row row-tight">
    <hr>
    <div class="medium-6 small-12 columns"> <span style="font-size: 21px;color:#e00926;font-weight: 700;">Services Offered</span>
      <h2 class="service-title"> Exclusive Partners </h2>
    </div>
    <div class="medium-6 columns hide-for-small" style="text-align:right">
      <p class="cta-tertiary small"> <a href="{{ route('/') }}/partners" title="View the list of solutions">View all <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </p>
    </div>
  </div>
  <div class="row inform_your_decisions"> @foreach($homecategory as $value)
    <div class="col_custom_5 columns ">
      <div class="aboutBox">
        <h3 class="aboutBox-title"><a href="{{ route('category-list',['list'=>$value->slug])}}"  >{{ $value->category_name }}</a></h3>
        <div class="about-content"><a href="{{ route('category-list',['list'=>$value->slug])}}"  > <img src="{{ asset($value->image) }}"/>
          <div class="about-icon fa fa-hand-o-right"></div>
          </a> </div>
      </div>
    </div>
    @endforeach </div>
</section> -->

@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSlhXQ8ixpBW6CLmCJWOIvQXmwzXwlbj4&v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript" src="{{ asset('assets/front/autocomplete.js') }}"></script>
<script type="text/javascript">
  $(function(){
         var option = $("#from_location").geocomplete({
            types: ['(cities)']
        });
        option.bind("geocode:result", function (event, result) {
            var location_arr = {};
            for (var i in result.address_components) {
                var obj = result.address_components[i];
                var val = obj.long_name;
                var type = obj.types[0];
                if (type == "country") {
                    val = obj.short_name;
                }
                if (type == "administrative_area_level_1") {
                    val = obj.short_name;
                }
                location_arr[type] = val;
            }
            
            var address = "";
            if (typeof location_arr.route != "undefined") {
                address = location_arr.route;
            }
            if (typeof location_arr.street_number != "undefined") {
                address = location_arr.street_number + ", " + address;
            }
            if (typeof location_arr.sublocality_level_1 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_1;
            }
            if (typeof location_arr.sublocality_level_2 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_2;
            }
            $("#from_venue_city").val(location_arr.locality);
            $("#from_venue_state").val(location_arr.administrative_area_level_1);
            $("#from_venue_postal_code").val(location_arr.postal_code);
            $("#from_venue_country").val(location_arr.country);
            $("#from_geo_lat").val(result.geometry.location.lat());
            $("#from_geo_lng").val(result.geometry.location.lng());
        });


        var option = $("#to_location").geocomplete({
            types: ['(cities)']
        });
        option.bind("geocode:result", function (event, result) {
            var location_arr = {};
            for (var i in result.address_components) {
                var obj = result.address_components[i];
                var val = obj.long_name;
                var type = obj.types[0];
                if (type == "country") {
                    val = obj.short_name;
                }
                if (type == "administrative_area_level_1") {
                    val = obj.short_name;
                }
                location_arr[type] = val;
            }
            
            var address = "";
            if (typeof location_arr.route != "undefined") {
                address = location_arr.route;
            }
            if (typeof location_arr.street_number != "undefined") {
                address = location_arr.street_number + ", " + address;
            }
            if (typeof location_arr.sublocality_level_1 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_1;
            }
            if (typeof location_arr.sublocality_level_2 != "undefined") {
                address = address + ", " + location_arr.sublocality_level_2;
            }
            $("#to_venue_city").val(location_arr.locality);
            $("#to_venue_state").val(location_arr.administrative_area_level_1);
            $("#to_venue_postal_code").val(location_arr.postal_code);
            $("#to_venue_country").val(location_arr.country);
            $("#to_geo_lat").val(result.geometry.location.lat());
            $("#to_geo_lng").val(result.geometry.location.lng());
        });

        $('body').on('click','.location-next-btn', function(e){
          e.preventDefault();
          var boxWidth = $(".user-info-bx").width();
          $('.location-info-bx').hide();
          $('.user-info-bx').show();
        })
    });
</script>
@endsection
