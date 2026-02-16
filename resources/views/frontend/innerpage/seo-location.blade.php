@extends('frontend.layouts')

@push('title')
{{$page->meta_title}}
@endpush

@push('des')
{{$page->meta_description}}
@endpush

@push('canon')
{{ url()->current() }}
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
 

<!-- HERO -->
<section class="section" style="padding-top:140px !important; position:relative;" id="ban">

<div class="hero-glow"></div>

<h1 style="font-size:40px !important;" class="fs-5 hero-title">
SEO Service in 
<span class="highlight">
{{ ucwords(str_replace('-', ' ', $location)) }}, 
{{ ucwords(str_replace('-', ' ', $state)) }}
</span><br>
<span style="font-size:36px; opacity:.9;">
# Rank on Google Search & Maps
</span>
</h1>

<p class="hero-sub">
We help local businesses in {{ ucwords(str_replace('-', ' ', $location)) }} dominate Google Search and Google Maps with high-intent keywords that generate real calls, enquiries, and paying customers.
</p>


<div class="hero-badges">
    <div class="badge">🚀 High Converting</div>
    <div class="badge">📍 Local SEO Experts</div>
    <div class="badge">⚡ Fast Ranking Strategy</div>
</div>

</section>
<style>.hero-sub{
    max-width:800px;
    margin-top:25px;
    font-size:20px;
    color:#cfcfcf;
    line-height:1.6;
}

.hero-glow{
    position:absolute;
    top:-100px;
    left:-100px;
    width:500px;
    height:500px;
    background:radial-gradient(circle,#00f0ff33,transparent 70%);
    filter:blur(80px);
    z-index:-1;
}

.hero-badges{
    margin-top:35px;
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.badge{
    padding:10px 18px;
    border-radius:50px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.08);
    backdrop-filter:blur(10px);
    font-size:14px;
}
.card{
    padding:35px;
    border:1px solid rgba(255,255,255,0.08);
    border-radius:20px;
    background:linear-gradient(145deg,#0e0f1c,#11142a);
    transition:all .4s ease;
    position:relative;
    overflow:hidden;
}

.card:hover{
    transform:translateY(-10px);
    border-color:#00f0ff;
    box-shadow:0 20px 50px rgba(0,240,255,.2);
}

</style>
 <section class="section" style="padding-top:40px !important;">
<div class="stats">
    <div class="stat">
        <h2>150+</h2>
        <p>Businesses Ranked</p>
    </div>
    <div class="stat">
        <h2>95%</h2>
        <p>Client Retention</p>
    </div>
    <div class="stat">
        <h2>Top </h2>
        <p>Google Map Rankings</p>
    </div>
    <div class="stat">
        <h2>24/7</h2>
        <p>Support</p>
    </div>
</div>
</section>

<style>.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:40px;
    text-align:center;
}

.stat h2{
    font-size:40px;
    background:linear-gradient(90deg,#00f0ff,#ff00d4);
    -webkit-background-clip:text;
    color:transparent;
}

.stat p{
    color:#aaa;
    margin-top:10px;
}
</style>

<!-- SERVICES -->
<section class="section">
<h2>Complete SEO Services in {{ ucwords(str_replace('-', ' ', $location)) }}</h2>

<div class="cards">
<div class="card">
  <h3>Advanced On-Page SEO</h3>
  <p>We optimize your website structure, headings, content, keywords, meta tags, and internal linking to make your website fully search-engine friendly and conversion-focused.</p>
</div>

<div class="card">
  <h3>Technical SEO & Core Web Vitals</h3>
  <p>We fix website errors, improve loading speed, mobile usability, schema markup, indexing issues, and crawlability to boost rankings and user experience.</p>
</div>

<div class="card">
  <h3>Local SEO & Google Maps Ranking</h3>
  <p>We optimize your Google Business Profile to rank your business in the Google 3-Pack and dominate “near me” searches in {{ ucwords(str_replace('-', ' ', $state)) }}.</p>
</div>

<div class="card">
  <h3>High-Intent Keyword Targeting</h3>
  <p>We focus only on keywords that customers are actively searching for — bringing calls, leads, and paying customers to your business.</p>
</div>


</div>
</section>



<section class="section">
<h2>
Why Choose Our SEO Company in 
{{ ucwords(str_replace('-', ' ', $location)) }}, 
{{ ucwords(str_replace('-', ' ', $state)) }}?
</h2>

<p>
If you're a business owner in {{ ucwords(str_replace('-', ' ', $location)) }}, you already know how competitive the local market is. 
Ranking on Google is no longer optional — it’s essential.
</p>

<p>
Our SEO experts understand the local search behavior in 
{{ ucwords(str_replace('-', ' ', $location)) }} and create custom strategies 
that help you appear for high-intent keywords like:
</p>

<ul style="margin-top:20px; line-height:2;">
<li>• Best services near me in {{ ucwords(str_replace('-', ' ', $location)) }}</li>
<li>• Top company in {{ ucwords(str_replace('-', ' ', $location)) }}</li>
<li>• Affordable experts in {{ ucwords(str_replace('-', ' ', $location)) }}</li>
</ul>

<p style="margin-top:20px;">
We don’t just increase traffic — we increase calls, leads, and revenue.
</p>
</section>



<section class="authority-section">
<div class="container">

<div class="authority-wrapper">

<div class="authority-left">
  <h2>
# Trusted SEO Company in 
<span class="gradient-text">
{{ ucwords(str_replace('-', ' ', $location)) }}
</span> Driving Real Business Growth
</h2>

<p class="authority-subtext">
We help businesses in {{ ucwords(str_replace('-', ' ', $location)) }}, {{ ucwords(str_replace('-', ' ', $state)) }} 
generate consistent leads, higher Google rankings, and long-term organic growth.
</p>


    <div class="benefits-grid">
        <div class="benefit-item">
            ✓ Rank on Page 1 for High-Intent Keywords
        </div>
        <div class="benefit-item">
            ✓ Dominate Google Maps & Local Search
        </div>
        <div class="benefit-item">
            ✓ Increase Website Traffic & Calls
        </div>
        <div class="benefit-item">
            ✓ Transparent Monthly Reporting
        </div>
    </div>

    <div class="cta-group">
        <a href="#contact" class="primary-btn">Get Free SEO Strategy</a>
        <span class="mini-trust">No long-term contracts • Results-focused approach</span>
    </div>
</div>

<div class="authority-right">
    <div class="stats-card">
        <div class="stat">
            <h3>150+</h3>
            <p>Businesses Optimized</p>
        </div>
        <div class="stat">
            <h3>95%</h3>
            <p>Client Retention</p>
        </div>
        <div class="stat">
            <h3>2X</h3>
            <p>Average Traffic Growth</p>
        </div>
    </div>
</div>

</div>
</div>
</section>
<style>.authority-section{
    padding:10px 0px 0 0;
}

.authority-wrapper{
    display:flex;
    gap:60px;
    align-items:center;
    justify-content:space-between;
}

.authority-left{
    flex:1.2;
}

.authority-right{
    flex:1;
    display:flex;
    justify-content:center;
}

.authority-left h2{
    font-size:42px;
    line-height:1.3;
    margin-bottom:20px;
}

.authority-subtext{
    font-size:18px;
    color:#cfcfcf;
    margin-bottom:30px;
}

.benefits-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
    margin-bottom:30px;
}

.benefit-item{
    background:rgba(255,255,255,0.04);
    padding:12px 15px;
    border-radius:8px;
    font-size:15px;
}

.primary-btn{
    display:inline-block;
    padding:14px 28px;
    background:linear-gradient(45deg,#00f0ff,#ff00d4);
    border-radius:30px;
    color:#000;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.primary-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 30px rgba(0,240,255,.3);
}

.mini-trust{
    display:block;
    margin-top:10px;
    font-size:13px;
    color:#999;
}

.stats-card{
    background:rgba(255,255,255,0.04);
    padding:40px;
    border-radius:20px;
    text-align:center;
    backdrop-filter:blur(10px);
}

.stat{
    margin-bottom:30px;
}

.stat h3{
    font-size:36px;
    background:linear-gradient(45deg,#00f0ff,#ff00d4);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.stat p{
    color:#cfcfcf;
    font-size:14px;
}

@media(max-width:900px){
    .authority-wrapper{
        flex-direction:column;
    }
    .benefits-grid{
        grid-template-columns:1fr;
    }
}
</style>
<!-- PROCESS -->
<section class="section strategy-section">

<h2 class="strategy-title">
Our Proven <span class="highlight">SEO Strategy</span>
</h2>

<div class="strategy-wrapper">

<div class="strategy-step">
    <div class="step-number">01</div>
    <div class="step-content">
        <h3>SEO Audit & Keyword Research</h3>
        <p>We analyze your website, competitors, and search demand in {{ ucwords(str_replace('-', ' ', $location)) }} to create a powerful ranking blueprint.</p>
    </div>
</div>

<div class="strategy-step">
    <div class="step-number">02</div>
    <div class="step-content">
        <h3>On-Page & Technical Optimization</h3>
        <p>We optimize structure, content, speed, schema, and indexing to make your website Google-ready.</p>
    </div>
</div>

<div class="strategy-step">
    <div class="step-number">03</div>
    <div class="step-content">
        <h3>Local SEO & Google Maps Growth</h3>
        <p>We improve your Google Business Profile to dominate local searches and appear in the 3-pack results.</p>
    </div>
</div>

<div class="strategy-step">
    <div class="step-number">04</div>
    <div class="step-content">
        <h3>Authority Building & Monthly Scaling</h3>
        <p>We build backlinks, improve content authority, and continuously optimize for long-term ranking growth.</p>
    </div>
</div>

</div>
</section>
<style>.strategy-section{
    padding-top:0px !important;
}

.strategy-title{
    font-size:42px;
    margin-bottom:60px;
}

.strategy-wrapper{
    display:flex;
    flex-direction:column;
    gap:40px;
    position:relative;
}

.strategy-wrapper::before{
    content:'';
    position:absolute;
    left:40px;
    top:0;
    width:3px;
    height:100%;
    background:linear-gradient(to bottom,#00f0ff,#ff00d4);
}

.strategy-step{
    display:flex;
    align-items:flex-start;
    gap:30px;
    position:relative;
}

.step-number{
    min-width:80px;
    height:80px;
    border-radius:50%;
    background:linear-gradient(45deg,#00f0ff,#ff00d4);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    font-weight:700;
    color:#000;
    box-shadow:0 10px 30px rgba(0,240,255,.3);
}

.step-content{
    background:rgba(255,255,255,0.04);
    padding:25px 30px;
    border-radius:15px;
    flex:1;
    transition:.4s;
}

.step-content:hover{
    background:rgba(0,240,255,0.08);
    transform:translateX(10px);
}

.step-content h3{
    margin-bottom:10px;
    font-size:22px;
}

.step-content p{
    color:#cfcfcf;
}

@media(max-width:768px){
    .strategy-wrapper::before{
        left:20px;
    }
    .strategy-step{
        flex-direction:column;
    }
}
</style>

<!-- AREAS -->

<!--  -->
  

 
<section class="locations-section">
  <div style="min-height:10px !important;" class="container">
    @if($pages->isNotEmpty())
        <h2 class="locations-title">
            Our Locations in <span class="highlight">{{ strtoupper($pages->first()->state->state) }}</span>
        </h2>
        <div class="locations-grid">
            @foreach($pages as $page)
                <a href="{{$page->location_slug}}" class="location-item">
                    {{ $page->location_name }}
                </a>
            @endforeach
        </div>
    @else
        <p>No locations found for this service in the selected state.</p>
    @endif
</div>
</section>
<style>.locations-section{
    padding:10px 10px 0 0 !important;  
    /* background:#f5f5f5; */
    text-align:center;
}

.locations-title{
    font-size:40px;
    font-weight:700;
    margin-bottom:60px;
    color:#fff;
}

.locations-title span{
    letter-spacing:3px;
}

.locations-grid{
    display:grid;
    grid-template-columns:repeat(4, 1fr);
    gap:30px 80px;
    max-width:1100px;
    margin:0 auto;
}

.location-item{
    font-size:20px;
    font-weight:600;
    text-transform:uppercase;
    color:#fff;
    text-decoration:none;
    letter-spacing:1px;
    transition:all .3s ease;
}

.location-item:hover{
    color:#007bff;
    transform:translateY(-3px);
}

@media(max-width:992px){
    .locations-grid{
        grid-template-columns:repeat(2, 1fr);
        gap:25px;
    }
}

@media(max-width:576px){
    .locations-grid{
        grid-template-columns:1fr;
    }

    .location-item{
        font-size:18px;
    }
}
</style>

<!-- CTA -->
<section style="padding:90px 8%; text-align:center; 
background:linear-gradient(90deg,#0b0b18,#11132a);
border-top:1px solid rgba(255,255,255,0.08);
border-bottom:1px solid rgba(255,255,255,0.08);">

<h2>
Get Free SEO Consultation in 
<span class="highlight">
{{ ucwords(str_replace('-', ' ', $location)) }}
</span>
</h2>

<p>
Want more customers from Google in 
{{ ucwords(str_replace('-', ' ', $location)) }}, {{ ucwords(str_replace('-', ' ', $state)) }}?
Let’s build your growth strategy today.
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
Serving businesses across {{ ucwords(str_replace('-', ' ', $state)) }} and nearby areas.
</p>


</section>
<script>
gsap.from(".section",{opacity:0,y:80,stagger:0.2,duration:1});
</script>
 
@endsection
