@extends('frontend.app')
@section('content')
<div class="mb-5">
    <div class="bg-img-hero" style="background-image: url(../../assets/img/1920X422/img1.jpg);">
        <div class="container min-height-420 overflow-hidden">
            <div class="js-slick-carousel u-slick" data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
                <div class="js-slide bg-img-hero-center">
                    <div class="row min-height-420 py-7 py-md-0">
                        <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                            <h1 class="font-size-64 text-lh-57 font-weight-light" data-scs-animation-in="fadeInUp">
                                THE NEW <span class="d-block font-size-55">STANDARD</span>
                            </h1>
                            <h6 class="font-size-15 font-weight-bold mb-3" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                            </h6>
                            <div class="mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                <span class="font-size-13">FROM</span>
                                <div class="font-size-50 font-weight-bold text-lh-45">
                                    <sup class="">$</sup>749<sup class="">99</sup>
                                </div>
                            </div>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400">
                                Start Buying
                            </a>
                        </div>
                        <div class="col-xl-5 col-6  d-flex align-items-center" data-scs-animation-in="zoomIn" data-scs-animation-delay="500">
                            <img class="img-fluid" src="../../assets/img/416X420/img1.png" alt="Image Description">
                        </div>
                    </div>
                </div>
                <div class="js-slide bg-img-hero-center" data-animation-delay="0">
                    <div class="row min-height-420 py-7 py-md-0">
                        <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                            <h1 class="font-size-64 text-lh-57 font-weight-light" data-scs-animation-in="fadeInUp">
                                THE NEW <span class="d-block font-size-55">STANDARD</span>
                            </h1>
                            <h6 class="font-size-15 font-weight-bold mb-3" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                            </h6>
                            <div class="mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                <span class="font-size-13">FROM</span>
                                <div class="font-size-50 font-weight-bold text-lh-45">
                                    <sup class="">$</sup>749<sup class="">99</sup>
                                </div>
                            </div>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400">
                                Start Buying
                            </a>
                        </div>
                        <div class="col-xl-5 col-6  d-flex align-items-center" data-scs-animation-in="fadeInUp" data-scs-animation-delay="500">
                            <img class="img-fluid" src="../../assets/img/416X420/img2.png" alt="Image Description">
                        </div>
                    </div>
                </div>
                <div class="js-slide bg-img-hero-center" data-animation-delay="0">
                    <div class="row min-height-420 py-7 py-md-0">
                        <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                            <h1 class="font-size-64 text-lh-57 font-weight-light" data-scs-animation-in="fadeInUp">
                                THE NEW <span class="d-block font-size-55">STANDARD</span>
                            </h1>
                            <h6 class="font-size-15 font-weight-bold mb-3" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                            </h6>
                            <div class="mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                <span class="font-size-13">FROM</span>
                                <div class="font-size-50 font-weight-bold text-lh-45">
                                    <sup class="">$</sup>749<sup class="">99</sup>
                                </div>
                            </div>
                            <a href="https://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-15" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400">
                                Start Buying
                            </a>
                        </div>
                        <div class="col-xl-5 col-6  d-flex align-items-center" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="../../assets/img/416X420/img3.png" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- Prodcut-cards-carousel -->
    <div class="space-top-2">
        <div class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
            <h3 class="section-title mb-0 pb-2 font-size-22">Phone</h3>
        </div>
        <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6" 
             data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
             
            @foreach($products->chunk(8) as $phoneChunk)
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        @foreach($phoneChunk as $phone)
                            <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner p-md-3 row no-gutters">
                                        <div class="col col-lg-auto product-media-left">
                                            @php
                                                $images = json_decode($phone->images, true);
                                                $firstImage = $images[0]; // Use a default image if none found
                                            @endphp
                                            <a href="#" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset('product/' . $firstImage) }}" alt="Image Description"></a>
                                        </div>
                                        <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                            <div class="mb-4">
                                                <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $phone->category }}</a></div>
                                                <h5 class="product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $phone->name }}</a></h5>
                                            </div>
                                            <div class="flex-center-between mb-3">
                                                <div class="prodcut-price">
                                                    @if($phone->discount_price)
                                                        <ins class="text-gray-100">${{ number_format($phone->discount_price, 2) }}</ins>
                                                        <del class="text-gray-9">${{ number_format($phone->price, 2) }}</del>
                                                    @else
                                                        <ins class="text-gray-100">${{ number_format($phone->price, 2) }}</ins>
                                                    @endif
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="#" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="#" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>




<div class="container">
    <!-- Prodcut-cards-carousel -->
    <div class="space-top-2">
        <div class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
            <h3 class="section-title mb-0 pb-2 font-size-22">Speaker</h3>
        </div>
        <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6" 
             data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
             
            @foreach($speakers->chunk(8) as $phoneChunk)
                <div class="js-slide">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        @foreach($phoneChunk as $phone)
                            <li class="col-wd-3 col-md-4 product-item product-item__card d-none d-md-block pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner p-md-3 row no-gutters">
                                        <div class="col col-lg-auto product-media-left">
                                            @php
                                                $images = json_decode($phone->images, true);
                                                $firstImage = $images[0]; // Use a default image if none found
                                            @endphp
                                            <a href="#" class="max-width-150 d-block"><img class="img-fluid" src="{{ asset('product/' . $firstImage) }}" alt="Image Description"></a>
                                        </div>
                                        <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                            <div class="mb-4">
                                                <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $phone->category }}</a></div>
                                                <h5 class="product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $phone->name }}</a></h5>
                                            </div>
                                            <div class="flex-center-between mb-3">
                                                <div class="prodcut-price">
                                                    @if($phone->discount_price)
                                                        <ins class="text-gray-100">${{ number_format($phone->discount_price, 2) }}</ins>
                                                        <del class="text-gray-9">${{ number_format($phone->price, 2) }}</del>
                                                    @else
                                                        <ins class="text-gray-100">${{ number_format($phone->price, 2) }}</ins>
                                                    @endif
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="#" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="#" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="#" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>


    <div class="container">

    <div class="mb-6">
        <div class="position-relative">
            <div class="border-bottom border-color-1 mb-2">
                <h3 class="section-title mb-0 pb-2 font-size-22">Recently Viewed</h3>
            </div>
            <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1" data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0" data-slides-show="7" data-slides-scroll="1" data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10" data-arrow-left-classes="fa fa-angle-left right-1" data-arrow-right-classes="fa fa-angle-right right-0" data-responsive='[{
              "breakpoint": 1400,
              "settings": {
                "slidesToShow": 6
              }
            }, {
                "breakpoint": 1200,
                "settings": {
                  "slidesToShow": 4
                }
            }, {
              "breakpoint": 992,
              "settings": {
                "slidesToShow": 3
              }
            }, {
              "breakpoint": 768,
              "settings": {
                "slidesToShow": 2
              }
            }, {
              "breakpoint": 554,
              "settings": {
                "slidesToShow": 2
              }
            }]'>

                @foreach($products as $prod)
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $prod->category }}</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $prod->name }}</a></h5>
                                    <div class="mb-2">
                                    @php
                                            $images = json_decode($prod->images, true);
                                            $firstImage = $images[0]; // Use a default image if none found
                                        @endphp
                                        <a href="#" class="d-block text-center"><img class="img-fluid" src="{{ asset('product/' . $firstImage) }}" alt="Image Description"></a>
                                                                       </div>
                                    <div class="flex-center-between mb-1">
                                        @if($prod->discount_price !='')
                                        <div class="prodcut-price d-flex align-items-center flex-wrap position-relative mt-4">
                                            <ins class="font-size-20 text-red text-decoration-none mr-2">${{ number_format($prod->discount_price, 2) }}</ins>
                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ number_format($prod->price, 2) }}</del>
                                        </div>
                                        @else
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">${{ number_format($prod->price, 2) }}</div>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach($speakers as $speak)
                <div class="js-slide products-group">
                    <div class="product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="#" class="font-size-12 text-gray-5">{{ $speak->category }}</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="#" class="text-blue font-weight-bold">{{ $speak->name }}</a></h5>
                                    <div class="mb-2">
                                    @php
                                            $images = json_decode($prod->images, true);
                                            $firstImage = $images[0]; // Use a default image if none found
                                        @endphp
                                        <a href="#" class="d-block text-center"><img class="img-fluid" src="{{ asset('product/' . $firstImage) }}" alt="Image Description"></a>
                                                                       </div>                                    </div>
                                    <div class="flex-center-between mb-1">
                                    @if($prod->discount_price !='')
                                        <div class="prodcut-price d-flex align-items-center flex-wrap position-relative mt-4">
                                            <ins class="font-size-20 text-red text-decoration-none mr-2">${{ number_format($prod->discount_price, 2) }}</ins>
                                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ number_format($prod->price, 2) }}</del>
                                        </div>
                                        @else
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">${{ number_format($prod->price, 2) }}</div>
                                        </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- End Recently viewed -->
</div>
</div>
@endsection