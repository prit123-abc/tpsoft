
 @php
$faqSchema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "Do you provide SEO services in Tilak Nagar, Janakpuri, Uttam Nagar, and other areas of Delhi?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes. TPSoftware Solution provides local SEO services across Tilak Nagar, Janakpuri, Uttam Nagar, Vikaspuri, Rajouri Garden, Paschim Vihar, Dwarka and all major areas of Delhi."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "How long does it take to rank on Google in Delhi?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Visible improvements start within 30–45 days. Strong rankings for competitive keywords usually take 3–4 months with proper SEO."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you build SEO-friendly websites for Delhi businesses?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes. We design fast, mobile-friendly, and SEO-optimized websites that convert visitors into customers and improve Google rankings."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Do you manage Google Ads and social media ads?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes. We run targeted Google Ads and Facebook/Instagram campaigns that generate instant leads for Delhi businesses."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Why should I choose TPSoftware Solution over other digital marketing agencies in Delhi?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "We focus on rankings, leads, and business growth through SEO, websites, and ads management for Delhi businesses."
            ]
        ],
    ]
];
@endphp

<script type="application/ld+json">
{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
</script>


<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

<script src="{{ asset('js/main-gsap.js') }}"></script>
<script src="{{ asset('js/templatemo-nexa-scripts.js') }}"></script>
