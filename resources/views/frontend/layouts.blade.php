<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
    <meta name="author" content="TpSoftware Solution">
	<meta name="robots" content="index, follow" />
	<meta name="distribution" content="global" />
    <meta name="coverage" content="india" />
    <meta name="object" content="document"/>
    <meta name="audience" content="All" />
    <meta name="revisit-after" content="1 day"/>
    <meta name="language" content="en"/>
    <meta name="rating" content="general"/>
    <meta name="copyright" content="2025 All Rights Reserved by TpSoftware Solution.com"/>



 <link rel="canonical" href="@stack('canon')"> 
     <!--Additional OG:Meta-->
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="@stack('title')"/>
    <meta property="og:description" content="@stack('des')"/>
    <meta property="og:site_name" content="TPSoftware Solution"/>
    <meta property="og:url" content="@stack('canon')"/>
    <meta property="og:image" content="{{url('/')}}"/>
    <style>
        a{
            text-decoration:none;
        }
    </style>
    @php
$localBusinessSchema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "TP Software Solution",
    "image" => asset('images/logo.png'),
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Tilak Nagar",
        "addressRegion" => "Delhi",
        "postalCode" => "110018",
        "addressCountry" => "IN",
    ],
    "telephone" => "+91-7599958260",
    "areaServed" => [
        "Tilak Nagar",
        "Uttam Nagar",
        "Janakpuri",
        "Rajouri Garden",
        "Dwarka",
        "Paschim Vihar",
        "Vikaspuri",
        "west delhi"
    ],
];
@endphp
<script type="application/ld+json">
{!! json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
</script>

</head>
<body>

    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')

</body>
</html>
