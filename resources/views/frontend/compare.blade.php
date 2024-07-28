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
.compare-page-search-select h6{
color:white;
margin-left: 20px;
}

</style>
@endpush
@section('content')
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
        <br/>
        <input class="hidden-pid" type="hidden" name="p1" value="{{ isset($_GET['p1']) ? $_GET['p1'] : '' }}">
        <input type="text" class="product-search-compare" placeholder="Please enter model name or part of it" value="{{ isset($_GET['p1']) ? $_GET['p1'] : '' }}">
        <button type="submit" class="submit-btn" hidden="">Submit</button>
        <br/>
        <span class="please-enter-text">Please enter model name or part of it</span>
    </th>
    <th data-id="{{ isset($_GET['p2']) ? $_GET['p2'] : '' }}" class="search-wrap-th">
        <span class="compare-with">COMPARE WITH</span>
        <br/>
        <input class="hidden-pid" type="hidden" name="p2" value="{{ isset($_GET['p2']) ? $_GET['p2'] : '' }}">
        <input type="text" class="product-search-compare" placeholder="Please enter model name or part of it" value="{{ isset($_GET['p2']) ? $_GET['p2'] : '' }}">
        <button type="submit" class="submit-btn" hidden="">Submit</button>
        <br/>
        <span class="please-enter-text">Please enter model name or part of it</span>
    </th>
    <th data-id="{{ isset($_GET['p3']) ? $_GET['p3'] : '' }}" class="search-wrap-th">
        <span class="compare-with">COMPARE WITH</span>
        <br/>
        <input class="hidden-pid" type="hidden" name="p3" value="{{ isset($_GET['p3']) ? $_GET['p3'] : '' }}">
        <input type="text" class="product-search-compare" placeholder="Please enter model name or part of it" value="{{ isset($_GET['p3']) ? $_GET['p3'] : '' }}">
        <button type="submit" class="submit-btn" hidden="">Submit</button>
        <br/>
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
                    <tr>
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
                    <tr class="title-row">
                        <td>Launch</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><span>{{$product1Specs['Launch']['Date'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Launch']['Date'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Launch']['Date'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><span>{{$product1Specs['Launch']['Status'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Launch']['Status'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Launch']['Status'] ?? null}}</span></td>
                    </tr>

                    <!-- Type Section -->
                    <tr class="title-row">
                        <td>Type</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Device Type</th>
                        <td><span>{{$product1Specs['Type']['Device Type'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Type']['Device Type'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Type']['Device Type'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Series</th>
                        <td><span>{{$product1Specs['Type']['Series'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Type']['Series'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Type']['Series'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Related Phones</th>
                        <td><span>{{$product1Specs['Type']['Related Phones'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Type']['Related Phones'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Type']['Related Phones'] ?? null}}</span></td>
                    </tr>

                    <!-- Body Section -->
                    <tr class="title-row">
                        <td>Body</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Dimension</th>
                        <td><span>{{$product1Specs['Body']['Dimension'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Body']['Dimension'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Body']['Dimension'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td><span>{{$product1Specs['Body']['Weight'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Body']['Weight'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Body']['Weight'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Build</th>
                        <td><span>{{$product1Specs['Body']['Build'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Body']['Build'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Body']['Build'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Colors</th>
                        <td><span>{{$product1Specs['Body']['Colors'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Body']['Colors'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Body']['Colors'] ?? null}}</span></td>
                    </tr>

                    <!-- Display Section -->
                    <tr class="title-row">
                        <td>Display</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td><span>{{$product1Specs['Display']['Size'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Size'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Size'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><span>{{$product1Specs['Display']['Type'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Type'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Type'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Resolution</th>
                        <td><span>{{$product1Specs['Display']['Resolution'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Resolution'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Resolution'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Protection</th>
                        <td><span>{{$product1Specs['Display']['Protection'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Protection'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Protection'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Refresh Rate</th>
                        <td><span>{{$product1Specs['Display']['Refresh Rate'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Refresh Rate'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Refresh Rate'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Touch Sampling Rate</th>
                        <td><span>{{$product1Specs['Display']['Touch Sampling Rate'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Touch Sampling Rate'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Touch Sampling Rate'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Brightness</th>
                        <td><span>{{$product1Specs['Display']['Brightness'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Brightness'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Brightness'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Others</th>
                        <td><span>{{$product1Specs['Display']['Others'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Display']['Others'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Display']['Others'] ?? null}}</span></td>
                    </tr>

                    <!-- Network Section -->
                    <tr class="title-row">
                        <td>Network</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>SIM</th>
                        <td><span>{{$product1Specs['Network']['SIM'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Network']['SIM'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Network']['SIM'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Technology</th>
                        <td><span>{{$product1Specs['Network']['Technology'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Network']['Technology'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Network']['Technology'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>2G Bands</th>
                        <td><span>{{$product1Specs['Network']['2G Bands'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Network']['2G Bands'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Network']['2G Bands'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>3G Bands</th>
                        <td><span>{{$product1Specs['Network']['3G Bands'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Network']['3G Bands'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Network']['3G Bands'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>4G Bands</th>
                        <td><span>{{$product1Specs['Network']['4G Bands'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Network']['4G Bands'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Network']['4G Bands'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>5G Bands</th>
                        <td><span>{{$product1Specs['Network']['5G Bands'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Network']['5G Bands'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Network']['5G Bands'] ?? null}}</span></td>
                    </tr>

                    <!-- Performance Section -->
                    <tr class="title-row">
                        <td>Performance</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Chipset</th>
                        <td><span>{{$product1Specs['Performance']['Chipset'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Performance']['Chipset'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Performance']['Chipset'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>CPU</th>
                        <td><span>{{$product1Specs['Performance']['CPU'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Performance']['CPU'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Performance']['CPU'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>GPU</th>
                        <td><span>{{$product1Specs['Performance']['GPU'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Performance']['GPU'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Performance']['GPU'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>OS</th>
                        <td><span>{{$product1Specs['Performance']['OS'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Performance']['OS'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Performance']['OS'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>UI Version</th>
                        <td><span>{{$product1Specs['Performance']['UI Version'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Performance']['UI Version'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Performance']['UI Version'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Promised Updates</th>
                        <td><span>{{$product1Specs['Performance']['Promised Updates'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Performance']['Promised Updates'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Performance']['Promised Updates'] ?? null}}</span></td>
                    </tr>

                    <!-- Memory Section -->
                    <tr class="title-row">
                        <td>Memory</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>RAM</th>
                        <td><span>{{$product1Specs['Memory']['RAM'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Memory']['RAM'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Memory']['RAM'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Storage</th>
                        <td><span>{{$product1Specs['Memory']['Storage'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Memory']['Storage'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Memory']['Storage'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Variant</th>
                        <td><span>{{$product1Specs['Memory']['Variant'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Memory']['Variant'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Memory']['Variant'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>SD Card</th>
                        <td><span>{{$product1Specs['Memory']['SD Card'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Memory']['SD Card'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Memory']['SD Card'] ?? null}}</span></td>
                    </tr>

                    <!-- Back Cameras Section -->
                    <tr class="title-row">
                        <td>Back Cameras</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Dual</th>
                        <td><span>{{$product1Specs['Back Cameras']['Dual'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Back Cameras']['Dual'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Back Cameras']['Dual'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Features</th>
                        <td><span>{{$product1Specs['Back Cameras']['Features'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Back Cameras']['Features'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Back Cameras']['Features'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Video</th>
                        <td><span>{{$product1Specs['Back Cameras']['Video'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Back Cameras']['Video'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Back Cameras']['Video'] ?? null}}</span></td>
                    </tr>

                    <!-- Front Camera Section -->
                    <tr class="title-row">
                        <td>Front Camera</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Single</th>
                        <td><span>{{$product1Specs['Front Camera']['Single'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Front Camera']['Single'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Front Camera']['Single'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Features</th>
                        <td><span>{{$product1Specs['Front Camera']['Features'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Front Camera']['Features'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Front Camera']['Features'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Video</th>
                        <td><span>{{$product1Specs['Front Camera']['Video'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Front Camera']['Video'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Front Camera']['Video'] ?? null}}</span></td>
                    </tr>

                    <!-- Security Section -->
                    <tr class="title-row">
                        <td>Security</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Fingerprint</th>
                        <td><span>{{$product1Specs['Security']['Fingerprint'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Security']['Fingerprint'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Security']['Fingerprint'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Face Unlock</th>
                        <td><span>{{$product1Specs['Security']['Face Unlock'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Security']['Face Unlock'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Security']['Face Unlock'] ?? null}}</span></td>
                    </tr>

                    <!-- Audio Section -->
                    <tr class="title-row">
                        <td>Audio</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Speaker</th>
                        <td><span>{{$product1Specs['Audio']['Speaker'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Audio']['Speaker'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Audio']['Speaker'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>3.5 mm Jack</th>
                        <td><span>{{$product1Specs['Audio']['3.5 mm Jack'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Audio']['3.5 mm Jack'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Audio']['3.5 mm Jack'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Others</th>
                        <td><span>{{$product1Specs['Audio']['Others'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Audio']['Others'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Audio']['Others'] ?? null}}</span></td>
                    </tr>

                    <!-- Sensors Section -->
                    <tr class="title-row">
                        <td>Sensors</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><span>{{$product1Specs['Sensors']['Type'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Sensors']['Type'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Sensors']['Type'] ?? null}}</span></td>
                    </tr>

                    <!-- Connectivity Section -->
                    <tr class="title-row">
                        <td>Connectivity</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>WLAN</th>
                        <td><span>{{$product1Specs['Connectivity']['WLAN'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Connectivity']['WLAN'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Connectivity']['WLAN'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Bluetooth</th>
                        <td><span>{{$product1Specs['Connectivity']['Bluetooth'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Connectivity']['Bluetooth'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Connectivity']['Bluetooth'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>GPS</th>
                        <td><span>{{$product1Specs['Connectivity']['GPS'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Connectivity']['GPS'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Connectivity']['GPS'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>NFC</th>
                        <td><span>{{$product1Specs['Connectivity']['NFC'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Connectivity']['NFC'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Connectivity']['NFC'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>USB</th>
                        <td><span>{{$product1Specs['Connectivity']['USB'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Connectivity']['USB'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Connectivity']['USB'] ?? null}}</span></td>
                    </tr>

                    <!-- Battery Section -->
                    <tr class="title-row">
                        <td>Battery</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><span>{{$product1Specs['Battery']['Type'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Battery']['Type'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Battery']['Type'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Charging</th>
                        <td><span>{{$product1Specs['Battery']['Charging'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Battery']['Charging'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Battery']['Charging'] ?? null}}</span></td>
                    </tr>
                    <tr>
                        <th>Wireless Charging</th>
                        <td><span>{{$product1Specs['Battery']['Wireless Charging'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Battery']['Wireless Charging'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Battery']['Wireless Charging'] ?? null}}</span></td>
                    </tr>

                    <!-- Extras Section -->
                    <tr class="title-row">
                        <td>Extras</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Features</th>
                        <td><span>{{$product1Specs['Extras']['Features'] ?? null}}</span></td>
                        <td><span>{{$product2Specs['Extras']['Features'] ?? null}}</span></td>
                        <td><span>{{$product3Specs['Extras']['Features'] ?? null}}</span></td>
                    </tr>
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
            alert();
                var myPid = $(this).data('id');
                $(this).parents('.product-wrap').siblings('.hidden-pid').val(myPid);
                $('.compare-form').submit();
            });
          
        });
      
    </script>
@endpush