@extends('frontend.app')
@push('css')
<style>
    .title-row {
        background: #465560;
        color: white;
    }

    .product-wrap {
        background: #465560;
        color: #4db2ec;
        cursor: pointer;
    }

    .compare-page-search-select {
        display: flex;
        align-items: flex-start;
        padding: 5px 15px !important;
        border-left: 3px solid transparent;
        justify-content: flex-start;
        text-align: left;
        line-height: 1.456;
        width: 100%;
    }

    .compare-page-search-select h6 {
        color: white;
        margin-left: 20px;
    }

    .same-specs td {
        background: #f0f0f0;
        border: 1px solid #fff
    }
</style>
</style>
@endpush
@section('content')
<?php
if (!function_exists('isSpecMatched')) {
    function isSpecMatched($val1, $val2, $val3)
    {
        $values = [];
        $class = '';

        if ($val1 != null) {
            $values[] = $val1;
        }
        if ($val2 != null) {
            $values[] = $val2;
        }
        if ($val3 != null) {
            $values[] = $val3;
        }

        if (count($values) > 1 && count(array_unique($values)) === 1) {
            $class = 'same-specs';
        }

        return $class;
    }
}
?>
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">

            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="table-responsive table-bordered table-compare-list mb-10 border-0">
            <form class="compare-form" method="get" data-gtm-form-interact-id="0">
                <table class="table">
                    <tbody>
                        <tr>
                            <th style="min-width:104.5px;"></th>
                            <th data-id="{{ isset($_GET['p1']) ? $_GET['p1'] : '' }}" class="search-wrap-th">
                                <span class="compare-with">COMPARE WITH</span>
                                <br />
                                <input class="hidden-pid" type="hidden" name="p1" value="{{ isset($_GET['p1']) ? $_GET['p1'] : '' }}">
                                <input type="text" class="product-search-compare" placeholder="Please enter model name or part of it" value="{{ isset($_GET['p1']) ? $_GET['p1'] : '' }}">
                                <button type="submit" class="submit-btn" hidden="">Submit</button>
                                <br />
                                <span class="please-enter-text">Please enter model name or part of it</span>
                            </th>
                            <th data-id="{{ isset($_GET['p2']) ? $_GET['p2'] : '' }}" class="search-wrap-th">
                                <span class="compare-with">COMPARE WITH</span>
                                <br />
                                <input class="hidden-pid" type="hidden" name="p2" value="{{ isset($_GET['p2']) ? $_GET['p2'] : '' }}">
                                <input type="text" class="product-search-compare" placeholder="Please enter model name or part of it" value="{{ isset($_GET['p2']) ? $_GET['p2'] : '' }}">
                                <button type="submit" class="submit-btn" hidden="">Submit</button>
                                <br />
                                <span class="please-enter-text">Please enter model name or part of it</span>
                            </th>
                            <th data-id="{{ isset($_GET['p3']) ? $_GET['p3'] : '' }}" class="search-wrap-th">
                                <span class="compare-with">COMPARE WITH</span>
                                <br />
                                <input class="hidden-pid" type="hidden" name="p3" value="{{ isset($_GET['p3']) ? $_GET['p3'] : '' }}">
                                <input type="text" class="product-search-compare" placeholder="Please enter model name or part of it" value="{{ isset($_GET['p3']) ? $_GET['p3'] : '' }}">
                                <button type="submit" class="submit-btn" hidden="">Submit</button>
                                <br />
                                <span class="please-enter-text">Please enter model name or part of it</span>
                            </th>
                        </tr>
                        <tr>
                            <th class="min-width-200" style="width:80px">Product</th>
                            <td>
                                <a href="#" class="product d-block">
                                    <div class="product-compare-image">
                                        <div class="d-flex mb-3">
                                            @if($product1 && $product1->images)
                                            @php
                                            $images1 = json_decode($product1->images, true);
                                            @endphp
                                            @if($images1)
                                            <img class="img-fluid mx-auto" src="{{ asset('product/' . $images1[0]) }}" alt="Image Description" style="width:150px">
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="product-item__title text-blue font-weight-bold mb-3">
                                        {{ $product1->name  ?? null}}
                                    </h3>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="product d-block">
                                    <div class="product-compare-image">
                                        <div class="d-flex mb-3">
                                            @if($product2 && $product2->images)
                                            @php
                                            $images2 = json_decode($product2->images, true);
                                            @endphp
                                            @if($images2)
                                            <img class="img-fluid mx-auto" src="{{ asset('product/' . $images2[0]) }}" alt="Image Description" style="width:150px">
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="product-item__title text-blue font-weight-bold mb-3">
                                        {{ $product2->name ?? null}}
                                    </h3>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="product d-block">
                                    <div class="product-compare-image">
                                        <div class="d-flex mb-3">
                                            @if($product3 && $product3->images)
                                            @php
                                            $images3 = json_decode($product3->images, true);
                                            @endphp
                                            @if($images3)
                                            <img class="img-fluid mx-auto" src="{{ asset('product/' . $images3[0]) }}" alt="Image Description" style="width:150px">
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="product-item__title text-blue font-weight-bold mb-3">
                                        {{ $product3->name ?? null }}
                                    </h3>
                                </a>
                            </td>

                        </tr>
                        <tr class="">
                            <th>Price</th>
                            <td>
                                <div class="product-price">${{$product1->price ?? null}}</div>
                            </td>
                            <td>
                                <div class="product-price">${{$product2->price ?? null}}</div>
                            </td>
                            <td>
                                <div class="product-price">${{$product3->price ?? null}}</div>
                            </td>

                        </tr>
                        @foreach ($specsKeys as $cat => $specs)
                        <tr class="title-row">
                            <td>{{$cat}}</td>
                            <td colspan="3"></td>
                        </tr>
                        @foreach ($specs as $spec)
                        <tr class="{{isSpecMatched($product1Specs[$cat][$spec] ?? null, $product2Specs[$cat][$spec] ?? null, $product3Specs[$cat][$spec] ?? null)}}">
                            <th>{{$spec}}</th>
                            <td><span>{{$product1Specs[$cat][$spec] ?? null}}</span></td>
                            <td><span>{{$product2Specs[$cat][$spec] ?? null}}</span></td>
                            <td><span>{{$product3Specs[$cat][$spec] ?? null}}</span></td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</main>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {

        if ($('.product-search-compare').length > 0) {
            $('.product-search-compare').on('keyup', function(e) {
                e.preventDefault();
                let self = $(this);
                let parent = self.parents('th');
                let sdata = $(this).val();
                if (sdata.length >= 1) {
                    parent.addClass('ajax_loading');
                    //setTimeout(function() {
                    if (sdata == self.val()) {
                        $.ajax({
                            type: "POST",
                            url: "{{route('fetchproduct')}}",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                's': sdata,
                            },
                            success: function(response) {

                                parent.find('.product-wrap').remove();
                                parent.append(response.result);
                                //}
                                parent.removeClass('ajax_loading');
                            }
                        })
                    }
                    //}, 1000);
                } else {
                    parent.find('.product-wrap').remove();
                }
            }); // search input close
        }

        $('body').on('click', '.compare-page-search-select', function() {
            var myPid = $(this).data('id');
            $(this).parents('.product-wrap').siblings('.hidden-pid').val(myPid);
            $('.compare-form').submit();
        });

    });
</script>
@endpush