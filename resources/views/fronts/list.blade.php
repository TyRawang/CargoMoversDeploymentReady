@extends('fronts.layouts.app')
@php
$currentURL = \Request::fullUrl();
$menuquery = App\Category::where('isActive',1)->get();
$exp = explode('/',$currentURL);
$parentcategories = $exp[4];

$userlogin = Auth::User();
@endphp
@section('content')
<section class="inner-banner">
  <div class="thm-container">
    <h2>{{ $categoryname }}</h2>
    <ul class="breadcumb">
      <li><a href="{{ route('/') }}">Home</a></li>
      <li><a >{{ $categoryname }}</a></li>
    </ul>
  </div>
</section>
@if(count($categories))
<section class="products-sec-nsd">
  <div class="container">
    <div class="servicesdetails">
      <h1><span>{{ $subcatname }} </span></h1>
      <p> {!! $shortdescription !!} </p>
    </div>
    <div class="row"> @foreach($categories as $cat)
      <div class="col-md-3 col-sm-6 ">
        <div class="mns">
          <div class="rjmd"> <a href="{{ $cat->slug }}"><img src="{{ asset($cat->image) }}" class="img-responsive"> </a></div>
          <div class="heading-pr">
            <h2><a href="{{ $cat->slug }}">@if($cat->subcatname)
              {!! $cat->subcatname !!}
              @else        
              {{ $cat->category_name }} 
              @endif</a></h2>
          </div>
          <p>{{ $cat->shortdescription }}</p>
          <p><a href="{{ $cat->slug }}">[..]</a></p>
        </div>
      </div>
      @endforeach </div>
  </div>
</section>
@endif

@if($description)
<section class="products-sec-nsd-2">
  <div class="container">
    <div class="servicesdetails clearfix">
      <div class="im-ns"> <img src="{{ asset( $image  )}}" class="img-responsive"> </div>
      <h1><span>{{ $subcatname }}</span></h1>
      {!! $description !!} </div>
  </div>
</section>
@endif








@if(count($book))
<section>
  <div class="row row-tight mylistleftpanel">
    <div class="listclear "> @foreach($book as $val)
      <div class="tg-postbook">
        <div class="row">
          <div class="col-md-2 col-sm-4">
            <div class="tg-frontcover"><a > @if($val->book_cover=='') <img src="{{ asset($val->book_cover) }}" alt="{{ $val->title }}"/> <img src="{{ asset($val->book_cover) }}" class="backimage" alt="{{ $val->title }}"/> @else <img src="{{ asset('assets/front/images/11860_1570170605.jpg')}}" alt="{{ $val->title }}"/> <img src="{{ asset('assets/front/images/11860_1570170605.jpg')}}" class="backimage" alt="{{ $val->title }}"/> @endif </a></div>
          </div>
          <div class="col-md-10 col-sm-8">
            <h3><a >{{ $val->title }}</a></h3>
            <div class="tg-postbookcontent">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <p>by: {{ $val->author_name }}</p>
                  <p>{{ $val->isbn }}</p>
                  <span>{{ $val->price }}</span> </div>
                <div class="col-md-6 col-sm-6">
                  <p><strong>Year:</strong> {{ $val->publish_year }}</p>
                  <p><strong>Publisher:</strong> {{ $val->publisher }}</p>
                  <a href="{{ route('/')}}/{{ $val->pdf }}" target="_blank"><span>PDF <i class="fa fa-download"></i></span></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="listpagination clearfix"> {{ $book->links() }} </div>
    </div>
    <div class="absolleftpanel"> @include('fronts.layouts.categorymenu')</div>
  </div>
</section>
@else

@endif
@endsection