@extends('frontend.layouts')
@push('title','Website Development in Delhi | Professional Business Websites')
@push('des','Looking for website development in Tilak Nagar? We build fast, mobile-friendly, SEO-optimized websites for businesses in Tilak Nagar, Janakpuri, Uttam Nagar and West Delhi that generate real enquiries')

@push('canon')
{{route('website-development')}}
@endpush

@section('content')
<style>

body{font-family:Outfit;background:#070710;color:#fff;overflow-x:hidden}
.section{padding:70px 8%; }
   #ban{

       background:url('images/digital-marketing.webp');background-size:cover;background-position:center}
   
.hero-title{font-size:54px;line-height:1.1}
.highlight{background:linear-gradient(90deg,#00f0ff,#ff00d4);-webkit-background-clip:text;color:transparent}
.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:30px;margin-top:60px}
.card{padding:30px;border:1px solid rgba(255,255,255,0.08);border-radius:16px;background:rgba(255,255,255,0.03);backdrop-filter:blur(10px)}
.process-step{margin:40px 0;font-size:22px;border-left:3px solid #00f0ff;padding-left:20px}
.cta{margin-top:60px;text-align:center}
h3{
    color:white;
}
p{
    color:white;
}
.cta a{padding:14px 28px;border-radius:30px;background:linear-gradient(45deg,#00f0ff,#ff00d4);color:#000;text-decoration:none;font-weight:600}
</style>
</head>

<body>

<!-- HERO -->
<section class="section " style="padding-top:120px !important;" id="ban">
<h1 class="hero-title">
Website Development 
<span class="highlight">in Delhi</span><br>
That Converts Visitors into Customers
</h1>

<p style="max-width:700px;margin-top:20px;font-size:18px">
We design and develop fast, mobile-friendly, and SEO-optimized websites for local businesses in Delhi that help generate real enquiries, calls, and customers from Google.
</p>



</section>
 

<!-- SERVICES -->
<section class="section">
<h2>Our Website Development Services in Delhi</h2>

<div class="cards">

<div class="card">
  <h3>Business Website Design</h3>
  <p>Professional, modern, and responsive website designs that represent your brand and build customer trust.</p>
</div>

<div class="card">
  <h3>SEO-Optimized Website Structure</h3>
  <p>We build websites with proper structure, speed, and on-page SEO so your business can rank on Google.</p>
</div>

<div class="card">
  <h3>Mobile-Friendly & Fast Loading</h3>
  <p>Our websites load fast and work perfectly on mobiles, tablets, and desktops for better user experience.</p>
</div>

<div class="card">
  <h3>Lead Generation Focused Layout</h3>
  <p>Every website is designed to convert visitors into enquiries through smart layout and call-to-actions.</p>
</div>

</div>

</section>

<section style="padding-top:10px !important;" class="section">
    <div style="min-height:0px !important;" class="container">
        <div class="row">
            <div class="col-12">
<h2>Professional Website Development for Delhi Businesses</h2>

<ul>
<li><p>
We build websites for shops, clinics, gyms, institutes, startups, and service providers in Tilak Nagar and West Delhi.
</p></li>

<li><p>
Our websites are designed not only to look good but also to rank on Google and convert visitors into real customers.
</p></li>

<li><p>
We focus on speed, mobile responsiveness, SEO structure, and user-friendly design for maximum results.
</p></li>

<li><p>
Whether you need a business website, portfolio, or service website — we create websites that grow your business.
</p></li>
</ul>

            </div>
             
        </div>
    </div>

</section>
<!-- PROCESS -->
<section style="padding-top:10px !important;" class="section pt-0">
<h2><span class="highlight fs-1">Our Website Development Process</span></h2>
<div class="process-step">1. Requirement discussion & business understanding</div>
<div class="process-step">2. Website design layout & structure planning</div>
<div class="process-step">3. Development with SEO & speed optimization</div>
<div class="process-step">4. Testing, launch & support</div>


</section>

<!-- AREAS -->

<!-- AREAS -->

<section class="service-section">
        <h1 class="service-title">Our Service Locations</h1>
        <div class="locations-container">
          @foreach($data as $loc)
            <div class="location-item">
                <!-- Rajasthan desert image (file:1) -->
                <img style="height:250px;width:100%;object-fit:cover" src="{{asset('storage/'.$loc->state_image)}}" alt="{{$loc->state}}" class="location-img">
                <div class="location-label">{{Strtoupper($loc->state)}}</div>
            </div>
       @endforeach
        </div>
    </section>
    <style>

        .service-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .service-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #6366f1; /* Purple-blue jaise design mein */
            margin: 0 0 50px 0;
            text-align: center;
            letter-spacing: -0.5px;
        }

        .locations-container {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 60px;
            flex-wrap: wrap;
        }

        .location-item {
            position: relative;
                width: 412px;
    height: 250px;
        }

        .location-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.5)); /* Heavy shadow jaise design */
        }

        .location-label {
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0,0,0,0.8);
            color: #fff;
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 1.3rem;
            font-weight: 600;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }

        @media (max-width: 768px) {
            .locations-container {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }
            
            .location-item {
               width: 90vw;
        height: 255px;
            }
        }
    </style>
 
<section class="section">
<h2><span class="highlight">Website Development in Delhi.</span></h2>
<p>
If you are searching for website development in Delhi, we create professional websites that help your business get found on Google and generate enquiries.
</p>
<p>
We serve businesses in Tilak Nagar, Janakpuri, Uttam Nagar, Rajouri Garden, Dwarka, and nearby West Delhi areas.
</p>


</section>

<!-- CTA -->
<section style="padding:90px 8%; text-align:center; 
background:linear-gradient(90deg,#0b0b18,#11132a);
border-top:1px solid rgba(255,255,255,0.08);
border-bottom:1px solid rgba(255,255,255,0.08);">

<h2 style="font-size:42px; margin-bottom:15px;">
Get Free Web Development Services Consultation in <span class="highlight">Delhi</span>
</h2>

<p style="max-width:750px;margin:0 auto 35px;font-size:18px;color:#cfcfcf">
Want a professional website that brings customers from Google?  
Talk directly with our website development experts today.
</p>

<a href="tel:7599958260" 
style="display:inline-block;
padding:18px 40px;
font-size:20px;
border-radius:40px;
background:linear-gradient(45deg,#00f0ff,#ff00d4);
color:#000;
font-weight:700;
text-decoration:none;
box-shadow:0 10px 40px rgba(0,240,255,0.3);">
📞 Call Now – Free Consultation
</a>

<p style="margin-top:25px;color:#9aa0a6;font-size:15px">
Serving Tilak Nagar, Uttam Nagar, Vikaspuri, Janakpuri, Rajouri Garden & West Delhi
</p>

</section>
<script>
gsap.from(".section",{opacity:0,y:80,stagger:0.2,duration:1});
</script>

 @endsection
