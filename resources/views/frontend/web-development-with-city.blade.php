@extends('frontend.layouts')

@push('title','Web designing Delhi')
@push('des','Looking for Web designing in Delhi? We help businesses in Delhi. Check out the Range of services we offer')

@push('canon')
{{route('website-service',$state)}}
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

<h1 class="hero-title">
Best Web Designing Services in 
<span class="highlight">{{ucwords(str_replace('-', ' ', $state))}}</span><br>
</h1>

<p class="hero-sub">
{{ucwords(str_replace('-', ' ', $state))}} is a vibrant and competitive region where businesses must stand out online to succeed. our Web Designing Service helps local businesses build a strong digital presence through modern, responsive, and user-friendly websites. 
</p>

<div class="hero-badges">
    <div class="badge">🚀 High Converting pages</div>
    <div class="badge">📍 SEO Driven Approach</div>
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
        <p>Websites completed</p>
    </div>
    <div class="stat">
        <h2>95%</h2>
        <p>Client Satisfaction</p>
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
<h2>Complete Web Development Services in {{ ucwords(str_replace('-', ' ', $state)) }}</h2>

<div class="cards">
    <div class="card">
      <h3>Web Development</h3>
      <p>We build modern, responsive, and user-friendly websites that are optimized for performance and search engines.</p>
    </div>
    
    <div class="card">
      <h3>Custom Software Development</h3>
      <p>We build custom software solutions that are tailored to your business needs and optimized for performance and scalability.</p>
    </div>
<div class="card">
  <h3>Advanced On-Page SEO</h3>
  <p>We optimize your website structure, headings, content, keywords, meta tags, and internal linking to make your website fully search-engine friendly and conversion-focused.</p>
</div>

<div class="card">
  <h3>Technical SEO & Core Web Vitals</h3>
  <p>We fix website errors, improve loading speed, mobile usability, schema markup, indexing issues, and crawlability to boost rankings and user experience.</p>
</div>



</div>
</section>
<section class="authority-section">
<div class="container">

<div class="authority-wrapper">

<div class="authority-left">
    <h2>
        # Professional <span class="gradient-text">Web Development Company in New Delhi</span>
    </h2>

    <p class="authority-subtext">
        We help local businesses in New Delhi build modern, responsive, and user-friendly websites that are optimized for performance and search engines.
    </p>

    <div class="benefits-grid">
        <div class="benefit-item">
            ✓ Build Modern, Responsive Websites
        </div>
        <div class="benefit-item">
            ✓ Optimize for Performance and Search Engines
        </div>
        <div class="benefit-item">
            ✓ Increase Website Traffic & Calls
        </div>
        <div class="benefit-item">
            ✓ Custom Software Solutions
        </div>
    </div>

    <div class="cta-group">
        <a href="#contact" class="primary-btn">Get Free Software Development Consultation</a>
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
Our Proven <span class="highlight">Web Development Strategy</span>
</h2>

<div class="strategy-wrapper">

<div class="strategy-step">
    <div class="step-number">01</div>
    <div class="step-content">
        <h3>Requirement discussion & business understanding</h3>
    </div>
</div>

<div class="strategy-step">
    <div class="step-number">02</div>
    <div class="step-content">
        <h3>Website design layout & structure planning</h3>
    </div>
</div>

<div class="strategy-step">
    <div class="step-number">03</div>
    <div class="step-content">
        <h3>Development with SEO & speed optimization</h3>
    </div>
</div>

<div class="strategy-step">
    <div class="step-number">04</div>
    <div class="step-content">
        <h3>Testing, launch & support</h3>
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
                <a href="{{url()->current()}}/{{$page->location_slug }}" class="location-item">
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

<h2 style="font-size:42px; margin-bottom:15px;">
Get Free Web Development Consultation in <span class="highlight">{{ ucwords(str_replace('-', ' ', $state)) }}</span>
</h2>

<p style="max-width:750px;margin:0 auto 35px;font-size:18px;color:#cfcfcf">
Want more calls, more enquiries, and more customers from Google in {{ ucwords(str_replace('-', ' ', $state)) }}?  
Check Out our SEO Services to get a customized growth strategy for your business.
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
