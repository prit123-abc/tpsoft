@extends('frontend.layouts')

@push('title','Custom Software Development in Tilak Nagar Delhi | CRM, Billing & Automation')
@push('des','Looking for custom software development in Tilak Nagar? We build CRM systems, billing software, inventory and business automation tools for businesses in Tilak Nagar, Janakpuri, Uttam Nagar and West Delhi')
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
Custom Software Development 
<span class="highlight">in Tilak Nagar, Delhi</span><br>
To Automate and Grow Your Business
</h1>

<p style="max-width:700px;margin-top:20px;font-size:18px">
We develop custom CRM systems, billing software, inventory management, and business automation tools for local businesses in Tilak Nagar that save time, reduce manual work, and improve efficiency.
</p>



</section>
 

<!-- SERVICES -->
<section class="section">
<h2>Our Custom Software Development Services</h2>

<div class="cards">

<div class="card">
  <h3>Custom Web Applications & CRM</h3>
  <p>We build CRM systems and web applications tailored to manage customers, leads, staff, and daily operations.</p>
</div>

<div class="card">
  <h3>Billing, Inventory & Management Systems</h3>
  <p>Software solutions to manage billing, stock, staff records, and complete business workflow efficiently.</p>
</div>

<div class="card">
  <h3>Business Automation Software</h3>
  <p>Automate repetitive tasks and manual processes to save time and improve productivity.</p>
</div>

<div class="card">
  <h3>Ongoing Support & Maintenance</h3>
  <p>Continuous updates, support, and improvements to keep your software running smoothly.</p>
</div>

</div>


</section>

<section style="padding-top:10px !important;" class="section">
    <div style="min-height:0px !important;" class="container">
        <div class="row">
            <div class="col-12">
<h2>Custom Software Solutions for Delhi Businesses</h2>

<ul>
<li><p>
We create software for clinics, shops, institutes, warehouses, startups, and service providers in Tilak Nagar and West Delhi.
</p></li>

<li><p>
Our custom software helps you manage billing, inventory, staff, customers, and reports from one place.
</p></li>

<li><p>
Instead of using multiple tools, we build one system that fits your exact business needs.
</p></li>

<li><p>
Our goal is to automate your operations and help you focus on growing your business.
</p></li>
</ul>


            </div>
             
        </div>
    </div>

</section>
<!-- PROCESS -->
<section style="padding-top:10px !important;" class="section pt-0">
<h2><span class="highlight fs-1">Our Software Development Process</span></h2>
<div class="process-step">1. Business requirement discussion & workflow understanding</div>
<div class="process-step">2. Planning software modules & system architecture</div>
<div class="process-step">3. Development, testing & optimization</div>
<div class="process-step">4. Deployment, training & ongoing support</div>


</section>

<!-- AREAS -->

 
<section class="section">
<h2><span class="highlight">Custom Software Development in Tilak Nagar, West Delhi</span></h2>
<p>
If you are searching for custom software development in Tilak Nagar, we build CRM, billing, inventory, and automation systems for your business.
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
Get Free Software Consultation in <span class="highlight">Tilak Nagar</span>
</h2>

<p style="max-width:750px;margin:0 auto 35px;font-size:18px;color:#cfcfcf">
Want software that saves time and automates your business?  
Talk directly with our software development experts today.
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

