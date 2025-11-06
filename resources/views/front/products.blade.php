@include('front.inc.header')
<section class="inner_banner_wrapper">
    <div class="index_banner_video">
        <video src="{{asset('assets/front/images/banner_vid.mp4')}}" loop autoplay playsinline muted></video>
    </div>
    <div class="container">
        <div class="inner_banner_text">
            <h6 class="heading">Products</h6>
        </div>
    </div>
</section>

<section class="products_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                <div class="products_wrap_right_box">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                      </ol>
                    </nav>
                    <div class="products_wrap_related_box">
                        <ul>
                            <li>
                                Related Categories
                            </li>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ url('category/'.$category->category_slug) }}">{{ $category->category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10 col-xxl-10">
                <div class="products_wrap_box">
                    <div class="products_filter_wrap_f">
                        <div class="products_filter_wrap_btn">
                            <button class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" role="img">
                                  <rect x="2"  y="3"  width="8" height="8" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                                  <rect x="13" y="3"  width="8" height="8" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                                  <rect x="2"  y="14" width="8" height="8" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                                  <rect x="13" y="14" width="8" height="8" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="13" viewBox="0 0 21 13" fill="none">
                                  <path d="M19.6849 10.0491H7.32994M2.96894 10.0491H1.18494M2.96894 10.0491C2.96894 9.47104 3.19861 8.91671 3.60744 8.50799C4.01627 8.09928 4.57076 7.86967 5.14894 7.86967C5.72711 7.86967 6.2816 8.09928 6.69043 8.50799C7.09926 8.91671 7.32894 9.47104 7.32894 10.0491C7.32894 10.6271 7.09926 11.1814 6.69043 11.5901C6.2816 11.9988 5.72711 12.2284 5.14894 12.2284C4.57076 12.2284 4.01627 11.9988 3.60744 11.5901C3.19861 11.1814 2.96894 10.6271 2.96894 10.0491ZM19.6849 3.44391H16.5799M12.2189 3.44391H1.18494M12.2189 3.44391C12.2189 2.8659 12.4486 2.31157 12.8574 1.90285C13.2663 1.49414 13.8208 1.26453 14.3989 1.26453C14.6852 1.26453 14.9687 1.3209 15.2332 1.43042C15.4977 1.53995 15.738 1.70048 15.9404 1.90285C16.1429 2.10523 16.3034 2.34548 16.413 2.6099C16.5225 2.87431 16.5789 3.15771 16.5789 3.44391C16.5789 3.73011 16.5225 4.01351 16.413 4.27793C16.3034 4.54234 16.1429 4.7826 15.9404 4.98497C15.738 5.18735 15.4977 5.34788 15.2332 5.4574C14.9687 5.56693 14.6852 5.6233 14.3989 5.6233C13.8208 5.6233 13.2663 5.39368 12.8574 4.98497C12.4486 4.57626 12.2189 4.02192 12.2189 3.44391Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="products_filter_wrap_select">
                            <select class="minimal">
                                <option value="" disabled selected>Sort by</option>
                                <option value="1">Position</option>
                                <option value="2">Relevance</option>
                                <option value="3">Name, A to Z</option>
                                <option value="4">Name, Z to A</option>
                                <option value="5">Price, low to high</option>
                                <option value="6">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="products_wrap_products">
                        <div class="row gy-lg-5">
                         
                            @foreach($products as $product)
                            <div class="col-6 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                <div class="index_eight_cr_box">
                                    <div class="index_eight_cr_img_wrap">
                                        <div class="index_eight_cr_img">
                                                @php 
                                        $image = json_decode($product->product_image);
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
                                        <h6>{{ $product->product_name }}</h6>
                                        <p class="desc">${{ $product->product_price }}</p>
                                        <a href="{{ url('product/'.$product->product_slug) }}" class="common_btn dark_btn">CUSTOMIZE</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <nav aria-label="Page navigation example">
                         {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')