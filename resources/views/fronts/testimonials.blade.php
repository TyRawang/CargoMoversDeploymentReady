@extends('fronts.layouts.app')
@php
$userlogin = Auth::User();
$menuquery = App\Category::where('isActive',1)->get();
$homecategory  = App\Category::Orderby('order_by_cat','ASC')->where('p_id','0')->where('top','0')->get();
@endphp

@section('meta')
<title>Cargo Movers Canada | Moving Services Canada Testimonials</title>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Cargo Movers Canada | Moving Services Canada Testimonials" />
<meta property="og:description" content="Testimonials Cargo Movers Canada provides a wide range of packing, moving and storage services. Call @ 1-855-206-9407 for booking." />
<meta property="og:url" content="{{ \Request::fullUrl() }}" />
<meta property="og:site_name" content="Cargo Movers Canada " />
<meta property="article:publisher" content="https://www.facebook.com/CargoMoversCanada" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Testimonials Cargo Movers Canada provides a wide range of packing, moving and storage services. Call @ 1-855-206-9407 for booking." />
<meta name="twitter:title" content="Cargo Movers Canada | Moving Services Canada Testimonials" />
         
    
    
    
        
    <meta property="og:title" content="Testimonials"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ \Request::fullUrl() }}"/>
    <meta property="og:site_name" content="Cargo Movers Canada "/>
    <meta property="og:description" content="TESTIMONIALS 
OUR EXTREMELY HAPPY CUSTOMERS     
Barry Tim 
“We got the service of Cargo Movers for our moving on Aug 2018. We are extremely happy about their service. Mike and the team did a professional work. They did everything very nicely, efficiently"/>

<meta property="og:image" content="{{ url('assets/front/images/logo.png') }}"/>
@endsection

@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>Testimonials</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >Testimonials</a></li>
    </ul>
  </div>
</section>
<section id="mycustomsection">
  <div class="container">
    <div class="servicesdetails clearfix" style="padding:0 0 20px 0;">
      <h1><span>OUR EXTREMELY HAPPY CUSTOMERS</span></h1>
    </div>
    <div class="moretestimoblas">
      <ul>
        @foreach($testimonials as $val)
        <li> {!! $val->description !!}
          <div class="namert"><strong><em>{{ $val->title }}</em></strong> </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
@endsection