@include('front.inc.header')


<section class="index_banner_wrapper">
    <div class="index_banner_video banN_1">
        <video src="assets/front/images/banner_vid.mp4" loop autoplay playsInline muted></video>
    </div>
    <div class="index_banner_img banN_2">
        <img src="assets/front/images/banner_img1.png" class="img-fluid" alt="">
    </div>
    <div class="index_banner_img banN_3">
        <img src="assets/front/images/banner_img2.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="index_banner_text">
            <h6 class="heading">The <span>Gold</span> Standard in Custom Patches & Emblems</h6>
            <p class="desc">Since 1985, we’ve mastered the art of custom headwear, patches, and more from bold embroidery to cutting-edge LaserCUT™ and soft PVC. If you can imagine it, we can create it.</p>
            <div class="index_banner_btns">
                <a href="#staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="common_btn">Request a Quote</a>
                <a href="#!" class="common_btn">Talk to a Patch Expert</a>
            </div>
            <p>Excellent   <span>★★★★★</span>   3,973  reviews on  <span>★</span>  Trustpilot</p>
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
                        <img src="{{ asset('storage/product/'.$image[0]) }}" class="img-fluid" alt="">
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
            <video src="assets/front/images/third_cr_vid11.mp4" loop autoplay muted playsInline></video>
        </div>
        <div class="index_third_wrap_box_text">
            <img src="assets/front/images/third_cr_img1.png" class="img-fluid" alt="">
            <h6 class="heading">Turn Your Patch Into a Digital Experience</h6>
            <a href="#!" class="common_line_btn">Learn More About SmartPatch®</a>
        </div>
    </div>
    <div class="index_third_wrap_box third_cr2">
        <div class="index_third_wrap_box_video">
            <img src="assets/front/images/third_cr_img2.png" class="img-fluid" alt="">
        </div>
        <div class="index_third_wrap_box_text">
            <h6 class="heading">GET YOUR CUSTOM PATCHES TODAY!</h6>
            <a href="#!" class="common_line_btn">Get A Quote</a>
        </div>
    </div>
    <div class="index_third_wrap_box third_cr3">
        <div class="index_third_wrap_box_video">
            <img src="assets/front/images/third_cr_img3.png" class="img-fluid" alt="">
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                <div class="row gx-lg-5">
                    <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="index_second_cr_box">
                            <img src="assets/front/images/second_cr_img1.png" class="img-fluid" alt="">
                            <h6>24-Hour Service</h6>
                            <p class="desc">We’re here 24/7 with real support and smart AI—ready whenever you need help.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="index_second_cr_box">
                            <img src="assets/front/images/second_cr_img2.svg" class="img-fluid" alt="">
                            <h6>High Quality Materials</h6>
                            <p class="desc">Premium threads. Durable fabric. Built to last and look sharp.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="index_second_cr_box">
                            <img src="assets/front/images/second_cr_img3.svg" class="img-fluid" alt="">
                            <h6>Satisfaction Guarantee</h6>
                            <p class="desc">Report any Production or quality issues within 20 days for a refund or replacement. We LOVE making patches right!</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="index_second_cr_box">
                            <img src="assets/front/images/second_cr_img4.svg" class="img-fluid" alt="">
                            <h6>Bulk Order Discounts</h6>
                            <p class="desc">Save up to 74% on bulk orders of custom patches - the more you buy with us, the more you save!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index_sixth_wrapper">
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">WHAT ARE CUSTOMERS SAYING ABOUT US</h6>
        </div>
    </div>
    <div class="testimonial_slider">
        <div class="testimonial_slide_wrap">
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>colinandmandy94</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Jennifer Black</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Phillip Colligan</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Leslie Carrillo</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>colinandmandy94</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Jennifer Black</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Phillip Colligan</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Leslie Carrillo</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>colinandmandy94</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Jennifer Black</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Phillip Colligan</h5>
            </div>
            <div class="testimonial_slide">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                        </svg>
                    </li>
                </ul>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <h5>Leslie Carrillo</h5>
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
            <img src="assets/front/images/fourth_mrq_1.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_2.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_3.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_4.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_5.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_1.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_2.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_3.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_4.png" class="img-fluid" alt="">
            <img src="assets/front/images/fourth_mrq_5.png" class="img-fluid" alt="">
        </div>
    </div>
</section>

<!--<section class="index_fifth_wrapper">-->
<!--    <div class="container">-->
<!--        <div class="common_top_text">-->
<!--            <h6 class="heading">Custom Patches & EMBLEMS</h6>-->
<!--            <a href="#!" class="common_line_btn dark_btn">View All Patches</a>-->
<!--        </div>-->
<!--        <div class="row gx-md-3 gy-md-3">-->
<!--            <div class="col-6 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">-->
<!--                <div class="index_first_cr_box">-->
<!--                    <div class="index_fifth_cr_img">-->
<!--                        <img src="assets/front/images/fifth_cr_img1.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_fifth_cr_hov_img">-->
<!--                        <img src="assets/front/images/fifth_cr_hov_img1.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_first_cr_text">-->
<!--                        <h6>Custom Silicone and Terry <br> Cloth Wristbands</h6>-->
<!--                        <a href="#!" class="common_btn">Order Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">-->
<!--                <div class="index_first_cr_box">-->
<!--                    <div class="index_fifth_cr_img">-->
<!--                        <img src="assets/front/images/fifth_cr_img2.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_fifth_cr_hov_img">-->
<!--                        <img src="assets/front/images/fifth_cr_hov_img2.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_first_cr_text">-->
<!--                        <h6>Custom Private Label <br> Headwear</h6>-->
<!--                        <a href="#!" class="common_btn">Order Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">-->
<!--                <div class="index_first_cr_box">-->
<!--                    <div class="index_fifth_cr_img">-->
<!--                        <img src="assets/front/images/fifth_cr_img3.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_fifth_cr_hov_img">-->
<!--                        <img src="assets/front/images/fifth_cr_hov_img3.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_first_cr_text">-->
<!--                        <h6>Custom Lanyards & <br> Event Badge Holders</h6>-->
<!--                        <a href="#!" class="common_btn">Order Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">-->
<!--                <div class="index_first_cr_box">-->
<!--                    <div class="index_fifth_cr_img">-->
<!--                        <img src="assets/front/images/fifth_cr_img4.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_fifth_cr_hov_img">-->
<!--                        <img src="assets/front/images/fifth_cr_hov_img4.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_first_cr_text">-->
<!--                        <h6>Custom Lapel Pins & <br> Challenge Coins</h6>-->
<!--                        <a href="#!" class="common_btn">Order Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">-->
<!--                <div class="index_first_cr_box">-->
<!--                    <div class="index_fifth_cr_img">-->
<!--                        <img src="assets/front/images/fifth_cr_img5.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_fifth_cr_hov_img">-->
<!--                        <img src="assets/front/images/fifth_cr_hov_img5.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_first_cr_text">-->
<!--                        <h6>Custom Soft PVC, Rubber <br> & Metal Keychains</h6>-->
<!--                        <a href="#!" class="common_btn">Order Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">-->
<!--                <div class="index_first_cr_box">-->
<!--                    <div class="index_fifth_cr_img">-->
<!--                        <img src="assets/front/images/fifth_cr_img6.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_fifth_cr_hov_img">-->
<!--                        <img src="assets/front/images/fifth_cr_hov_img6.png" class="img-fluid" alt="">-->
<!--                    </div>-->
<!--                    <div class="index_first_cr_text">-->
<!--                        <h6>Custom Resin and <br> StickerDOMES™</h6>-->
<!--                        <a href="#!" class="common_btn">Order Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="index_seventh_wrapper">-->
<!--    <div class="container">-->
<!--        <div class="common_top_text">-->
<!--            <h6 class="heading">Photo Gallery</h6>-->
<!--            <a href="#!" class="common_line_btn dark_btn">View All</a>-->
<!--        </div>-->
<!--        <div class="row gx-lg-3 gy-lg-3">-->
<!--            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">-->
<!--                <div class="gallery_img" data-bs-toggle="modal" data-bs-target="#galleryModal">-->
<!--                    <img src="assets/front/images/photo1.png" class="img-fluid" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">-->
<!--                <div class="row gx-lg-3 gy-lg-3">-->
<!--                    <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">-->
<!--                        <div class="gallery_img">-->
<!--                            <img src="assets/front/images/photo2.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">-->
<!--                        <div class="gallery_img">-->
<!--                            <img src="assets/front/images/photo3.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">-->
<!--                        <div class="gallery_img">-->
<!--                            <img src="assets/front/images/photo4.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">-->
<!--                        <div class="gallery_img">-->
<!--                            <img src="assets/front/images/photo5.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="index_eight_wrapper">-->
<!--    <div class="container">-->
<!--        <div class="common_top_text">-->
<!--            <h6 class="heading">Discover Your Style</h6>-->
<!--            <div class="index_eight_tab_navf">-->
<!--                <div class="index_eight_tab_nav">-->
<!--                    <div class="swiper_btn_prev">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 64 64" fill="none">-->
<!--                            <rect x="63.1522" y="63.3522" width="62.7043" height="62.7043" transform="rotate(-180 63.1522 63.3522)" stroke="#C8C8C8" stroke-width="0.895775"></rect>-->
<!--                            <path d="M38.5183 31.54L24.1626 31.54" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                            <path d="M31.3404 38.7179L24.1626 31.54L31.3404 24.3622" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <div class="swiper_btn_next">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 65 64" fill="none">-->
<!--                            <rect x="1.17201" y="0.647839" width="62.7043" height="62.7043" stroke="#C8C8C8" stroke-width="0.895775"></rect>-->
<!--                            <path d="M24.8871 31.54L39.2428 31.54" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                            <path d="M32.065 24.3622L39.2428 31.54L32.065 38.7179" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <a href="#!" class="common_line_btn dark_btn">Shop ALL</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="index_eight_tabs">-->
<!--          <div class="nav nav-tabs" id="nav-tab" role="tablist">-->
<!--              <div class="swiper eight_tab_slider">-->
<!--                <div class="swiper-wrapper">-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link active" id="nav-MERROWED-tab" data-bs-toggle="tab" data-bs-target="#nav-MERROWED" type="button" role="tab" aria-controls="nav-MERROWED" aria-selected="true">MERROWED/EMBROIDERED PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-LASERCUT-tab" data-bs-toggle="tab" data-bs-target="#nav-LASERCUT" type="button" role="tab" aria-controls="nav-LASERCUT" aria-selected="false">LASERCUT EMBROIDERED PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-WOVEN-tab" data-bs-toggle="tab" data-bs-target="#nav-WOVEN" type="button" role="tab" aria-controls="nav-WOVEN" aria-selected="false">WOVEN PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-SOFT-tab" data-bs-toggle="tab" data-bs-target="#nav-SOFT" type="button" role="tab" aria-controls="nav-SOFT" aria-selected="false">SOFT PVC/RUBBER PATCHES & KEYCHAINS</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-DYE-tab" data-bs-toggle="tab" data-bs-target="#nav-DYE" type="button" role="tab" aria-controls="nav-DYE" aria-selected="false">DYE SUBLIMATION</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-SILICONE-tab" data-bs-toggle="tab" data-bs-target="#nav-SILICONE" type="button" role="tab" aria-controls="nav-SILICONE" aria-selected="false">SILICONE/TPU</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-LARGE-tab" data-bs-toggle="tab" data-bs-target="#nav-LARGE" type="button" role="tab" aria-controls="nav-LARGE" aria-selected="false">LARGE BACK PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-CHENILLE-tab" data-bs-toggle="tab" data-bs-target="#nav-CHENILLE" type="button" role="tab" aria-controls="nav-CHENILLE" aria-selected="false">CHENILLE PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-TACKLE-tab" data-bs-toggle="tab" data-bs-target="#nav-TACKLE" type="button" role="tab" aria-controls="nav-TACKLE" aria-selected="false">TACKLE TWILL</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-MIXED-tab" data-bs-toggle="tab" data-bs-target="#nav-MIXED" type="button" role="tab" aria-controls="nav-MIXED" aria-selected="false">MIXED MEDIUM</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-PATCHES-tab" data-bs-toggle="tab" data-bs-target="#nav-PATCHES" type="button" role="tab" aria-controls="nav-PATCHES" aria-selected="false">SMARTPATCH® PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-KEYCHAINS-tab" data-bs-toggle="tab" data-bs-target="#nav-KEYCHAINS" type="button" role="tab" aria-controls="nav-KEYCHAINS" aria-selected="false">SMARTPATCH® KEYCHAINS</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-LABELS-tab" data-bs-toggle="tab" data-bs-target="#nav-LABELS" type="button" role="tab" aria-controls="nav-LABELS" aria-selected="false">WOVEN LABELS</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-FIRE-tab" data-bs-toggle="tab" data-bs-target="#nav-FIRE" type="button" role="tab" aria-controls="nav-FIRE" aria-selected="false">FIRE/POLICE PATCHES</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-CHALLENGE-tab" data-bs-toggle="tab" data-bs-target="#nav-CHALLENGE" type="button" role="tab" aria-controls="nav-CHALLENGE" aria-selected="false">CHALLENGE COINS/LAPEL PINS</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-TRULY-tab" data-bs-toggle="tab" data-bs-target="#nav-TRULY" type="button" role="tab" aria-controls="nav-TRULY" aria-selected="false">TRULY CUSTOM™ HEADWEAR</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-PACKAGING-tab" data-bs-toggle="tab" data-bs-target="#nav-PACKAGING" type="button" role="tab" aria-controls="nav-PACKAGING" aria-selected="false">PACKAGING AVAILABLE</button>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <button class="nav-link" id="nav-BACKINGS-tab" data-bs-toggle="tab" data-bs-target="#nav-BACKINGS" type="button" role="tab" aria-controls="nav-BACKINGS" aria-selected="false">PATCH BACKINGS AVAILABLE</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--              </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="tab-content" id="nav-tabContent">-->
<!--          <div class="tab-pane fade show active" id="nav-MERROWED" role="tabpanel" aria-labelledby="nav-MERROWED-tab">-->
<!--            <div class="row gy-lg-5">-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img1.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img1.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>3D-Mixed Medium-1</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img2.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img2.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Embroidery Patches-7</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img3.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img3.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Dye Sublimation-1</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img4.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img4.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Large Back Patches-1</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img5.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img5.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Chenille Patches-4</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img6.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img6.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Large Back Patches-13</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img7.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img7.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Lasercut Patches-2</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">-->
<!--                <div class="index_eight_cr_box">-->
<!--                    <div class="index_eight_cr_img_wrap">-->
<!--                        <div class="index_eight_cr_img">-->
<!--                            <img src="assets/front/images/eight_img8.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                        <div class="index_eight_cr_hov_img">-->
<!--                            <img src="assets/front/images/eight_hov_img8.png" class="img-fluid" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="index_eight_cr_text">-->
<!--                        <h6>Merrowed Patches-2</h6>-->
<!--                        <p class="desc">$0.32+</p>-->
<!--                        <a href="#!" class="common_btn dark_btn">CUSTOMIZE</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--          </div>-->
<!--          <div class="tab-pane fade" id="nav-LASERCUT" role="tabpanel" aria-labelledby="nav-LASERCUT-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-WOVEN" role="tabpanel" aria-labelledby="nav-WOVEN-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-SOFT" role="tabpanel" aria-labelledby="nav-SOFT-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-DYE" role="tabpanel" aria-labelledby="nav-DYE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-SILICONE" role="tabpanel" aria-labelledby="nav-SILICONE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-LARGE" role="tabpanel" aria-labelledby="nav-LARGE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-CHENILLE" role="tabpanel" aria-labelledby="nav-CHENILLE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-TACKLE" role="tabpanel" aria-labelledby="nav-TACKLE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-MIXED" role="tabpanel" aria-labelledby="nav-MIXED-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-PATCHES" role="tabpanel" aria-labelledby="nav-PATCHES-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-KEYCHAINS" role="tabpanel" aria-labelledby="nav-KEYCHAINS-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-LABELS" role="tabpanel" aria-labelledby="nav-LABELS-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-FIRE" role="tabpanel" aria-labelledby="nav-FIRE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-CHALLENGE" role="tabpanel" aria-labelledby="nav-CHALLENGE-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-TRULY" role="tabpanel" aria-labelledby="nav-TRULY-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-PACKAGING" role="tabpanel" aria-labelledby="nav-PACKAGING-tab">...</div>-->
<!--          <div class="tab-pane fade" id="nav-BACKINGS" role="tabpanel" aria-labelledby="nav-BACKINGS-tab">...</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="index_ninth_wrapper">
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Follow us in Instagram</h6>
            <p class="desc">@DOCTORPATCH and @PACIFICEMBLEM</p>
        </div>
    </div>
    <div class="ninth_mqruee_wrap">
        <div class="ninth_mqruee_slide_wrap">
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img1.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img2.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img3.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img4.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img5.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img6.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img7.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img8.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img9.png" class="img-fluid" alt="">
            </div>
            <div class="ninth_marquee_slide">
                <img src="assets/front/images/ninth_mqr_img10.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section class="index_tenth_wrapper">
    <div class="index_tenth_bimg">
        <img src="assets/front/images/tenth_bbg.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="index_tenth_wrap_text">
                    <h6 class="heading">Frequently Asked <br> Questions</h6>
                    <div class="index_tenth_wrap_btn">
                        <a href="#!" class="common_btn dark_btn">VIEW ALL</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="index_tenth_acc_wrap">
                    <div class="accordion-container">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                What types of patches do you offer? <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>We love making patches and offer over 15 processes including LaserCUT™ Embroidered, Merrowed, Woven, Dye Sublimation, TPU and Silicone, Soft PVC/Rubber, Chenille, Metal Badges, Reflective, Glow, Sequins and more…. and don’t forget out patented SmartPatch®</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                What is the minimum order? <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>Most patches have a 100 piece minimum, but we CAN and will work with you on lower minimums…just ask!</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                How long does production take? <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>First time orders take between 2-3 weeks with reorders in 2 weeks. Just give us an extra week on Soft PVC/Rubber and Silicone as we have to make molds for these.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Can I see a sample first? <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>Yes, for every job, once you place the order, we make an actual sample of the patch by eproof for your approval. It is FREE as part of your order, however if you only require a sample with no order, cost is between $95-$135 (depending on the process)</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                How do I pay for my order? <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>We accept payments by Credit Cards (Visa and MC preferred with Amex at a 4.5% higher cost), Check, Wire or ACH. Paypal is accepted under special approval.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                How do I contact <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>Pacific Emblem to get a quote? You can send your art and price request to quotes@pacificemblem.com or call (800) UAS-8778 and we will get back to you soon</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Why should I buy from Pacific Emblem? <span class="icon"><i class="fa-solid fa-plus"></i></span>
                            </button>
                            <div class="accordion-content">
                                <p>Sure you have a choice out there, but withi over 40 years in business and the guidance and caring help from Dr. Patch, he won’t let you down… We love what we do and it shows. Just give us a shot and you will see! And remember, we have a satisfaction guarantee but have not had to refund or remake any jobs for years! Let us make your custom Patches and Emblems!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index_eleventh_wrapper">
    <div class="index_eleventh_lft_bg">
        <img src="assets/front/images/eleven_ico_img.png" class="img-fluid" alt="">
    </div>
    <div class="index_eleventh_rit_bg">
        <img src="assets/front/images/eleven_ico_img.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Help Support the Residents of Maui…</h6>
            <a href="https://mauistrong.help/" target="_blank" class="common_btn dark_btn">Click Here</a>
        </div>
    </div>
</section>

@include('front.inc.footer')
