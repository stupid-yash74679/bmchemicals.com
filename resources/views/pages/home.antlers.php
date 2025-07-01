<!-- Banner Area Start -->
<div class="banner__three">
    <div class="banner swiper banner-slider">
        <div class="swiper-wrapper">

            <div class="banner__three-image swiper-slide"
                style="background-image: url('/storage/homepage/hero/3.webp');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="banner__three-content">
                                <span class="subtitle" data-animation="fadeInUp" data-delay=".4s">
                                    Trusted by Industries Nationwide
                                </span>
                                <h1 data-animation="fadeInUp" data-delay=".8s">
                                    Your Partner for Industrial, Agricultural & Commercial Inputs
                                </h1>
                                <div class="banner__three-content-button" data-animation="fadeInUp" data-delay="1.2s">
                                    <a class="default_button" href="/request-quote">
                                        Request a Quote<i class="flaticon-right-up"></i>
                                    </a>
                                    <div class="banner__three-content-button-tel">
                                        <div class="banner__three-content-button-tel-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="banner__three-content-button-tel-info">
                                            <span>Talk to Our Technical Team</span>
                                            <h6><a href="tel:+17323719999">+1 (732) 371-9999</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner__three-arrow">
        <div class="banner__three-arrow-prev banner-button-prev">
            <i class="fal fa-long-arrow-left"></i>
        </div>
        <div class="banner__three-arrow-next banner-button-next">
            <i class="fal fa-long-arrow-right"></i>
        </div>
    </div>
</div>
<!-- Banner Area End -->
<!-- About Area Start -->
<div class="about__three overflow-hidden section-padding">
    <div class="container">
        <div class="row al-center">
            <div class="col-lg-6">
                <div class="about__three-left mr-30 xl-mr-0 lg-mb-25">
                    <div class="row">
                        <div class="col-6">
                            <img class="wow one img_top_animation"
                                src="/storage/homepage/aboutus/fertilizer-distributor-texas.webp" alt="image">
                            <img class="two wow mt-25 img_bottom_animation"
                                src="/storage/homepage/aboutus/humic-acid-supplier-california.webp" alt="image">
                        </div>
                        <div class="col-6">
                            <img class="three mb-25 wow img_bottom_animation"
                                src="/storage/homepage/aboutus/warehousing-chemical-mexico.webp" alt="image">
                            <div class="about__three-left-experience bounce_y">
                                <h3><span class="counter">15</span>+ Years</h3>
                                <span>of Expertise in Chemical Distribution</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__three-right ml-30 xl-ml-0">
                    <div class="about__three-right-title">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">About B&M Chemicals</span>
                        <h2 class="title_split_anim mb-20">USA-Based. Globally Aligned. Industry Trusted.</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            B&M Chemicals is a USA-based provider of specialty and industrial chemical solutions, serving sectors such as agriculture, pharmaceuticals, coatings, personal care, and more. With over 15 years of experience, we deliver high-purity, application-ready materials across North America and beyond. Our focus is on product quality, regulatory compliance, and customer-centric logistics that drive industry performance.
                        </p>
                    </div>
                    <div class="about__three-right-list pb-45 wow fadeInUp" data-wow-delay=".9s">
                        <div class="row mt-45">
                            <div class="col-sm-6">
                                <div class="about__three-right-list-item">
                                    <i class="flaticon-data-science"></i>
                                    <h5>Industry-Ready Formulations</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 sm-mt-25">
                                <div class="about__three-right-list-item">
                                    <i class="flaticon-data"></i>
                                    <h5>Application Support Across Sectors</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about__three-right-btn mt-50 item_bounce">
                        <a class="default_button" href="/about-us">Learn More About Us<i class="flaticon-right-up"></i></a>
                        <img class="sm-display-n" src="assets/img/pages/users.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->
<!-- Services Area Start -->
<div class="services__three overflow-hidden section-padding">
    <div class="bg_shape" style="background-image: url('assets/img/shape/bg.png');"></div>
    <div class="container">
        <div class="row al-end mb-30">
            <div class="col-lg-7 lg-mb-25">
                <div class="services__three-title lg-t-center">
                    <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Our Products</span>
                    <h2 class="title_split_anim">Specialty Chemicals That Power Progress</h2>
                </div>
            </div>
            <div class="col-lg-5 t-right lg-t-center">
                <div class="item_bounce mb-10">
                    <a class="default_button" href="/products">View All Products<i class="flaticon-right-up"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            {{ collection:products limit="6" sort="date:desc" }}
            <div class="col-lg-4 col-md-6 mt-25 wow fadeInUp" data-wow-delay=".4s">
                <div class="services__three-item">
                    <div class="services__three-item-image">
                        <img src="{{ image }}" alt="EDTA Chelates">
                    </div>
                    <div class="services__three-item-content">
                        <span>{{ index + 1 }}</span>
                        <h5><a href="{{ url }}">{{ title }}</a></h5>
                        <p>{{ content }}</p>
                        <a class="more_btn" href="{{ url }}">Explore More<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
            </div>
            {{ /collection:products }}
        </div>
    </div>
</div>
<!-- Services Area End -->
<!-- Features Area Start -->
<div class="features__area overflow-hidden section-padding">
    <div class="container">
        <div class="row mb-60 jc-center">
            <div class="col-xl-6">
                <div class="features__area-title t-center">
                    <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Why Clients Choose B&M</span>
                    <h2 class="title_split_anim">Your Trusted Chemical Supply Partner</h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay=".6s">
            <div class="col-lg-12">
                <div class="features__area-btn mb-60">
                    <div class="features__area-btn-item active" data-tag="features1">
                        <h6>Product Purity</h6>
                    </div>
                    <div class="features__area-btn-item" data-tag="features2">
                        <h6>Industry-Specific Solutions</h6>
                    </div>
                    <div class="features__area-btn-item" data-tag="features3">
                        <h6>Fast U.S. Delivery</h6>
                    </div>
                    <div class="features__area-btn-item" data-tag="features4">
                        <h6>Technical Support</h6>
                    </div>
                </div>
                <div class="features__area-content">
                    <div class="features__area-content-item active" id="features1">
                        <div class="row al-center">
                            <div class="col-lg-6 lg-mb-25">
                                <div class="features__area-content-item-left mr-50 lg-mr-0">
                                    <img class="img_full" src="/storage/homepage/whyus/edta-chelates-iowa.webp" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="features__area-content-item-right">
                                    <h4 class="mb-20">Industry-Grade Purity & Compliance</h4>
                                    <p class="mb-20">All our products meet strict regulatory and industrial standards. Whether you're in coatings, pharma, or agriculture, we ensure every molecule counts and complies.</p>
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Meets global industry specs</li>
                                        <li><i class="flaticon-check-mark"></i>Consistent, tested batches</li>
                                        <li><i class="flaticon-check-mark"></i>High-performance formulations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features__area-content-item d-none" id="features2">
                        <div class="row al-center">
                            <div class="col-lg-6">
                                <div class="features__area-content-item-right">
                                    <h4 class="mb-20">Sector-Specific Chemical Solutions</h4>
                                    <p class="mb-20">From pharmaceuticals to personal care, we offer chemical solutions tailored to your sector’s specific challenges and formulation standards.</p>
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Custom packages by industry</li>
                                        <li><i class="flaticon-check-mark"></i>Full formulation support</li>
                                        <li><i class="flaticon-check-mark"></i>Agro & non-agro specialization</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 lg-mt-25">
                                <div class="features__area-content-item-left ml-50 lg-ml-0">
                                    <img class="img_full" src="/storage/homepage/whyus/micronutrients-nebraska.webp" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features__area-content-item d-none" id="features3">
                        <div class="row al-center">
                            <div class="col-lg-6 lg-mb-25">
                                <div class="features__area-content-item-left mr-50 lg-mr-0">
                                    <img class="img_full" src="/storage/homepage/whyus/foliar-feed-indiana.webp" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="features__area-content-item-right">
                                    <h4 class="mb-20">Reliable U.S. Logistics & Fulfillment</h4>
                                    <p class="mb-20">With fulfillment hubs across the U.S., we ensure on-time delivery for both bulk and specialty orders — because timing matters in every industry.</p>
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Based in Arlington, TX</li>
                                        <li><i class="flaticon-check-mark"></i>Serving all 50 states</li>
                                        <li><i class="flaticon-check-mark"></i>Quick turnaround & tracking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features__area-content-item d-none" id="features4">
                        <div class="row al-center">
                            <div class="col-lg-6">
                                <div class="features__area-content-item-right">
                                    <h4 class="mb-20">Technical Support Across Industries</h4>
                                    <p class="mb-20">Get expert guidance on product selection, handling, and regulatory needs—whether you're in pharma, paint, agro, or industrial use.</p>
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Experts for each vertical</li>
                                        <li><i class="flaticon-check-mark"></i>Guidance on blending & usage</li>
                                        <li><i class="flaticon-check-mark"></i>Fast technical resolution</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 lg-mt-25">
                                <div class="features__area-content-item-left ml-50 lg-ml-0">
                                    <img class="img_full" src="/storage/homepage/whyus/humic-fulvic-acids-texas.webp" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Area End -->


<!-- Video Area Start -->
<div class="video__area" style="background-image: url('assets/img/banner/banner-2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 t-center">
                <div class="video video-pulse item_bounce">
                    <a class="video-popup" href="https://youtube.com/watch?v=0WC-tD-njcA"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Area End -->

<div class="chooses__two overflow-hidden section-padding">
    <div class="container">
        <div class="row al-center">
            <div class="col-lg-6 lg-mb-30">
                <div class="chooses__two-left mr-30 lg-mr-0">
                    <img class="one wow img_left_animation" src="/storage/homepage/whyus/edta-chelates-georgia.webp" alt="image">
                    <div class="t-right">
                        <img class="two wow img_top_animation" src="/storage/homepage/whyus/micronutrients-alabama.webp" alt="image">
                    </div>
                    <div class="chooses__two-left-project bounce_y">
                        <i class="flaticon-project-1"></i>
                        <h3><span class="counter">500</span>+</h3>
                        <span>Clients Across Sectors</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chooses__two-right ml-30 xl-ml-0">
                    <div class="chooses__two-right-title">
                        <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Why Industries Rely on Us</span>
                        <h2 class="title_split_anim mb-20">Built for Scale. Trusted for Quality.</h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">From agriculture to industrial coatings and pharma-grade materials, B&M Chemicals delivers quality-assured products, responsive support, and a deep understanding of cross-industry needs. We bridge product performance with practical application.</p>
                    </div>
                    <div class="chooses__two-right-list">
                        <div class="row">
                            <div class="col-md-6 mt-25 wow fadeInUp" data-wow-delay=".3s">
                                <div class="chooses__two-right-list-item">
                                    <i class="flaticon-idea-1"></i>
                                    <h5>Certified Product Quality</h5>
                                    <p>Every lot batch-tested for purity, consistency, and compliance.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mt-25 wow fadeInUp" data-wow-delay=".6s">
                                <div class="chooses__two-right-list-item">
                                    <i class="flaticon-strategy"></i>
                                    <h5>Solutions for Every Industry</h5>
                                    <p>Tailored chemical offerings for agriculture, coatings, pharma, and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog__three section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 columns_sticky lg-mb-25">
                <div class="blog__three-left mr-45 xl-mr-0 overflow-hidden lg-t-center">
                    <span class="subtitle wow fadeInLeft" data-wow-delay=".4s">Industry Insights</span>
                    <h2 class="title_split_anim">Explore Trends, Applications & Product Knowledge</h2>
                    <div class="item_bounce">
                        <a class="default_button mt-40" href="/blogs">View All Articles<i class="flaticon-right-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="blog__three-right wow fadeInUp" data-wow-delay=".4s">
                    {{ collection:blogs limit="5" }}
                    <div class="blog__three-right-item mb-30">
                        <div class="blog__three-right-item-image">
                            <div class="img"><a href="{{ url }}"><img src="{{ thumbnail_image_url }}" alt="{{ title }}"></a></div>
                        </div>
                        <div class="blog__three-right-item-content">
                            <div class="blog__one-item-content-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>bmchemicals</a></li>
                                </ul>
                            </div>
                            <h5><a href="{{ url }}">{{ title }}</a></h5>
                            <a class="more_btn" href="{{ url }}">Read More<i class="flaticon flaticon-right-up"></i></a>
                        </div>
                    </div>
                    {{ /collection:blogs }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Area End -->
{{ partial src="_parts/footer-cta" }}
