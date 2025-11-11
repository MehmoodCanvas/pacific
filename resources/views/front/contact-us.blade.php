@include('front.inc.header')


<section class="inner_banner_wrapper">
    <div class="index_banner_video">
        <video src="{{asset('assets/front/images/banner_vid.mp4')}}" loop autoplay playsinline muted></video>
    </div>
    <div class="container">
        <div class="inner_banner_text">
            <h6 class="heading">Contact Us</h6>
        </div>
    </div>
</section>

<section class="contact-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="row gy-4">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <a href="#!" class="contact-socials-box">
                            <div class="contact-socials-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="contact-socials-text">
                                <h6>InstaGram</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <a href="#!" class="contact-socials-box">
                            <div class="contact-socials-icon">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div>
                            <div class="contact-socials-text">
                                <h6>linkedin</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <a href="#!" class="contact-socials-box">
                            <div class="contact-socials-icon">
                                <i class="fa-brands fa-twitter"></i>
                            </div>
                            <div class="contact-socials-text">
                                <h6>Twitter</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <a href="tel:800-872-8778" class="contact-socials-box">
                            <div class="contact-socials-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-socials-text">
                                <h6>Support</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="contact-form-box">
                    <div class="contact-form-ttext">
                        <h6>Drop us a message:</h6>
                    </div>
                    <div class="row gy-3">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="index-sixth-wrap-input">
                                <input type="text" placeholder="First Name*">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="index-sixth-wrap-input">
                                <input type="text" placeholder="Last Name*">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="index-sixth-wrap-input">
                                <input type="email" placeholder="Email*">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="index-sixth-wrap-input">
                                <input type="tel" placeholder="Phone*">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="contact-wrap-textarea">
                                <textarea  placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="contact-wrap-textarea1">
                                <button class="common_btn">Submit Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-bottom">
                        <h6>Or email us at:</h6>
                        <a href="mailto:quotes@PacificEmblem.com">
                        <div class="contact-form-etext common_btn">
                            <p><span><i class="fa-regular fa-copy"></i></span> quotes@PacificEmblem.com</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('front.inc.footer')