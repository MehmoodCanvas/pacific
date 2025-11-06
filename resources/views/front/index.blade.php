@include('front.inc.header')

<section class="index_banner_wrapper">
    <div class="index_banner_video banN_1">
        <video src="{{ asset('assets/front/images/banner_vid.mp4') }}" loop autoplay playsInline muted></video>
    </div>
    <div class="index_banner_img banN_2">
        <img src="{{ asset('assets/front/images/banner_img1.png') }}" class="img-fluid" alt="">
    </div>
    <div class="index_banner_img banN_3">
        <img src="{{ asset('assets/front/images/banner_img2.png') }}" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="index_banner_text">
            <h6 class="heading">The <span>Gold</span> Standard in Custom Patches & Emblems</h6>
            <p class="desc">Since 1985, we’ve mastered the art of custom headwear, patches, and more from bold embroidery to cutting-edge LaserCUT™ and soft PVC. If you can imagine it, we can create it.</p>
            <div class="index_banner_btns">
                <a href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="common_btn">Request a Quote</a>
                <a href="#!" class="common_btn">Talk to a Patch Expert</a>
            </div>
            <p>Excellent <span>★★★★★</span> 3,973 reviews on <span>★</span> Trustpilot</p>
        </div>
    </div>
</section>

<section class="inn_marquee">
    <div class="inn_marquee_wrap">
        <p>40 Years in Business</p>
        <p>Intense Quality</p>
        <p>Constant Service</p>
        <p>Pricing that works</p>
        <p>On Time and Early Deliveries</p>
        <p>Get a Quick Quote</p>
        <p>40 Years in Business</p>
        <p>Intense Quality</p>
        <p>Constant Service</p>
        <p>Pricing that works</p>
        <p>On Time and Early Deliveries</p>
        <p>Get a Quick Quote</p>
    </div>
</section>

<section class="index_first_wrapper">
    <div class="container">
        <div class="common_top_text">
            <h6 class="heading">CHECK OUT THE MANY CUSTOM <br> PATCH PROCESSES WE OFFER</h6>
            <div class="first_swiper_button">
                <div class="swiper_button_prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                        <rect x="63.1522" y="63.3522" width="62.7043" height="62.7043" transform="rotate(-180 63.1522 63.3522)" stroke="#C8C8C8" stroke-width="0.895775"/>
                        <path d="M38.5183 31.54L24.1626 31.54" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M31.3404 38.7179L24.1626 31.54L31.3404 24.3622" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper_button_next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="64" viewBox="0 0 65 64" fill="none">
                        <rect x="1.17201" y="0.647839" width="62.7043" height="62.7043" stroke="#C8C8C8" stroke-width="0.895775"/>
                        <path d="M24.8871 31.54L39.2428 31.54" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32.065 24.3622L39.2428 31.54L32.065 38.7179" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper index_first_slider">
        <div class="swiper-wrapper">

            @foreach($products as $item)
            <div class="swiper-slide">
                <div class="index_first_cr_box">
                    <div class="index_first_cr_img">
                        @php
                            $image = json_decode($item->product_image);
                        @endphp
                        <img src="{{ asset('storage/product/'.$image[0]) }}" class="img-fluid" alt="{{ $item->product_name }}">
                    </div>
                    <div class="index_first_cr_text">
                        <h6>{{ $item->product_name }}</h6>
                        <a href="{{ url('product/'.$item->product_slug) }}" class="common_btn">Request A Quote</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="index_third_wrapper">
    <div class="index_third_wrap_box third_cr1">
        <div class="index_third_wrap_box_video">
            <video src="{{ asset('assets/front/images/third_cr_vid11.mp4') }}" loop autoplay muted playsInline></video>
        </div>
        <div class="index_third_wrap_box_text">
            <img src="{{ asset('assets/front/images/third_cr_img1.png') }}" class="img-fluid" alt="">
            <h6 class="heading">Turn Your Patch Into a Digital Experience</h6>
            <a href="#!" class="common_line_btn">Learn More About SmartPatch®</a>
        </div>
    </div>
    <div class="index_third_wrap_box third_cr2">
        <div class="index_third_wrap_box_video">
            <img src="{{ asset('assets/front/images/third_cr_img2.png') }}" class="img-fluid" alt="">
        </div>
        <div class="index_third_wrap_box_text">
            <h6 class="heading">GET YOUR CUSTOM PATCHES TODAY!</h6>
            <a href="#!" class="common_line_btn">Get A Quote</a>
        </div>
    </div>
    <div class="index_third_wrap_box third_cr3">
        <div class="index_third_wrap_box_video">
            <img src="{{ asset('assets/front/images/third_cr_img3.png') }}" class="img-fluid" alt="">
        </div>
        <div class="index_third_wrap_box_text">
            <h6 class="heading">LET PACIFIC EMBLEM MAKE ALL YOUR SPORTS TEAM PATCHES</h6>
            <a href="#!" class="common_line_btn">Order Now</a>
        </div>
    </div>
</section>

<section class="index_second_wrapper">
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Why Choose Our Custom Patches</h6>
            <p class="desc">At Pacific Emblem, we are proud of the service we provide and know you will love the pricing, quality and delivery of our Patches/Emblems and other products. Since 1985, we have become “the quiet FORCE” in custom Patches, Headwear and Accessories!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="row gx-lg-5">
                    <div class="col-md-3 col-sm-6">
                        <div class="index_second_cr_box">
                            <img src="{{ asset('assets/front/images/second_cr_img1.png') }}" class="img-fluid" alt="">
                            <h6>24-Hour Service</h6>
                            <p class="desc">We’re here 24/7 with real support and smart AI—ready whenever you need help.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="index_second_cr_box">
                            <img src="{{ asset('assets/front/images/second_cr_img2.svg') }}" class="img-fluid" alt="">
                            <h6>High Quality Materials</h6>
                            <p class="desc">Premium threads. Durable fabric. Built to last and look sharp.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="index_second_cr_box">
                            <img src="{{ asset('assets/front/images/second_cr_img3.svg') }}" class="img-fluid" alt="">
                            <h6>Satisfaction Guarantee</h6>
                            <p class="desc">Report any production or quality issues within 20 days for a refund or replacement.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="index_second_cr_box">
                            <img src="{{ asset('assets/front/images/second_cr_img4.svg') }}" class="img-fluid" alt="">
                            <h6>Bulk Order Discounts</h6>
                            <p class="desc">Save up to 74% on bulk orders — the more you buy, the more you save!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index_fourth_wrapper">
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Our Trusted Partners</h6>
        </div>
    </div>
    <div class="index_fourth_marquee">
        <div class="index_fourth_marquee_wrap">
            <img src="{{ asset('assets/front/images/fourth_mrq_1.png') }}" class="img-fluid" alt="">
            <img src="{{ asset('assets/front/images/fourth_mrq_2.png') }}" class="img-fluid" alt="">
            <img src="{{ asset('assets/front/images/fourth_mrq_3.png') }}" class="img-fluid" alt="">
            <img src="{{ asset('assets/front/images/fourth_mrq_4.png') }}" class="img-fluid" alt="">
            <img src="{{ asset('assets/front/images/fourth_mrq_5.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>

<section class="index_ninth_wrapper">
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Follow us on Instagram</h6>
            <p class="desc">@DOCTORPATCH and @PACIFICEMBLEM</p>
        </div>
    </div>
    <div class="ninth_mqruee_wrap">
        <div class="ninth_mqruee_slide_wrap">
            @for($i=1; $i<=10; $i++)
                <div class="ninth_marquee_slide">
                    <img src="{{ asset('assets/front/images/ninth_mqr_img'.$i.'.png') }}" class="img-fluid" alt="">
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="index_eleventh_wrapper">
    <div class="index_eleventh_lft_bg">
        <img src="{{ asset('assets/front/images/eleven_ico_img.png') }}" class="img-fluid" alt="">
    </div>
    <div class="index_eleventh_rit_bg">
        <img src="{{ asset('assets/front/images/eleven_ico_img.png') }}" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Help Support the Residents of Maui…</h6>
            <a href="https://mauistrong.help/" target="_blank" class="common_btn dark_btn">Click Here</a>
        </div>
    </div>
</section>

@include('front.inc.footer')
