@extends('frontend.layouts')

@push('title','Best SEO Services in Delhi to Grow Your Business Online')
@push('des','Looking for SEO services in Delhi? We help businesses in Delhi rank on Google Search and Google Maps to generate daily enquiries and customers')

@push('canon')
{{route('seo-service')}}
@endpush

@section('content')
<style>

body{font-family:Outfit;background:#070710;color:#fff;overflow-x:hidden}
.section{padding:70px 8%; }
   #ban{

       background:url('images/seo-ban.webp');background-size:cover;background-position:center}
   
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
 

<!-- HERO -->
<section class="section " style="padding-top:120px !important;" id="ban">
<h1 class="hero-title">
SEO Services 
<span class="highlight"></span><br>
That Rank Your Business on Google & Maps
</h1>

<p style="max-width:700px;margin-top:20px;font-size:18px">
We provide result-driven <strong>SEO services </strong> helping local businesses rank on Google Search and Google Maps for high-intent “near me” keywords that bring real calls and enquiries every day.
</p>


</section>
 

<!-- SERVICES -->
<section class="section">
<h2>Our SEO Services </h2>
<div class="cards">

<div class="card">
  <h3>On-Page SEO Optimization</h3>
  <p>Keyword optimization, content structure, internal linking, and meta setup to make your website Google-friendly.</p>
</div>

<div class="card">
  <h3>Technical SEO & Website Speed</h3>
  <p>Fixing website errors, improving speed, mobile usability, schema, and crawlability for better rankings.</p>
</div>

<div class="card">
  <h3>Google Maps & Local SEO</h3>
  <p>Optimizing your Google Business Profile to rank your business on Google Maps for “near me” searches.</p>
</div>

<div class="card">
  <h3>Keyword Ranking & Traffic Growth</h3>
  <p>Targeting high-intent keywords that bring traffic, calls, enquiries, and real customers.</p>
</div>

</div>
</section>

<section style="padding-top:10px !important;" class="section">
    <div style="min-height:0px !important;" class="container">
        <div class="row">
            <div class="col-12">
<h2>Professional SEO Services for Delhi Businesses</h2>

<ul>
<li><p>
We help local shops, clinics, gyms, institutes, and service providers improve their visibility on Google through powerful <strong>on-page, technical, and local SEO optimization</strong>.
</p></li>

<li><p>
Our SEO experts optimize your website structure, content, keywords, schema, and Google Business Profile so your business appears in top search results and Google Maps.
</p></li>

<li><p>
Our strategy focuses on ranking your business for keywords that customers are already searching in Tilak Nagar, Janakpuri, Uttam Nagar, and West Delhi.
</p></li>

<li><p>
With continuous SEO improvements and tracking, we ensure long-term ranking, traffic growth, and daily enquiries.
</p></li>
</ul>

            </div>
             
        </div>
    </div>

</section>
<!-- PROCESS -->
<section style="padding-top:10px !important;" class="section pt-0">
<h2><span class="highlight fs-1">Our SEO Working Process</span></h2>
<div class="process-step">1. Website audit, competitor analysis & keyword research</div>
<div class="process-step">2. On-page, technical & speed optimization</div>
<div class="process-step">3. Google Maps & local SEO setup</div>
<div class="process-step">4. Monthly ranking tracking & SEO improvements</div>


</section>

<!-- AREAS -->

<section class="service-section">
        <h1 class="service-title">Our Service Locations</h1>
        <div class="locations-container">
          @foreach($data as $loc)
          <a href="{{route('seo-service',$loc->state)}}">
            <div class="location-item">
                <!-- Rajasthan desert image (file:1) -->
                <img style="height:250px;width:100%;object-fit:cover" src="{{asset('storage/'.$loc->state_image)}}" alt="{{$loc->state}}" class="location-img">
                <div class="location-label">{{Strtoupper($loc->state)}}</div>
            </div>
</a>
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
<h2><span class="highlight">SEO Services in Delhi</span></h2>
<p>
If you are searching for SEO services in Tilak Nagar, we help your business rank on Google Search and Google Maps so customers can find you easily when they search for services near them.
</p>
<p>
Our local SEO strategies are specially designed for businesses in Tilak Nagar, Janakpuri, Uttam Nagar, Rajouri Garden, and nearby West Delhi areas.
</p>

</section>

<!-- CTA -->
<section style="padding:90px 8%; text-align:center; 
background:linear-gradient(90deg,#0b0b18,#11132a);
border-top:1px solid rgba(255,255,255,0.08);
border-bottom:1px solid rgba(255,255,255,0.08);">

<h2 style="font-size:42px; margin-bottom:15px;">
Get Free Seo Services Consultation in <span class="highlight">Tilak Nagar</span>
</h2>

<p style="max-width:750px;margin:0 auto 35px;font-size:18px;color:#cfcfcf">
Want more calls, more enquiries, and more customers from Google?  
Talk directly with our Seo Services experts and get a free strategy for your business.
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
