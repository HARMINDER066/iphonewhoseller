@extends('frontend.app')
@section('content')
<div class="container">
    <!-- Single Product Body -->
    <div class="mb-xl-14 mb-6" id="rendeer-details">
        <div class="row">
            <div class="col-md-5 mb-4 mb-md-0">
                <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2" data-infinite="true"
                                data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                                data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                                data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                                data-nav-for="#sliderSyncingThumb">
                    @php
                    $images = json_decode($product->images, true);
                    @endphp
                    @foreach($images as $image)
                    <div class="js-slide">
                        <img class="img-fluid" src="{{ asset('product/' . $image) }}" alt="{{ $product->name }}">
                    </div>
                    @endforeach
                </div>

                <div id="sliderSyncingThumb" class="js-slick-carousel  u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"  data-infinite="true"
                                data-slides-show="5"
                                data-is-thumbs="true"
                                data-nav-for="#sliderSyncingNav">>
                    @foreach($images as $image)
                    <div class="js-slide" style="cursor: pointer;">
                        <img class="img-fluid" src="{{ asset('product/' . $image) }}" alt="{{ $product->name }}">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 mb-md-6 mb-lg-0" id="product-details">
                <div class="mb-2">
                    <div class="border-bottom mb-3 pb-md-1 pb-3">
                        <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">{{ $product->category }}</a>
                        <h2 class="font-size-25 text-lh-1dot2">{{ $product->name }}</h2>
                        <div class="d-md-flex align-items-center">
                            <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0 d-block"><img class="img-fluid" src="{{ asset('product/' . $images[0]) }}" alt="{{ $product->name }}"></a>
                        </div>
                    </div>
                    <p>{{ $product->description }}</p>
                    <div class="mb-4">
                        <div class="d-flex align-items-baseline">
                            @if($product->discount_price)
                            <ins class="font-size-36 text-decoration-none">${{ number_format($product->discount_price, 2) }}</ins>
                            <del class="font-size-20 ml-2 text-gray-6">${{ number_format($product->price, 2) }}</del>
                            @else
                            <ins class="font-size-36 text-decoration-none">${{ number_format($product->price, 2) }}</ins>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <h6 class="font-size-14 mb-0 mr-5">Model</h6>
                        @foreach($modals as $mod)
                        <button class="btn btn-sm bg-white font-weight-normal py-2 border ml-2 modal-button" data-id="{{ $mod->id }}" data-url="{{ route('product.details', $mod->id) }}">
                        <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">{{ $mod->model }}</div>
                                    </div>
                                </div>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Carousel -->
</div>
@endsection

@push('scripts')
<script>
   

    $(document).ready(function() {
        // initializeSlick();

        // Handle modal button click
        $(document).on('click', '.modal-button', function() {
            var productUrl = $(this).data('url');

            $.ajax({
                url: productUrl,
                method: 'GET',
                success: function(response) {
                    $('#rendeer-details').html(response.html);
                    
        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');
                }
            });
        });
    });
</script>
@endpush
