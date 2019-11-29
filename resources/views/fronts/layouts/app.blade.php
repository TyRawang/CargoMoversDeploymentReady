@php
$currentURL = \Request::fullUrl();
if($currentURL) {
  $exp = explode('/',$currentURL);
  $metatitle = "Cargo Movers Canada";
  $metakeyword = "Cargo Movers Canada";
  $metadescription = "Cargo Movers Canada";
}
$menuquery = App\Category::where('isActive',1)->get();
$category  = App\Category::Orderby('category_name','ASC')->where('p_id','0')->where('top','1')->get();
$subcategory = App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
@section('meta')
@show


<link rel="stylesheet" href="{{ asset('assets/front/plugins/bootstrap/css/bootstrap.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/font-awesome/css/font-awesome.min.css') }}" media="all" type="text/css"/>
<link rel="stylesheet" href="{{ asset('assets/front/plugins/Stroke-Gap-Icons-Webfont/style.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/flaticon/flaticon.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/jquery-ui-1.11.4/jquery-ui.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/owl.carousel-2/assets/owl.carousel.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/owl.carousel-2/assets/owl.theme.default.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/animate.min.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/plugins/fancyapps-fancyBox/source/jquery.fancybox.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}" media="all" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}" media="all" type="text/css" />
@section('style')
@show
</head>
<body class=" new-menu vertical-menu">

<div class="main-df">
@include('fronts.layouts.header')

@section('content')
@show


@include('fronts.layouts.footer')

</div>
</body></html>
              