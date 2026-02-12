@extends('frontend.layouts')

@push('title','SEO Services in Tilak Nagar Delhi | Rank on Google & Maps')
@push('description','Looking for SEO services in Tilak Nagar? We help businesses in Tilak Nagar, Janakpuri, Uttam Nagar and West Delhi rank on Google Search and Google Maps to generate daily enquiries and customers')
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
 

<!-- HERO -->
<section class="section " style="padding-top:120px !important;" id="ban">
<h1 class="hero-title">
SEO Services 
<span class="highlight">in Tilak Nagar, Delhi</span><br>
That Rank Your Business on Google & Maps
</h1>

<p style="max-width:700px;margin-top:20px;font-size:18px">
We provide result-driven <strong>SEO services in Tilak Nagar</strong> helping local businesses rank on Google Search and Google Maps for high-intent “near me” keywords that bring real calls and enquiries every day.
</p>


</section>
 

<!-- SERVICES -->
<section class="section">
<h2>Our SEO Services in Tilak Nagar</h2>
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

 
<section class="section">
<h2><span class="highlight">SEO Services in Tilak Nagar, West Delhi</span></h2>
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
