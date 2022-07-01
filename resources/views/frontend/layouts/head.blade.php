<meta charset="utf-8">
@if (isset($meta))
    {!!$meta!!}
@else
<meta itemprop="name" content="HPC Group">
<meta itemprop="description" content="Le groupe a pour dénomination sociale high-tech plastic center « hpc-group » spécialiste dans le secteur de la plasturgie.">
<meta itemprop="image" content="{{asset('/frontend/logo-white-HPC.svg')}}">
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{asset('')}}" />
    <meta property="twitter:title" content="HPC Group" />
    <meta property="twitter:description" content="Le groupe a pour dénomination sociale high-tech plastic center « hpc-group » spécialiste dans le secteur de la plasturgie." />
    <meta property="twitter:image" content="{{asset('/frontend/logo-white-HPC.svg')}}" />
    <meta property="twitter:site" content="@HenginImmobilier" />
    <meta property="og:type" content="website" />
	<meta property="og:title" content="HPC Group" />
	<meta property="og:description" content="Le groupe a pour dénomination sociale high-tech plastic center « hpc-group » spécialiste dans le secteur de la plasturgie." />
    <meta property="og:image" content='{{asset('/frontend/logo-white-HPC.svg')}}' />

@endif
@if (isset($title_page))
<title>{{$title_page}}</title>
@else
<title>HPC GROUP</title>
@endif



<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>


<link href="{{asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">
<!-- Color File -->
<link href="{{asset('frontend/assets/css/color-3.css')}}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&family=Mukta:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon-three.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/assets/images/favicon-three.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style>
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
        }
    body {
        top: 0px !important;
        }
        #goog-gt-tt
    {
         display: none!important;
    }
    .goog-text-highlight {
        background-color: transparent!important;
        box-shadow: none!important;
        }
    </style>
 @yield('styles')
