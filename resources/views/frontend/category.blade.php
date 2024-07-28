@extends('frontend.app')
@section('content')
<div class="container mt-5">
    <div class="row mb-8">
        <div class="col-md-12">
            <!-- Shop-control-bar Title -->
            <div class="d-block d-md-flex flex-center-between mb-3">
                <h3 class="font-size-25 mb-2 mb-md-0">Phone</h3>
                <p class="font-size-14 text-light-gray mb-0">Showing {{ $products->count() }} results</p>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade pt-2 active show" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                    <ul class="row list-unstyled products-group no-gutters">
                        @foreach($products as $product)
                        <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2">
                                            <a href="/product-detail/{{$product->id}}" class="font-size-12 text-gray-5">{{ $product->category }}</a>
                                        </div>
                                        <h5 class="mb-1 product-item__title">
                                            <a href="/product-detail/{{$product->id}}" class="text-blue font-weight-bold">{{ $product->name }}</a>
                                        </h5>
                                        <div class="mb-2">
                                            @php
                                                $images = json_decode($product->images, true);
                                            @endphp
                                            <a href="/product-detail/{{$product->id}}" class="d-block text-center">
                                                <img class="img-fluid" src="{{ asset('product/' . $images[0]) }}" alt="{{ $product->name }}">
                                            </a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                @if($product->discount_price)
                                                    <ins class="text-gray-100">${{ number_format($product->discount_price, 2) }}</ins>
                                                    <del class="text-gray-6">${{ number_format($product->price, 2) }}</del>
                                                @else
                                                    <div class="text-gray-100">${{ number_format($product->price, 2) }}</div>
                                                @endif
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="" class="btn-add-cart btn-primary transition-3d-hover">
                                                    <i class="ec ec-add-to-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End Tab Content -->
            <!-- End Shop Body -->
        </div>
    </div>
</div>
@endsection
