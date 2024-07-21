@extends('backend.app')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h4>Product list</h4>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">
                <svg class="stroke-icon">
                  <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">ECommerce </li>
            <li class="breadcrumb-item active">Product list</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="list-product">
              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-container">
                  <table class="table datatable-table" id="project-status">
                    <thead>
                      <tr>
                        <th data-sortable="true" style="width: 3.434178250204415%;"><a href="#" class="datatable-sorter">
                            <div class="form-check">
                              <input class="form-check-input checkbox-primary" type="checkbox">
                            </div>
                          </a></th>
                        <th data-sortable="true" style="width: 26.655764513491416%;"><a href="#" class="datatable-sorter"> <span class="f-light f-w-600">Product Name</span></a></th>
                        <th data-sortable="true" style="width: 13.982011447260835%;"><a href="#" class="datatable-sorter"> <span class="f-light f-w-600">Category</span></a></th>
                        <th data-sortable="true" style="width: 9.975470155355683%;"><a href="#" class="datatable-sorter"> <span class="f-light f-w-600">Price</span></a></th>
                        <th data-sortable="true" style="width: 8.748977923139819%;"><a href="#" class="datatable-sorter"> <span class="f-light f-w-600">Action</span></a></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                      <tr data-index="{{ $loop->index }}">
                        <td>
                          <div class="form-check">
                            <input class="form-check-input checkbox-primary" type="checkbox">
                          </div>
                        </td>
                        <td>
                          <div class="product-names">
                            @php
                            $images = json_decode($product->images, true);
                            @endphp
                            <div class="light-product-box">
                              <img class="img-fluid" src="{{ asset('product/' . $images[0]) }}" alt="{{ $product->name }}">
                            </div>
                            <p>{{ $product->name }}</p>
                          </div>
                        </td>
                        <td>
                          <p class="f-light">{{ $product->category }}</p>
                        </td>
                        <td>
                          <p class="f-light">{{ number_format($product->price, 2) }}</p>
                        </td>
                        <td>
                          <div class="product-action"><a href="{{ route('product.edit', $product->id) }}">
                              <svg>
                                <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                              </svg></a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" style="background:none; border:none;">
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>
@endsection