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
      <h2><span>Get in touch</span></h2>
      <p>WE'D LOVE TO HEAR FROM YOU</p>
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-6 col-xs-12 pull-left">
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
      </div>
    </div>
  </div>
</section>
@endsection