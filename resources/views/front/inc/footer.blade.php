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
                                                <a href="{{ url('/') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('about-us') }}">
                                                    About
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('shop') }}">
                                                    Shop
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Patches
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('reviews') }}">
                                                    Reviews
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('smartpatch') }}">
                                                    SmartPatch®
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('contact-us') }}">
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
                                                <a href="https://www.instagram.com/doctorpatch/" target="_blank">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/rich-s-aka-dr-patch-5b85548/" target="_blank">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.twitter.com/doctorpatch" target="_blank">
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
                    <div class="file_input_wrap">
                        <img src="{{asset('assets/front/images/file_ico.png')}}" class="img-fluid" alt="">
                        <p>Accepted file types: jpg, gif, png, pdf, Max. file size: 10 MB.</p>
                        <input type="file">
                    </div>
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
            <div class="file_input_wrap">
                <img src="{{asset('assets/front/images/file_ico.png')}}" class="img-fluid" alt="">
                <p>Accepted file types: jpg, gif, png, pdf, Max. file size: 10 MB.</p>
                <input type="file" name='art_image'>
            </div>
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

<div class="modal qoute_modal fade" id="sub_review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sub_reviewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <button type="button" class="close_btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
          <div class="modal-body">
            <form action="{{ route('post.review') }}" method='POST' enctype="multipart/form-data">
                @csrf
            <div class="quote_modal_text">
                <h6 class="heading">SUBMIT A TESTIMONIAL <br> ON HOW WE DID!</h6>
                <div class="quote_modal_input">
                    <input type="text" placeholder="Enter Your Name *" name='name' required>
                </div>
                <div class="quote_modal_input">
                    <input type="text" placeholder="Business Name & Position *" name='position' required>
                </div>
                <div class="quote_modal_input">
                    <input type="email" placeholder="Enter Your Email *" name='email' required>
                </div>
                <div class="quote_modal_rating">
                    <div class="rating">
                        <input type="radio" value='1' name="clr" style="--c: #FFC247" />
                        <input type="radio" value='2' name="clr" style="--c: #FFC247" />
                        <input type="radio" value='3' name="clr" style="--c: #FFC247" />
                        <input type="radio" value='4' name="clr" style="--c: #FFC247" />
                        <input type="radio" value='5' name="clr" style="--c: #FFC247" />
                    </div>
                </div>
                <div class="quote_modal_input">
                    <label>Your Picture (optional)</label>
                    <div class="file_input_wrap">
                        <img src="{{asset('assets/front/images/file_ico.png')}}" class="img-fluid" alt="">
                        <p>Accepted file types: jpg, gif, png, pdf, Max. file size: 10 MB.</p>
                        <p>File types are png, and jpg. Under 5MB in size.</p>
                        <input type="file" name='r_file'>
                    </div>
                </div>
                <div class="quote_modal_input">
                    <textarea placeholder="Your Testimonial *" name='feedback' required></textarea>
                </div>
                <div class="quote_modal_checkbox">
                    <label class="check-container" for="check-box">
                        <input class="check" id="check-box" name="check-box" type="checkbox" />
                        <span class="check-toggle"></span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 180 161"
                            height="93"
                            width="72"
                            class="check-svg"
                        >
                            <defs>
                            <linearGradient y2="0%" x2="100%" y1="0%" x1="0%" id="neonLife">
                                <stop style="stop-color:#5E9732 ;stop-opacity:1" offset="0%"></stop>
                                <stop style="stop-color:#004712 ;stop-opacity:1" offset="100%"></stop>
                            </linearGradient>
                            </defs>
                            <path
                            stroke-linecap="round"
                            stroke-width="5"
                            pathLength="98"
                            stroke="url(#neonLife)"
                            d="M19.6498 44.725C22.7611 42.2105 21.2592 43.4425 25.498 39.887C27.4399 38.2582 29.3733 36.6193 31.3196 34.9958C33.2189 33.4116 35.0659 31.7608 37.0349 30.2641C37.9157 29.5946 38.7699 28.2817 39.8526 28.5097C40.296 28.603 32.2367 40.9382 31.8778 41.482C30.9129 42.9444 27.9937 46.8262 29.6449 46.2403C30.7482 45.8488 32.3434 44.4327 32.7816 46.0542C33.0806 47.1605 34.1022 46.2969 33.3133 48.0479C30.661 53.9347 26.0122 58.94 22.3613 64.1835C19.7684 67.9075 19.91 67.9632 23.6372 64.8215C26.2338 62.6328 28.7219 60.3185 31.2664 58.0695C34.2157 55.4628 37.116 52.7995 40.1184 50.2542C41.8317 48.8018 43.3453 46.9687 45.4084 46.0808C46.2059 45.7375 44.8192 47.7373 44.3185 48.4466C42.5755 50.9158 40.5345 53.1615 38.7096 55.5708C37.3792 57.3271 35.319 58.7865 34.8551 60.9404C34.5988 62.1304 37.0288 59.8042 37.9653 59.0265C38.3166 58.7348 53.2326 45.0539 54.7655 44.22C55.6812 43.7218 54.3415 46.3273 53.7287 47.1706C50.262 51.9422 46.3789 56.3978 42.6172 60.9404C38.0137 66.4998 33.2603 71.9337 28.6348 77.4748C24.8372 82.0241 16.614 91.3398 26.455 81.8344C31.2185 77.2333 35.8426 72.4901 40.5172 67.7987C45.7314 62.5659 50.9629 57.3498 56.1212 52.0618C58.7167 49.4011 61.8069 47.1062 63.777 43.9542C65.0596 41.902 60.0322 47.0245 58.2478 48.6593C51.2849 55.0385 28.5853 76.5513 22.2018 82.6318C5.56698 98.477 24.9566 80.3276 27.7841 77.6875C37.017 69.0664 46.233 60.4271 55.4566 51.796C65.2661 42.6167 75.023 33.3809 84.8835 24.2564C89.9806 19.5398 94.786 14.4588 100.328 10.274C102.433 8.68444 97.0891 14.446 95.3039 16.388C9.20893 110.046 144.837 -39.1865 43.3615 71.9456C35.559 80.4907 27.846 89.118 20.2081 97.8105C15.2893 103.408 0.666743 120.208 6.25221 115.275C18.5611 104.404 29.4632 92.0374 41.0223 80.3723C48.8415 72.4813 56.5722 64.5005 64.5213 56.7404C73.6647 47.8144 81.7534 39.8164 69.7315 55.2518C63.3997 63.3813 56.7431 71.2526 50.2198 79.2293C43.3809 87.592 36.3227 95.778 29.6449 104.27C26.9248 107.729 17.9266 113.505 22.0423 115.063C26.6629 116.811 29.8884 109.043 33.5791 105.759C38.9869 100.947 84.5509 58.4535 89.2963 54.0821C93.572 50.1433 112.817 31.8389 97.8559 47.7023C77.2695 69.5308 56.1052 90.7981 35.7855 112.883C33.3929 115.483 30.5553 117.772 28.7411 120.804C27.5307 122.828 32.2376 117.64 33.9247 115.993C39.6282 110.426 45.2396 104.766 50.911 99.1662C59.222 90.9605 67.5107 82.7318 75.872 74.5773C83.5273 67.1114 105.797 44.2482 99.5306 52.9125C90.9873 64.724 80.2965 74.8229 70.6087 85.7154C60.9287 96.5992 40.3613 118.723 72.9214 86.9382C82.6822 77.4098 92.3915 67.8286 102.056 58.2024C110.291 50.0002 118.588 41.8564 126.618 33.454C128.546 31.4371 134.341 25.6029 131.908 26.9679C127.376 29.5103 123.947 33.6517 120.079 37.1224C111.485 44.8341 97.2611 58.2607 88.2861 66.6291C82.1931 72.3103 83.6511 70.8222 91.0507 63.8645C95.2527 59.9135 99.4658 55.974 103.704 52.0618C106.838 49.1688 109.856 46.1379 113.167 43.4491C113.858 42.888 112.223 44.9695 111.626 45.6289C97.941 60.7254 83.2521 74.9501 69.891 90.3408C68.6147 91.811 64.6657 95.6467 66.5416 95.1257C70.1086 94.1348 72.6636 90.9571 75.6328 88.7458C81.8983 84.0797 88.0086 79.2083 94.2406 74.4976C101.206 69.2323 120.746 52.6852 116.118 60.0898C112.813 65.3778 108.027 69.5841 103.81 74.1786C96.9018 81.7069 63.5887 116.656 56.4402 124.579C53.7935 127.513 45.2693 135.112 48.997 133.803C54.8283 131.756 58.7066 126.149 63.4048 122.134C73.9496 113.121 84.2788 103.86 94.7191 94.7269C104.801 85.9078 114.803 76.9969 124.97 68.2772C142.784 53.0002 136.487 59.2455 123.641 71.9988C105.178 90.3284 86.3897 108.327 67.8707 126.599C64.3651 130.058 53.2122 139.581 57.4503 137.073C62.5337 134.064 66.161 129.092 70.4758 125.058C81.0209 115.198 91.5079 105.276 102.029 95.3915C112.597 85.4635 123.095 75.4608 133.742 65.619C144.071 56.0716 156.245 44.5276 140.654 61.6316C133.276 69.7254 125.688 77.6252 118.192 85.6091C107.833 96.6406 76.0274 129.003 87.0899 118.678C100.279 106.368 112.127 92.6949 124.678 79.7343C133.692 70.4252 142.732 61.1404 151.765 51.8492C159.589 43.8022 171.732 31.5395 159.527 43.6617C153.371 49.7771 147.232 55.9114 141.079 62.0303C134.544 68.5292 127.963 74.9832 121.461 81.5154C118.358 84.633 114.727 87.3346 112.264 90.9788C110.63 93.3945 116.745 87.2446 118.909 85.2901C121.736 82.7374 157.859 49.4491 160.059 47.4896C169.45 39.125 174.452 34.7311 163.993 47.0112C149.09 64.5099 132.208 80.6959 118.378 99.0865C113.417 105.683 131.391 88.9273 137.73 83.642C138.174 83.2713 154.991 68.0332 146.077 81.1432C142.713 86.0902 133.678 97.636 130.366 101.931C128.781 103.987 113.605 121.696 128.639 106.663C132.192 103.109 135.673 99.4836 139.272 95.9763C141.965 93.3509 144.481 90.494 147.512 88.2673C148.08 87.8501 147.389 89.7398 146.98 90.3142C137.833 103.171 127.037 115.185 116.623 127.025C104.71 140.569 162.679 71.5329 151.951 86.0344C144.657 95.8957 136.109 105.168 127.894 114.265C127.08 115.167 124.717 117.89 125.289 116.817C128.219 111.323 133.148 107.151 137.304 102.516C139.774 99.7614 142.251 97.0098 144.854 94.3813C145.889 93.3365 146.741 91.6605 148.203 91.5104C149.181 91.4101 147.456 93.3399 146.927 94.1687C145.323 96.6854 140.974 102.516 138.953 104.961C135.133 109.581 138.291 104.708 138.926 104.137C141.332 101.977 140.352 106.218 140.707 106.928"
                            ></path>
                        </svg>
                        <p class="check-label">I agree that my testimonial will be displayed on Pacific Emblem's website.</p>
                    </label>
                </div>
                <div class="quote_modal_btn">
                    <input type='submit' value='Submit'>
                </div>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>

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