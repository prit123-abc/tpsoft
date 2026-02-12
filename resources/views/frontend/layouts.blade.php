<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.head')
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
