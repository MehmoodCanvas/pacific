
@include('front.inc.header')
<section class="pro_detail_wrapper">
    <div class="container">
        <div class="row align-items-center gx-md-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 col-xxl-11">
                        <div class="pro_media_wrap">
                            <div class="swiper pro_media_slider">
                                <div class="swiper-wrapper">
                                    @php
                                        $image = json_decode($product->product_image)
                                    @endphp
                                    @foreach($image as $img)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/product/'.$img) }}" />
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            <div thumbsSlider="" class="swiper pro_media_slides">
                                <div class="swiper-wrapper">
                                    @php
                                        $image = json_decode($product->product_image)
                                    @endphp
                                    @foreach($image as $img)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/product/'.$img) }}" />
                                    </div>
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
                        <div class="pro_media_wrap_btns">
                            <div class="pro_media_wrap_btn">
                                <a href="#!">
                                    <img src="{{asset('assets/front/images/pro_ico1.png')}}" alt="">
                                </a>
                                <a href="#!">
                                    <img src="{{asset('assets/front/images/pro_heart_ico.png')}}" alt="">
                                </a>
                            </div>
                            <div class="pro_media_wrap_btn">
                                <div class="swiper_btn_prev">
                                    <img src="{{asset('assets/front/images/pro_prev_ico.png')}}" class="img-fluid" alt="">
                                </div>
                                <div class="swiper_btn_next">
                                    <img src="{{asset('assets/front/images/pro_nxt_ico.png')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="pro_detail_text">
                    <h6 class="heading">{{ $product->product_name }}</h6>
                    <div class="pro_detail_text_1">
                        <!--<p><span>$0.12+</span> $0.32+</p>-->
                        <h5>
                            1,238 Sold 
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                                     <path d="M12.8052 1.45951C13.2443 0.108258 15.1559 0.108256 15.595 1.45951L17.8223 8.31436C18.0186 8.91866 18.5817 9.3278 19.2171 9.3278H26.4248C27.8455 9.3278 28.4363 11.1459 27.2868 11.981L21.4558 16.2176C20.9417 16.591 20.7266 17.253 20.923 17.8573L23.1502 24.7122C23.5893 26.0634 22.0427 27.1871 20.8933 26.352L15.0622 22.1154C14.5481 21.742 13.8521 21.742 13.338 22.1154L7.50693 26.352C6.35748 27.1871 4.81091 26.0635 5.24996 24.7122L7.47724 17.8573C7.67358 17.253 7.45849 16.591 6.94444 16.2176L1.11336 11.981C-0.0360906 11.1459 0.554644 9.3278 1.97544 9.3278H9.18306C9.81845 9.3278 10.3816 8.91866 10.5779 8.31436L12.8052 1.45951Z" fill="#FFA439"/>
                                </svg>
                            4.5
                            </span>
                        </h5>
                    </div>
                    <h4>Description:</h4>
                    <p class="desc1">{{$product->product_description}}</p>
                    <div class="pro_detail_btn">
                        <a href="#getAquote" data-bs-toggle="offcanvas" aria-controls="offcanvasRight" class="common_btn dark_btn">Get Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="index_eight_wrapper">
    <div class="container">
        <div class="common_top_text">
            <h6 class="heading">Recent Products</h6>
            <a href="{{ url('shop') }}" class="common_line_btn dark_btn">Shop ALL</a>
        </div>
        <div class="row gy-lg-5">
            @foreach($recentProducts as $recentProduct)
            <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                <div class="index_eight_cr_box">
                    <div class="index_eight_cr_img_wrap">
                        <div class="index_eight_cr_img">
                            @php 
                                $image = json_decode($recentProduct->product_image);
                            @endphp

                            <img src="{{ asset('storage/product/'.$image[0]) }}" class="img-fluid" alt="">
                        </div>
                        @if(!empty($image[1]))
                        <div class="index_eight_cr_hov_img">
                            <img src="{{ asset('storage/product/'.$image[1]) }}" class="img-fluid" alt="">
                        </div>
                        @endif
                    </div>
                    <div class="index_eight_cr_text">
                        <h6>{{ $recentProduct->product_name }}</h6>
                        <a href="{{ url('product/'.$recentProduct->product_slug) }}" class="common_btn dark_btn">CUSTOMIZE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="index_eight_wrapper">
    <div class="container">
        <div class="common_top_text">
            <h6 class="heading">Patch & Emblem Processes – Comparison Guide</h6>
            <div class="index_eight_tab_navf">
                <div class="index_eight_tab_nav">
                    <div class="swiper_btn_prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 64 64" fill="none">
                            <rect x="63.1522" y="63.3522" width="62.7043" height="62.7043" transform="rotate(-180 63.1522 63.3522)" stroke="#C8C8C8" stroke-width="0.895775"></rect>
                            <path d="M38.5183 31.54L24.1626 31.54" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M31.3404 38.7179L24.1626 31.54L31.3404 24.3622" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="swiper_btn_next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 65 64" fill="none">
                            <rect x="1.17201" y="0.647839" width="62.7043" height="62.7043" stroke="#C8C8C8" stroke-width="0.895775"></rect>
                            <path d="M24.8871 31.54L39.2428 31.54" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M32.065 24.3622L39.2428 31.54L32.065 38.7179" stroke="black" stroke-width="1.79155" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="index_eight_tabs">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <div class="swiper eight_tab_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <button class="nav-link active" id="nav-MERROWED-tab" data-bs-toggle="tab" data-bs-target="#nav-MERROWED" type="button" role="tab" aria-controls="nav-MERROWED" aria-selected="true">Soft PVC / Rubber Patches</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-LASERCUT-tab" data-bs-toggle="tab" data-bs-target="#nav-LASERCUT" type="button" role="tab" aria-controls="nav-LASERCUT" aria-selected="false">LaserCUT Embroidered Patches</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-WOVEN-tab" data-bs-toggle="tab" data-bs-target="#nav-WOVEN" type="button" role="tab" aria-controls="nav-WOVEN" aria-selected="false">Silicone & TPU Patches</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-SOFT-tab" data-bs-toggle="tab" data-bs-target="#nav-SOFT" type="button" role="tab" aria-controls="nav-SOFT" aria-selected="false">Woven Patches</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-DYE-tab" data-bs-toggle="tab" data-bs-target="#nav-DYE" type="button" role="tab" aria-controls="nav-DYE" aria-selected="false">Dye Sublimation (Printed) Patches</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-SILICONE-tab" data-bs-toggle="tab" data-bs-target="#nav-SILICONE" type="button" role="tab" aria-controls="nav-SILICONE" aria-selected="false">Reflective / Glow Patches</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-LARGE-tab" data-bs-toggle="tab" data-bs-target="#nav-LARGE" type="button" role="tab" aria-controls="nav-LARGE" aria-selected="false">Metal Badges / Emblems</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-CHENILLE-tab" data-bs-toggle="tab" data-bs-target="#nav-CHENILLE" type="button" role="tab" aria-controls="nav-CHENILLE" aria-selected="false">CHENILLE PATCHES</button>
                    </div>
                    <div class="swiper-slide">
                        <button class="nav-link" id="nav-TACKLE-tab" data-bs-toggle="tab" data-bs-target="#nav-TACKLE" type="button" role="tab" aria-controls="nav-TACKLE" aria-selected="false">Merrowed Patches (Merrow Border)</button>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-MERROWED" role="tabpanel" aria-labelledby="nav-MERROWED-tab">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="pro_comparison_img">
                            <img src="{{ asset('assets/front/images/comparison_img1.png') }}" class="img-fluid" alt="" lazy="loading">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="pro_comparison_text">
                            <h6 class="heading">How They Are Made:</h6>
                            <p>Produced from soft polyvinyl chloride (PVC) or rubber, poured or injected into custom steel molds. Multiple colors can be layered, and raised/3D details can be achieved with precision.</p>
                        </div>
                        <div class="pro_comparison_text">
                            <h6 class="heading">Uses:</h6>
                            <p>Durable and waterproof, ideal for outdoor gear, uniforms, tactical/military use, sports, and lifestyle branding where long-lasting, flexible logos are needed.</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="tab-pane fade" id="nav-LASERCUT" role="tabpanel" aria-labelledby="nav-LASERCUT-tab">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Standard embroidered patches stitched with thread, then precisely cut using laser technology for sharp, clean edges. This allows custom shapes beyond traditional round/square cuts.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Apparel branding, uniforms, event merch, and high-detail designs where embroidery texture and durability are desired with a modern edge finish.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-WOVEN" role="tabpanel" aria-labelledby="nav-WOVEN-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img3.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Molded from silicone or thermoplastic polyurethane (TPU). Similar to PVC but softer (silicone) or more rigid and abrasion-resistant (TPU). Often allows semi-transparent or glossy effects.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Premium athletic wear, outdoor gear, technical jackets, footwear, hats, and luxury branding—used when a high-end, “tech” look is required.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-SOFT" role="tabpanel" aria-labelledby="nav-SOFT-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img4.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Made on a loom using tightly woven threads, rather than stitched embroidery. This achieves very fine detail and small lettering that embroidery can’t match.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Best for intricate logos, small patches, and fashion branding where detail and a flatter surface are more important than texture.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-DYE" role="tabpanel" aria-labelledby="nav-DYE-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img5.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Designs are digitally printed onto polyester twill using dye sublimation, where heat and pressure embed the ink into the fibers. Edges can be finished with stitching or laser cut.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Full-color designs, gradients, photographic images, complex logos. Popular for sports teams, event giveaways, and promotional patches.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-SILICONE" role="tabpanel" aria-labelledby="nav-SILICONE-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img6.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Constructed with reflective materials (glass bead or prism layers) or glow-in-the-dark (phosphorescent/fluorescent threads, inks, or PVC). Can be embroidered, woven, or PVC-based.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Safety gear, outdoor wear, cycling/running apparel, uniforms, tactical/military, or nightlife branding where visibility and novelty are key.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-LARGE" role="tabpanel" aria-labelledby="nav-LARGE-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img7.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Created using die-cast, die-struck, or etched metal, often with plating (nickel, silver, gold) and enamel filling. Molded or stamped for detail, polished for finish.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Lapel pins, hat emblems, luxury product branding, keychains, police/firefighter badges, and commemorative items.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-CHENILLE" role="tabpanel" aria-labelledby="nav-CHENILLE-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img8.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>Produced with chenille yarns tufted into a felt base, creating a fuzzy, carpet-like texture. Often combined with embroidery for outlines and lettering.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Classic varsity jackets, sports teams, collegiate branding, retro fashion. Highly tactile and bold.</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-TACKLE" role="tabpanel" aria-labelledby="nav-TACKLE-tab">
              <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_img">
                        <img src="{{ asset('assets/front/images/comparison_img9.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="pro_comparison_text">
                        <h6 class="heading">How They Are Made:</h6>
                        <p>A thick stitched border (done with a Merrow machine) wraps around the edge of a patch. Provides a sealed edge, prevents fraying, and creates a rounded finish.</p>
                    </div>
                    <div class="pro_comparison_text">
                        <h6 class="heading">Uses:</h6>
                        <p>Traditional patches (round, square, shield shapes). Common for scout patches, biker patches, and collectible/emblematic uses. Less common for complex shapes where laser cutting is preferred.</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="index_eight_wrapper">
    <div class="container">
        <div class="common_center_text">
            <h6 class="heading">Quick Comparison Table</h6>
        </div>
        <div class="pro_comparison_table">
            <img src="{{ asset('assets/front/images/comparison_table.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>

@include('front.inc.footer')
