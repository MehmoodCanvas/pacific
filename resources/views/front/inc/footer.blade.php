            <footer class="footer_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                            <div class="footer-wrap-logo">
                                <img src="{{asset('assets/front/images/footer-logo.png')}}" class="img-fluid" />
                            </div>    
                            <div class="footer-wrap-rating">
                                <div class="footer-wrap-rating-img">
                                    <img src="{{asset("assets/front/images/rating-1.png")}}" class="img-fluid" />
                                </div>
                                <div class="footer-wrap-rating-img">
                                    <img src="{{asset('assets/front/images/rating-2.png')}}" class="img-fluid" />
                                </div>
                            </div>
                            <div class="footer-wrap-rating-tv">
                                <img src="{{asset('assets/front/images/rating-3.png')}}" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                            <div class="row justify-content-between">
                                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                                    <div class="footer-wrap-link">
                                        <h3>Quick links</h3>
                                        <ul>
                                            <li>
                                                <a href="index.php">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about-us.php">
                                                    About
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Shop
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Patches
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Reviews
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    SmartPatch®
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Contact
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                                    <div class="footer-wrap-link">
                                        <h3>Information</h3>
                                        <ul>
                                            <li>
                                                <a href="#!">
                                                    FAQs
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Returns & Exchanges
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Disclaimer
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Privacy Policy
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="footer-wrap-link con_margin">
                                        <h3>Contact Us</h3>
                                        <ul>
                                            <li>
                                                <a href="#!">
                                                    1277 North Cuyamaca Building A-B El Cajon, CA 92020
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Monday-Friday: 9am – 5pm PST
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tel:800-872-8778">
                                                    Phone: 800-872-8778
                                                </a>
                                                <br>
                                                <a href="tel:(619) 281-6687">
                                                    Fax: (619) 281-6687
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:quotes@PacificEmblem.com">
                                                    Email: quotes@PacificEmblem.com
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-5 col-xl-4">
                                    <div class="footer-wrap-link">
                                        <h3>Stay up to date with our news</h3>
                                    </div>
                                    <div class="footer-wrap-input">
                                        <input type="email" placeholder="Enter Your Email" />
                                        <button><img src="{{asset('assets/front/images/right_arrow.png')}}" class="img-fluid" alt=""></button>
                                    </div>
                                    <div class="footer-wrap-social">
                                        <ul>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p class="desc">Pacific Sportswear Company, ©Copyright {{ date('Y') }}. All rights reserved.</p>
                        <img src="{{asset('assets/front/images/copy_img.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </footer>
        </div>
    </div>

<!-- Modal -->
<div class="modal qoute_modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <button type="button" class="close_btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
          <div class="modal-body">
            <div class="quote_modal_text">
                <h6 class="heading">Request a Quick Quote!</h6>
                <div class="quote_modal_input">
                    <input type="text" placeholder="Enter Your Name">
                </div>
                <div class="quote_modal_input">
                    <input type="email" placeholder="Enter Your Email">
                </div>
                <div class="quote_modal_input">
                    <input type="number" placeholder="Enter Your Phone">
                </div>
                <div class="quote_modal_input">
                    <select name="" id="" class="minimal">
                        <option value="">Choose your product</option>
                        <option value="Custom Chenille Patches &amp; Emblems">Custom Chenille Patches &amp; Emblems</option>
                        <option value="Custom Embroidered &amp; Lasercut Patches">Custom Embroidered &amp; Lasercut Patches</option>
                        <option value="Custom Precision-Cut Soft PVC &amp; Rubber Patches">Custom Precision-Cut Soft PVC &amp; Rubber Patches</option>
                        <option value="Custom Woven Patches">Custom Woven Patches</option>
                        <option value="Custom Specialty Patches &amp; Trims">Custom Specialty Patches &amp; Trims</option>
                        <option value="Custom SMARTPATCH">Custom SMARTPATCH</option>
                        <option value="Custom Silicone Wristbands">Custom Silicone Wristbands</option>
                        <option value="Custom Terrycloth Headbands &amp; Wristbands">Custom Terrycloth Headbands &amp; Wristbands</option>
                        <option value="Custom Private Label Headwear">Custom Private Label Headwear</option>
                        <option value="Custom Dog Tags">Custom Dog Tags</option>
                        <option value="Custom Lanyards &amp; Event Badge Holders">Custom Lanyards &amp; Event Badge Holders</option>
                        <option value="Custom Lapel Pins &amp; Challenge Coins">Custom Lapel Pins &amp; Challenge Coins</option>
                        <option value="Licensed Products">Licensed Products</option>
                        <option value="Custom Soft PVC Rubber &amp; Metal Keychains">Custom Soft PVC Rubber &amp; Metal Keychains</option>
                        <option value="Custom Fidget Spinners">Custom Fidget Spinners</option>
                        <option value="Custom Resin &amp; Stickerdomes">Custom Resin &amp; Stickerdomes</option>
                        <option value="Custom Utensil Buddy">Custom Utensil Buddy</option>
                        <option value="Custom Uzappit Smart Tags">Custom Uzappit Smart Tags</option>
                    </select>
                </div>
                <div class="quote_modal_input">
                    <input type="text" placeholder="Enter Size">
                </div>
                <div class="quote_modal_input">
                    <input type="number" placeholder="Quantity">
                </div>
                <div class="quote_modal_input">
                    <label>Upload Art for Faster Quote</label>
                    <input type="file">
                </div>
                <div class="quote_modal_btn">
                    <a href="#!" class="common_btn dark_btn">Submit</a>
                </div>
            </div>
          </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal gallery_pro_modal fade" id="gallery1" tabindex="-1" aria-labelledby="gallery1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close_btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>

<div class="modal gallery_pro_modal fade" id="galleryModal" tabindex="-1" aria-labelledby="gallery1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close_btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            <div class="modal-body">
                <div class="gallery_pro_img">
                    <img src="{{asset('assets/front/images/photo1.png')}}" class="img-fluid" alt="">
                </div>
                <div class="gallery_pro_text">
                    <h6>Custom Martini Tornado Soft Enamel Lapel Pin</h6>
                    <p class="desc">2" Custom Martini Tornado Soft Enamel Lapel Pin with Shiny Gold Finish</p>
                </div>
                <div class="gallery_pro_btn">
                    <a href="#!" class="common_btn dark_btn">Get A Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="get_sticky_wrap">
    <a href="#getAquotec" data-bs-toggle="offcanvas" aria-controls="offcanvasRight" class="common_btn">GET A QUOTE</a>
</div>
<div class="offcanvas quote-modal offcanvas-end" tabindex="-1" id="getAquotec"
    aria-labelledby="offcanvasRightLabel">
    <div class="cart_product_wrap_htext">
        <h6>Request a Quick Quote!</h6>
    </div>
 <form method='POST' action='{{url("lead")}}' enctype="multipart/form-data">
    @csrf
    <div class="offcanvas-body">
        <div class="quote_input_wrap">
            <label for="">Name <span>(Required)</span></label>
            <input type="text" placeholder="Enter here..." required name='name'>
        </div>
        <div class="quote_input_wrap">
            <label for="">Email <span>(Required)</span></label>
            <input type="email" placeholder="Enter here..." required name='email'>
        </div>
        <div class="quote_input_wrap">
            <label for="">Phone <span>(Required)</span></label>
            <input type="tel" placeholder="Enter here..." required name='phone'>
        </div>
     
        <div class="quote_input_wrap">
            <label for="">Product <span>(Required)</span></label>
            <select name="product_id" id="" class="minimal" required> 
                <option value="">Choose your product</option>
                @foreach($sidebars as $sidebar)
                <option value="{{ $sidebar->product_id }}">{{ $sidebar->product_name }}</option>
              @endforeach
            </select>
        </div>
        <div class="quote_input_wrap">
            <label for="">Size <span>(Required)</span></label>
            <input type="number" placeholder="Enter here..." required name='product_size'>
        </div>
        <div class="quote_input_wrap">
            <label for="">Quantity (minimum 250) <span>(Required)</span></label>
            <input type="number" placeholder="Enter here..." required name='quantity'>
            <p>Please enter a number greater than or equal to 250.</p>
        </div>
        <div class="quote_input_wrap">
            <label for="">Upload Art for Faster Quote</label>
            <input type="file" name='art_image'>
            <p>Accepted file types: jpg, gif, png, pdf, Max. file size: 10 MB.</p>
        </div>
    </div>
    <div class="offcanvas-footer">
        <div class="cart-modal-product-btn">
            <button class="common_btn" type='submit'>Submit</button>
        </div>

    </div>
    </form>
</div>
@if(request()->segment(1) == 'product')
<div class="offcanvas quote-modal offcanvas-end" tabindex="-1" id="getAquote"
    aria-labelledby="offcanvasRightLabel">
    <div class="cart_product_wrap_htext">
        <h6>Request a Quick Quote!</h6>
    </div>
    <form method='POST' action='{{url("lead")}}' enctype="multipart/form-data">
    @csrf
    <div class="offcanvas-body">
        <div class="quote_input_wrap">
            <label for="">Name <span>(Required)</span></label>
            <input type="text" placeholder="Enter here..." required name='name'>
        </div>
        <div class="quote_input_wrap">
            <label for="">Email <span>(Required)</span></label>
            <input type="email" placeholder="Enter here..." required name='email'>
        </div>
        <div class="quote_input_wrap">
            <label for="">Phone <span>(Required)</span></label>
            <input type="tel" placeholder="Enter here..." required name='phone'>
        </div>
     
        <div class="quote_input_wrap">
            <label for="">Size <span>(Required)</span></label>
            <input type="hidden" name='product_id' value='{{$product->product_id}}'>
            <input type="text" placeholder="Enter here..." required name='product_size'>
        </div>
        <div class="quote_input_wrap">
            <label for="">Quantity (minimum 250) <span>(Required)</span></label>
            <input type="text" placeholder="Enter here..." required name='quantity' >
            <p>Please enter a number greater than or equal to 250.</p>
        </div>
        <div class="quote_input_wrap">
            <label for="">Upload Art for Faster Quote</label>
            <input type="file" name='art_image'>
            <p>Accepted file types: jpg, gif, png, pdf, Max. file size: 10 MB.</p>
        </div>
    </div>
    <div class="offcanvas-footer">
        <div class="cart-modal-product-btn">
            <button class="common_btn" type='submit'>Submit</button>
        </div>
    </div>
    </form>

</div>
@endif
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js/gsap.min.js')}}"></script>
<script src="{{asset('assets/front/js/scrolltrigger.min.js')}}"></script>
<script src="{{asset('assets/front/js/scrollsmoother.min.js')}}"></script>
<script src="{{asset('assets/front/js/custom.js')}}"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const video = document.querySelector(".banN_1");
    const img1 = document.querySelector(".banN_2");
    const img2 = document.querySelector(".banN_3");

    let loopSequence = () => {
        video.style.opacity = "1";
        img1.style.opacity = "0";
        img2.style.opacity = "0";

        setTimeout(() => {
            video.style.opacity = "0";
            img1.style.opacity = "1";
        }, 55000);

        setTimeout(() => {
            img1.style.opacity = "0";
            img2.style.opacity = "1";
        }, 55000 + 5000);

        setTimeout(() => {
            img2.style.opacity = "0";
            loopSequence();
        }, 55000 + 5000 + 5000);
    };

    loopSequence();
});
</script>

// <script>
// document.addEventListener("DOMContentLoaded", function () {
//     const videoBox = document.querySelector(".third_cr1");
//     const img1Box = document.querySelector(".third_cr2");
//     const img2Box = document.querySelector(".third_cr3");

//     function show(boxToShow, ...boxesToHide) {
//         boxToShow.style.opacity = "1";
//         boxToShow.classList.add("visible");

//         boxesToHide.forEach(box => {
//             box.style.opacity = "0";
//             box.classList.remove("visible");
//         });
//     }

//     function loopSequence() {
//         // Step 1: Show video
//         show(videoBox, img1Box, img2Box);

//         setTimeout(() => {
//             show(img1Box, videoBox, img2Box);
//         }, 3100);

//         setTimeout(() => {
//             show(img2Box, videoBox, img1Box);
//         }, 5000 + 4000);

//         setTimeout(() => {
//             loopSequence();
//         }, 3100 + 5000 + 4700);
//     }

//     loopSequence();
// });
// </script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const screens = document.querySelectorAll(".smartPatch_phone_screen");
    const button = document.querySelector(".smartpatch-second-box-wrap2 button");
    let currentIndex = 0;

    screens[currentIndex].classList.add("active");

    button.addEventListener("click", function () {
        screens[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % screens.length;
        screens[currentIndex].classList.add("active");
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".products_filter_wrap_btn button");
    const productCols = document.querySelectorAll(".products_wrap_products .col-6");
    const productsWrap = document.querySelector(".products_wrap_products");

    buttons.forEach((btn, index) => {
        btn.addEventListener("click", () => {
            buttons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            productCols.forEach(col => {
                if (index === 0) {
                    col.className = "col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3";
                    productsWrap.classList.remove("second_active");
                } else {
                    col.className = "col-6 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2";
                    productsWrap.classList.add("second_active");
                }
            });
        });
    });
});
</script>

<script>
var swiper = new Swiper(".eight_tab_slider", {
  slidesPerView: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: ".index_eight_tab_nav .swiper_btn_next",
    prevEl: ".index_eight_tab_nav .swiper_btn_prev",
  },
  breakpoints: {
    640: { slidesPerView: 4, spaceBetween: 10 },
    768: { slidesPerView: 5, spaceBetween: 10 },
    1024: { slidesPerView: 6, spaceBetween: 20 },
  },
});

  </script>

  <script>
    var swiper = new Swiper(".pro_media_slides", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".pro_media_slider", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".pro_media_wrap_btn .swiper_btn_next",
        prevEl: ".pro_media_wrap_btn .swiper_btn_prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>

</body>
</html>