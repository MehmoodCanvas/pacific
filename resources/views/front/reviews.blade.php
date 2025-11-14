@include('front.inc.header')

<section class="inner_banner_wrapper">
    <div class="index_banner_video">
        <video src="{{asset('assets/front/images/banner_vid.mp4')}}" loop autoplay playsinline muted></video>
    </div>
    <div class="container">
        <div class="inner_banner_text">
            <h6 class="heading">REVIEWS</h6>
        </div>
    </div>
</section>

<section class="reviews_wrapper">
    <div class="container">
        <div class="reviews_wrap_top">
            <h6 class="heading">Love Our Service?</h6>
            <a href="#sub_review" data-bs-toggle="modal" data-bs-target="#sub_review" class="common_line_btn">Submit your testimonial.</a>
        </div>
        <div class="testimonial_slider">
            <div class="testimonial_slide_wrap">
                @foreach($reviews as $review)
                <div class="testimonial_slide">
                    <div class="review_img">
                        <img src="{{asset('storage/review/'.$review->ratings_pic)}}" class="img-fluid" alt="">
                    </div>
                    <div class="review_text">
                        <ul>
                            @for($i = 0 ; $i <= $review->ratings_star ; $i++)
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path d="M10.25 16.6444L16.58 20.4644L14.9 13.2544L20.49 8.41437L13.12 7.77437L10.25 0.984375L7.37 7.78438L0 8.41437L5.59 13.2544L3.91 20.4644L10.25 16.6444Z" fill="#FFC247"/>
                                </svg>
                            </li>
                            @endfor
                        </ul>
                        <p class="desc">{{$review->ratings_feedback}}</p>
                        <h5>{{$review->ratings_name}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')
