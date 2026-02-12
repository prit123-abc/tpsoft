@extends('frontend.layouts')

@section('content')
<section>
   <style>
      a {
         text-decoration: none;
      }
   </style>
   <!-- Loading Screen -->
   <div class="loading-screen" id="loadingScreen">
      <div class="loader-ring"></div>
      <div class="loading-text">Initializing Experience...</div>

   </div>
   <!-- Ambient Background -->
   <div class="ambient-bg">
      <div class="orb orb-1"></div>
      <div class="orb orb-2"></div>
      <div class="orb orb-3"></div>
   </div> <!-- Grid Overlay -->
   <div class="grid-overlay"></div> <!-- Main Container -->
   <div class="container"> <!-- Header -->
      <div class="header hero" style="margin-bottom: 0px !important;" id="mainHeader">
         <div class="logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
               <defs>
                  <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                     <stop offset="0%" style="stop-color:#00f0ff" />
                     <stop offset="100%" style="stop-color:#ff00d4" />
                  </linearGradient>
               </defs>
               <polygon points="50,5 95,30 95,70 50,95 5,70 5,30" fill="none" stroke="url(#logoGradient)"
                  stroke-width="2" />
               <polygon points="50,20 80,37 80,63 50,80 20,63 20,37" fill="none" stroke="url(#logoGradient)"
                  stroke-width="1.5" opacity="0.6" />
               <circle cx="50" cy="50" r="12" fill="url(#logoGradient)" opacity="0.3" />
               <circle cx="50" cy="50" r="6" fill="url(#logoGradient)" />
            </svg> </div>
         <h1 class="brand-name layer " data-depth="0.25">TpSoftware Solution</h1>
         <p class="tagline layer" data-depth="0.20">Software Development & Digital Marketing Agency</p>
      </div>
      <style>
         .hero {
            position: relative;
            perspective: 1000px;
         }

         .layer {
            will-change: transform;
            transition: transform 0.1s linear;
         }
      </style> <!-- Content Sections -->
      <div id="contentArea"
         style="display: block !important; position: static; transform: none; opacity: 1; visibility: visible; height: auto;">
         <!-- Introduction Section -->
         <div class="content-section" id="introduction"
            style="display: block !important; opacity: 1; visibility: visible;margin-bottom: 0px !important; transform: none; margin-bottom: 100px;">
            <div class="section-header-small">
               <div class="small-logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                        <linearGradient id="smallLogoGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#00f0ff" />
                           <stop offset="100%" style="stop-color:#ff00d4" />
                        </linearGradient>
                     </defs>
                     <polygon points="50,10 85,32 85,68 50,90 15,68 15,32" fill="none" stroke="url(#smallLogoGrad)"
                        stroke-width="3" />
                     <circle cx="50" cy="50" r="10" fill="url(#smallLogoGrad)" />
                  </svg> </div>
               <div class="small-brand">
                  <h3>TPSoftware Solution</h3>
                  <p>Digital Excellence</p>
               </div>
            </div> <!-- Back to Menu Button Removed --> <!-- Hero Banner -->
            <div class="intro-hero">
               <div class="intro-hero-content">
                  <h1 style="font-size: 38px;" class="intro-headline fs-5">Software &<br><span>
                      Digital Marketing Agency</span> in Tilak Nagar, Delhi</h1>
                  <p class="intro-subtext">TPSoftware Solution helps businesses grow with high-performance websites,
                     custom software, SEO, and paid marketing campaigns that generate real leads and measurable results.
                  </p>
                  <div class="intro-cta-group"> <button class="intro-cta-primary">View Our Services</button> <button
                        class="intro-cta-secondary"><a style="text-decoration: none;color: #fff;"
                           href="tel:7599958260">Get Free Consultation</a></button> </div>
               </div>
               <div class="intro-hero-visual">
                  <div class="intro-floating-card card-1"> <span class="card-icon">🎯</span> <span class="card-text">SEO
                        Optimized</span> </div>
                  <div class="intro-floating-card card-2"> <span class="card-icon">🚀</span> <span
                        class="card-text">High Converting</span> </div>
                  <div class="intro-floating-card card-3"> <span class="card-icon">🔒</span> <span
                        class="card-text">Secure & Scalable</span> </div>
                  <div class="intro-orb"></div>
               </div>
            </div> <!-- Metrics Strip -->
            <div class="intro-metrics">
               <div class="metric-item"> <span class="metric-value" data-target="500">100+</span> <span
                     class="metric-label">Projects Delivered</span> </div>
               <div class="metric-divider"></div>
               <div class="metric-item"> <span class="metric-value" data-target="98">98</span> <span
                     class="metric-suffix">%</span> <span class="metric-label">Client Retention</span> </div>
               <div class="metric-divider"></div>
               <div class="metric-item"> <span class="metric-value" data-target="1200">1200</span> <span
                     class="metric-suffix">+</span> <span class="metric-label">Leads Generated</span> </div>
               <div class="metric-divider"></div>
               <div class="metric-item"> <span class="metric-value">24/7</span> <span
                     class="metric-label">Support</span> </div>
            </div> <!-- Core Values -->
            <div class="intro-values">
               <div class="value-card">
                  <div class="value-number">01</div>
                  <h3>Technology-Driven Solutions</h3>
                  <p>We build powerful websites, web apps, and software using modern technologies like Laravel, Flutter,
                     and WordPress to create a strong digital foundation for your business.</p>
               </div>
               <div class="value-card">
                  <div class="value-number">02</div>
                  <h3>Marketing That Converts</h3>
                  <p>From SEO to Google Ads and social media marketing, we drive targeted traffic that turns into real
                     leads and paying customers.</p>
               </div>
               <div class="value-card">
                  <div class="value-number">03</div>
                  <h3>Results You Can Measure</h3>
                  <p>We combine development and marketing with data-driven strategies, tracking every click, lead, and
                     conversion to ensure consistent business growth.</p>
               </div>
            </div> <!-- Tech Stack Preview -->
            <div class="intro-tech">
               <p class="tech-label">TECHNOLOGIES & PLATFORMS WE WORK WITH</p>
               <div class="tech-marquee">
                  <div class="tech-track"> <span class="tech-item">Vps</span> <span class="tech-item">Bootstrap</span>
                     <span class="tech-item">Python</span> <span class="tech-item">PHP</span> <span
                        class="tech-item">Laravel</span> <span class="tech-item">WordPress</span> <span
                        class="tech-item">Flutter</span> <span class="tech-item">Seo</span> <span
                        class="tech-item">Ads</span> </div>
               </div>
            </div>
         </div> <!-- About Section -->
         <div class="content-section reveal-left" id="about"
            style="margin:0px 0 !important;display: block !important; opacity: 1; visibility: visible; transform: none; margin: 40px 0;">
            <div class="section-header-small">
               <div class="small-logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                        <linearGradient id="smallLogoGrad5" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#00f0ff" />
                           <stop offset="100%" style="stop-color:#ff00d4" />
                        </linearGradient>
                     </defs>
                     <polygon points="50,10 85,32 85,68 50,90 15,68 15,32" fill="none" stroke="url(#smallLogoGrad5)"
                        stroke-width="3" />
                     <circle cx="50" cy="50" r="10" fill="url(#smallLogoGrad5)" />
                  </svg> </div>
               <div class="small-brand">
                  <h3>TpSoftware Solution</h3>
                  <p>Digital Excellence</p>
               </div>
            </div> <!-- Back to Menu Button Removed -->
            <div class="section-header">
               <h2 class="section-title">About Us</h2>
               <p class="section-subtitle">Helping Delhi Businesses Grow with Technology & Marketing</p>
            </div>
            <div class="about-content">
               <div class="about-text">
                  <h3>Leading Digital Marketing & Software Development Agency in West Delhi</h3>
                  <p>TPSoftware Solution is a trusted digital marketing agency and software development company based in
                     West Delhi, serving businesses across Tilak Nagar, Uttam Nagar, Janakpuri, Vikaspuri, Rajouri
                     Garden, nearby areas and All over Delhi</p>
                  <p>We help local businesses, startups, and growing brands build a powerful online presence through
                     professional websites, custom software, SEO services, and high-converting Google Ads and social
                     media marketing campaigns.</p>
                  <p>As a results-driven digital marketing agency in Delhi, our goal is simple — generate more leads,
                     more customers, and more revenue for your business using the perfect combination of technology and
                     marketing.</p>
                  <p>Whether you are searching for a digital marketing agency near you or need experts who understand
                     the local Delhi market, TPSoftware Solution delivers strategies that work specifically for your
                     area and audience.</p>
                  <p>We are not just developers or marketers — we are growth partners for businesses across West Delhi.
                  </p>
               </div>
               <div class="about-image"> <img src="{{asset('images/abt-gif.gif')}}" alt="Digital marketing agency team working in West Delhi office"> </div>
            </div>
         </div>
         <h2 style="display:none;"> SEO Services in Tilak Nagar | Janakpuri | Uttam Nagar | West Delhi | Rajouri Garden
            | Hauz Khas | Punjabi-bagh | Dwarka | Paschim vihar | Okhla | Saket | Model Town | New Delhi </h2>
         <section class="whatwedo-section">
            <div class="text-wrapper">
               <h1 class="left-text">WHAT</h1>
               <h1 class="right-text">WE DO</h1>
            </div>
            <div class="services">
               <div class="service">Web Development</div>
               <div class="service">App Development</div>
               <div class="service">Digital Marketing</div>
            </div>
         </section>
         <style>
            .whatwedo-section {
               height: 60vh;
               position: relative;
               overflow: hidden;
               background: none;
               color: #fff;
            }

            .text-wrapper {
               position: absolute;
               width: 100%;
               top: 59%;
               display: flex;
               justify-content: space-between;
               padding: 0 10%;
            }

            .left-text,
            .right-text {
               font-size: 10vw;
               white-space: nowrap;
            }

            .services {
               position: absolute;
               top: 60%;
               left: 50%;
               transform: translate(-50%, -50%);
               text-align: center;
               opacity: 0;
            }

            .service {
               font-size: 4vw;
               margin: 10px 0;
            }

            @media(max-width:598px) {
               .whatwedo-section {
                  height: 60vh;
                  position: relative;
                  overflow: hidden;
                  background: none;
                  color: #fff;
               }

               .text-wrapper {
                  position: absolute;
                  width: 100%;
                  top: 59%;
                  display: flex;
                  justify-content: space-between;
                  padding: 0 10%;
               }

               .left-text,
               .right-text {
                  font-size: 12vw;
                  white-space: nowrap;
               }

               .services {
                  position: absolute;
                  top: 60%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  text-align: center;
                  opacity: 0;
               }

               .service {
                  font-size: 8vw;
                  margin: 10px 0;
               }
            }
         </style>
          <!-- Services Section -->
         <div class="content-section reveal-right" id="services"
            style="margin: 0px 0 !important; display: block !important; opacity: 1; visibility: visible; transform: none; margin: 100px 0;">
            <div class="section-header-small">
               <div class="small-logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                        <linearGradient id="smallLogoGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#00f0ff" />
                           <stop offset="100%" style="stop-color:#ff00d4" />
                        </linearGradient>
                     </defs>
                     <polygon points="50,10 85,32 85,68 50,90 15,68 15,32" fill="none" stroke="url(#smallLogoGrad2)"
                        stroke-width="3" />
                     <circle cx="50" cy="50" r="10" fill="url(#smallLogoGrad2)" />
                  </svg> </div>
               <div class="small-brand">
                  <h3>TpSoftware Solution</h3>
                  <p>Digital Excellence</p>
               </div>
            </div> <!-- Back to Menu Button Removed -->
            <div class="section-header">
               <h2 class="section-title text-reveal"> SEO, Website Development & Digital Marketing Company in Delhi
               </h2>
               <p class="section-subtitle"> Helping Delhi businesses get more leads, customers, and growth through
                  technology and marketing </p>
            </div>
            <div class="tabs-container">
               <div class="tab-buttons"> <button class="tab-btn active" onclick="switchTab(this, 'development')">SEO
                     Services</button> <button class="tab-btn" onclick="switchTab(this, 'design')">Website
                     Development</button> <button class="tab-btn" onclick="switchTab(this, 'consulting')">Digital
                     Marketing</button> <button class="tab-btn" onclick="switchTab(this, 'support')">Custom
                     Softwares</button> </div>
               <div class="tab-content">
                  <div class="tab-pane active" id="development">
                     <div class="services-list"> <a href="{{route('seo-service')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/seo-service.png')}}"
                                    alt="SEO services in West Delhi Tilak Nagar Janakpuri"> </div>
                              <div class="service-row-content">
                                 <h4>SEO Services , Digital Marketing services in Delhi That Bring Real Customers</h4>
                                 <p> TPSoftware Solution helps local businesses across Tilak Nagar, Janakpuri, Uttam
                                    Nagar, Rajouri Garden, Dwarka, Paschim Vihar, and all Delhi locations rank on Google
                                    when customers search for services near them. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a>  <a href="{{route('seo-service')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/on-page.jpg')}}"
                                    alt="On page technical SEO optimization Delhi"> </div>
                              <div class="service-row-content">
                                 <h4>On-Page, Technical & Local SEO Optimization</h4>
                                 <p> We optimize your website structure, speed, schema, keywords, Google Business
                                    Profile, and content so your business appears in top results and Google Maps. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a>  <a href="{{route('seo-service')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/google-rank.jpg')}}"
                                    alt="Google ranking traffic growth SEO Delhi"> </div>
                              <div class="service-row-content">
                                 <h4>Google Ranking, Traffic & Lead Generation</h4>
                                 <p> Our SEO strategy focuses on high-intent keywords that bring calls, enquiries, and
                                    real customers — not just traffic. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> </div>
                  </div>
                  <div class="tab-pane" id="design">
                     <div class="services-list"> <a href="{{route('website-development')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/bussines-web.jpg')}}"
                                    alt="Business Website Development in Delhi"> </div>
                              <div class="service-row-content">
                                 <h4>Business Website Development in Delhi</h4>
                                 <p> We create fast, mobile-friendly, SEO-ready websites for Delhi businesses that
                                    convert visitors into enquiries and customers. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> <a href="{{route('website-development')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/ecommerce-we.jpg')}}"
                                    alt="E-commerce Website Development"> </div>
                              <div class="service-row-content">
                                 <h4>E-commerce Website Development</h4>
                                 <p> Complete online store development with payment gateway, product management, and SEO
                                    structure to sell products across Delhi and India. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> <a href="{{route('website-development')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/landingpage.jpg')}}"
                                    alt="High-Converting Landing Pages for Ads"> </div>
                              <div class="service-row-content">
                                 <h4>High-Converting Landing Pages for Ads</h4>
                                 <p> Custom landing pages designed specifically for Google Ads and social media
                                    campaigns to maximize lead generation. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> </div>
                  </div>
                  <div class="tab-pane" id="consulting">
                     <div class="services-list"> <a href="{{route('digital-marketing')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/google-ads.jpg')}}" alt="Digital Strategy">
                              </div>
                              <div class="service-row-content">
                                 <h4>Google Ads Management in Delhi</h4>
                                 <p> Targeted Google Ads campaigns that bring instant leads from customers searching for
                                    your services in Delhi. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> <a href="{{route('digital-marketing')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/smo.png')}}" alt="Technology Audit"> </div>
                              <div class="service-row-content">
                                 <h4>Social Media Marketing</h4>
                                 <p> Facebook and Instagram marketing to build brand awareness and generate enquiries
                                    from local audiences. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> <a href="{{route('digital-marketing')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/performance_marketing-scaled.jpg')}}"
                                    alt="Process Optimization"> </div>
                              <div class="service-row-content">
                                 <h4>Content & Performance Marketing</h4>
                                 <p> Content strategies and performance tracking to turn visitors into long-term
                                    customers. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> </div>
                  </div>
                  <div class="tab-pane" id="support">
                     <div class="services-list"> <a href="{{asset('software-development')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/custom-software-development-services.png')}}"
                                    alt="24/7 Support"> </div>
                              <div class="service-row-content">
                                 <h4>Custom Software Development for Businesses</h4>
                                 <p> We develop custom web applications, CRM systems, and business software tailored to
                                    automate and grow your operations. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> <a href="{{asset('software-development')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/billing-software.png')}}" alt="Training">
                              </div>
                              <div class="service-row-content">
                                 <h4>Billing, Management & Automation Systems</h4>
                                 <p> Software solutions to manage billing, inventory, staff, and daily operations
                                    efficiently. </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> <a href="{{asset('software-development')}}">
                           <div class="service-row">
                              <div class="service-row-icon"> <img src="{{asset('images/help.jpg')}}" alt="Managed Services"> </div>
                              <div class="service-row-content">
                                 <h4>Ongoing Support & System Maintenance</h4>
                                 <p> Continuous support and upgrades to ensure your software and website run smoothly.
                                 </p>
                              </div>
                              <div class="service-row-arrow">→</div>
                           </div>
                        </a> </div>
                  </div>
               </div>
            </div>
         </div> <!-- Gallery Section -->
         <div class="content-section" id="gallery"
            style="display: block !important; opacity: 1; visibility: visible; transform: none; margin: 0px 0 !important;">
            <div class="section-header-small">
               <div class="small-logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                        <linearGradient id="smallLogoGrad3" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#00f0ff" />
                           <stop offset="100%" style="stop-color:#ff00d4" />
                        </linearGradient>
                     </defs>
                     <polygon points="50,10 85,32 85,68 50,90 15,68 15,32" fill="none" stroke="url(#smallLogoGrad3)"
                        stroke-width="3" />
                     <circle cx="50" cy="50" r="10" fill="url(#smallLogoGrad3)" />
                  </svg> </div>
               <div class="small-brand">
                  <h3>TpSoftware Solution</h3>
                  <p>Digital Excellence</p>
               </div>
            </div> <!-- Back to Menu Button Removed -->
            <div class="section-header">
               <h2 class="section-title">Areas We Serve Across Delhi</h2>
               <p class="section-subtitle intro-headline " style="font-size: 20px;">Providing <span>SEO</span>,
                  <span>website development</span>, <span>Google Ads</span>, and <span>software solutions</span> to
                  businesses across <span>all major locations of Delhi.</span> </p>
            </div>
            <div class="areas-content">
               <p> TPSoftware Solution works with local businesses across Delhi to help them rank on Google, generate
                  leads, and grow online. Our team actively provides services in Tilak Nagar, Janakpuri, Uttam Nagar,
                  Vikaspuri, Rajouri Garden, Paschim Vihar, Dwarka, Punjabi Bagh, Pitampura, Rohini, Karol Bagh, Patel
                  Nagar, Connaught Place, Laxmi Nagar, Preet Vihar, Okhla, Saket, Hauz Khas, Malviya Nagar, and many
                  other areas of Delhi. </p>
               <p> Whether you run a clinic, gym, shop, coaching center, real estate business, or service company — we
                  help your business appear when customers search for <strong>"SEO services near me"</strong>,
                  <strong>"website development company near me"</strong>, and <strong>"digital marketing agency in
                     Delhi"</strong>. </p>
               <p> Our local SEO strategies are designed specifically for Delhi-based searches, ensuring your business
                  gets visibility in both Google search results and Google Maps. </p>
            </div>
         </div> <!-- Testimonials Section -->
         <div class="content-section reveal-left" id="testimonials"
            style="display: block !important; opacity: 1; visibility: visible; transform: none; margin: 0px 0 !important;">
            <div class="section-header-small">
               <div class="small-logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                        <linearGradient id="smallLogoGrad4" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#00f0ff" />
                           <stop offset="100%" style="stop-color:#ff00d4" />
                        </linearGradient>
                     </defs>
                     <polygon points="50,10 85,32 85,68 50,90 15,68 15,32" fill="none" stroke="url(#smallLogoGrad4)"
                        stroke-width="3" />
                     <circle cx="50" cy="50" r="10" fill="url(#smallLogoGrad4)" />
                  </svg> </div>
               <div class="small-brand">
                  <h3>TpSoftware Solution</h3>
                  <p>Digital Excellence</p>
               </div>
            </div> <!-- Back to Menu Button Removed -->
            <div class="section-header">
               <h2 class="section-title">Why Businesses in Delhi Choose TPSoftware Solution</h2>
               <p class="section-subtitle">Helping local businesses generate leads through SEO, websites, and Google
                  Ads.</p>
            </div>
            <div class="testimonials-grid">
               <div class="testimonial-card">
                  <h4>Local SEO Experts for Delhi Market</h4>
                  <p> We specialize in ranking businesses in Tilak Nagar, Janakpuri, Uttam Nagar, Rajouri Garden,
                     Vikaspuri, Paschim Vihar, Dwarka, and across Delhi for high-intent searches like “service near me”
                     and “digital marketing agency in Delhi” etc. </p>
               </div>
               <div class="testimonial-card">
                  <h4>Websites Built for Lead Generation</h4>
                  <p> Our websites are designed to convert visitors into enquiries. Fast loading, mobile-friendly, and
                     SEO-optimized websites that bring consistent leads for local businesses. </p>
               </div>
               <div class="testimonial-card">
                  <h4>Transparent SEO & Ads Reporting</h4>
                  <p> We provide clear monthly reports including keyword rankings, traffic growth, and Google Ads
                     performance so you always know how your business is growing online. </p>
               </div>
               <div class="testimonial-card">
                  <h4>Complete Digital Growth Partner</h4>
                  <p> From website development to SEO, Google Ads, social media marketing, and custom software —
                     everything your business needs under one roof in Delhi. </p>
               </div>
            </div>
         </div> <!-- Contact Section -->
         <div class="content-section reveal-right" id="contact"
            style="display: block !important; opacity: 1; visibility: visible; transform: none; margin: 0px 0 !important;">
            <div class="section-header-small">
               <div class="small-logo"> <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                        <linearGradient id="smallLogoGrad6" x1="0%" y1="0%" x2="100%" y2="100%">
                           <stop offset="0%" style="stop-color:#00f0ff" />
                           <stop offset="100%" style="stop-color:#ff00d4" />
                        </linearGradient>
                     </defs>
                     <polygon points="50,10 85,32 85,68 50,90 15,68 15,32" fill="none" stroke="url(#smallLogoGrad6)"
                        stroke-width="3" />
                     <circle cx="50" cy="50" r="10" fill="url(#smallLogoGrad6)" />
                  </svg> </div>
               <div class="small-brand">
                  <h3>TpSoftware Solution</h3>
                  <p>Digital Excellence</p>
               </div>
            </div> <!-- Back to Menu Button Removed -->
            <div class="section-header">
               <h2 class="section-title">Get in Touch</h2>
               <p class="section-subtitle">Let's create something amazing together</p>
            </div>
            <div class="contact-grid ">
               <div class="contact-form">
                  <div class="form-group"> <input type="text" class="w-50" placeholder="Your Name"> </div>
                  <div class="form-group"> <input type="email" placeholder="Your Email"> </div>
                  <div class="form-group"> <input type="text" placeholder="Subject"> </div>
                  <div class="form-group"> <textarea placeholder="Your Message"></textarea> </div> <button
                     class="submit-btn">Send Message</button>
               </div>
               <div class="contact-info">
                  <div class="contact-item">
                     <div class="contact-icon">📍</div>
                     <div class="contact-details">
                        <h4>Location</h4>
                        <p>Uttam Nagar, Delhi 110059</p>
                     </div>
                  </div>
                  <div class="contact-item">
                     <div class="contact-icon">📧</div>
                     <div class="contact-details">
                        <h4>Email</h4> <a style="text-decoration: none; color: #fff;"
                           href="mailto:backuptpsoftwaresolution@gmail.com">backuptpsoftwaresolution@gmail.com</a>
                     </div>
                  </div>
                  <div class="contact-item">

                     <div class="contact-icon">📞</div>

                     <div class="contact-details">
                        <h4>Phone</h4> <a style="text-decoration: none; color: #fff;"
                           href="tel:7599958260">+91-7599958260</a>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>

    
   </div>




</section>
@endsection