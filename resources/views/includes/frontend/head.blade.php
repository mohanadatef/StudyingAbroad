
<head>
 <title>@yield('title')</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="icon" type="image/png" href="{{asset('public/images/setting/'.$setting->image)}}"/>


 <!-- Including css file -->

 @if(App::getLocale() == 'en')
  <link rel="stylesheet" href="{{url('public/assets/CSS/en/style.css')}}">
 @else
  <link rel="stylesheet" href="{{url('public/assets/CSS/ar/style-ar.css')}}">
 @endif


</head>
  @yield('head')

