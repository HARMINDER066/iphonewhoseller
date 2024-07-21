@extends('backend.app')
@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h4>Edit Product</h4>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">
                <svg class="stroke-icon">
                  <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item">ECommerce</li>
            <li class="breadcrumb-item active">Edit Product</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5>Product Form</h5>
          </div>
          <div class="card-body">
            <div class="row g-xl-5 g-3">
              <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                <ul class="sidebar-left-icons nav nav-pills" id="edit-product-pills-tab" role="tablist">
                  <li class="nav-item" role="presentation"> <a class="nav-link" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false" tabindex="-1">
                      <div class="nav-rounded">
                        <div class="product-icons">
                          <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                          </svg>
                        </div>
                      </div>
                      <div class="product-tab-content">
                        <h6>Home</h6>
                        <p>Edit Product  details</p>
                      </div>
                    </a></li>
                </ul>
              </div>
              <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                <div class="tab-content" id="edit-product-pills-tabContent">
                  <div class="tab-pane fade active show" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                    <div class="sidebar-body">
                      @if($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif
                      <form class="row g-2" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="product-form">
                        @csrf
                        @method('PUT')
                        <label class="form-label col-12 m-0" for="productTitle1">Product Title <span class="txt-danger"> *</span></label>
                        <div class="col-12 custom-input">
                          <input class="form-control @error('name') is-invalid @enderror" id="productTitle1" type="text" name="name" value="{{ old('name', $product->name) }}" required>
                          @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-12">
                          <div id="editordescriotion" class="ql-container ql-snow" style="height:150px">
                            <div class="ql-editor ql-blank" contenteditable="true" data-placeholder="Enter your messages...">
                              {!! old('description', $product->description) !!}
                            </div>
                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                          </div>
                          <textarea name="description" id="description" style="display:none;">{{ old('description', $product->description) }}</textarea>
                          @error('description')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="product-upload">
                          <label class="form-label col-12 m-0" for="productTitle1">Product Images <span class="txt-danger"> *</span></label>
                          <div class="dz-message needsclick">
                            <input class="form-control @error('images') is-invalid @enderror" id="productTitle1" type="file" name="images[]" multiple>
                            <div class="valid-feedback">Select multiple images accept.</div>
                            @error('images')
                              <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mt-3">
                            <p>Current Images:</p>
                            <div id="current-images">
                              @foreach(json_decode($product->images, true) as $image)
                                <div class="image-item" data-image="{{ $image }}">
                                  <img src="{{ asset('product/' . $image) }}" alt="{{ $product->name }}" width="50">
                                  <button type="button" class="btn btn-danger btn-sm remove-image">&times;</button>
                                </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                        <div class="row g-lg-4 g-3">
                          <div class="col-12">
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <div class="row g-2">
                                  <div class="col-12">
                                    <label class="form-label m-0" for="validationDefault04">Add Category</label>
                                  </div>
                                  <div class="col-12">
                                    <select class="form-select @error('category') is-invalid @enderror" name="category" id="validationDefault04" required>
                                      <option selected value="">Please select</option>
                                      <option value="phone" {{ old('category', $product->category) == 'phone' ? 'selected' : '' }}>Phone</option>
                                      <option value="speaker" {{ old('category', $product->category) == 'speaker' ? 'selected' : '' }}>Speaker</option>
                                    </select>
                                    @error('category')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="row g-2">
                                  <div class="col-12">
                                    <label class="form-label m-0" for="producttype">Product</label>
                                  </div>
                                  <div class="col-12">
                                    <select class="form-select @error('parent_category') is-invalid @enderror" name="parent_category" id="producttype" required>
                                      <!-- Options will be populated dynamically -->
                                    </select>
                                    @error('parent_category')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6" id="product_modal_div" style="display:none">
                                <div class="row g-2">
                                  <div class="col-12">
                                    <label class="form-label m-0" for="productmodal">Model</label>
                                  </div>
                                  <div class="col-12">
                                    <select class="form-select @error('model') is-invalid @enderror" name="model" id="productmodal">
                                      <!-- Options will be populated dynamically -->
                                    </select>
                                    @error('model')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-lg-4 g-3">
                          <div class="col-12">
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <div class="row g-2">
                                  <div class="col-12">
                                    <label class="form-label m-0" for="price">Price</label>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control @error('price') is-invalid @enderror" id="price" type="number" name="price" value="{{ old('price', $product->price) }}" required>
                                    @error('price')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="row g-2">
                                  <div class="col-12">
                                    <label class="form-label m-0" for="discount_price">Discount Price</label>
                                  </div>
                                  <div class="col-12">
                                    <input class="form-control @error('discount_price') is-invalid @enderror" id="discount_price" type="number" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}">
                                    @error('discount_price')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-buttons">
                          <button class="btn btn-primary" type="submit" data-bs-toggle="tooltip" data-bs-original-title="btn btn-primary" style="color:white">Update</button>
                        </div>
                        <input type="hidden" name="removed_images" id="removed_images" value="">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
@push('scripts')
<script>
  $(document).ready(function() {

    const quill = new Quill('#editordescriotion', {
        theme: 'snow'
    });

    const products = {
        phone: {
            'iPhone 14': 14,
            'iPhone 15': 15
        },
        speaker: ['JBL', 'Bose', 'Sony']
    };

    const iphoneModels = ['iPhone Pro', 'iPhone Max', 'iPhone Air'];

    $('#validationDefault04').on('change', function() {
        const selectedCategory = $(this).val();
        let productOptions = '<option selected="" value="">Please select</option>';
        let modalOptions = '<option selected="" value="">Please select</option>';

        if (selectedCategory && products[selectedCategory]) {
            if (selectedCategory === 'phone') {
                $.each(products[selectedCategory], function(product, value) {
                    productOptions += `<option value="${value}">${product}</option>`;
                });
            } else {
                $.each(products[selectedCategory], function(index, product) {
                    productOptions += `<option value="${product}">${product}</option>`;
                });
            }
        }

        $('#producttype').html(productOptions);
        $('#productmodal').html(modalOptions);

        // If the selected category is phone, update the models as well
        if (selectedCategory === 'phone') {
            $("#product_modal_div").show();
            $.each(iphoneModels, function(index, model) {
                modalOptions += `<option value="${model}">${model}</option>`;
            });
            $('#productmodal').attr('required', true); // Add required attribute
            $('#productmodal').html(modalOptions);
        } else {
            $("#product_modal_div").hide();
            $('#productmodal').attr('required', false); // Remove required attribute
            $('#productmodal').html('<option selected="" value="">Please select</option>');
        }
    });

    // Set the initial values for the form fields
    const initialCategory = "{{ old('category', $product->category) }}";
    const initialParentCategory = "{{ old('parent_category', $product->parent_category) }}";
    const initialModel = "{{ old('model', $product->model) }}";

    if (initialCategory) {
        $('#validationDefault04').val(initialCategory).trigger('change');
        $('#producttype').val(initialParentCategory);
        if (initialCategory === 'phone') {
            $('#productmodal').val(initialModel);
            $('#product_modal_div').show();
        }
    }

    // Copy the content from the Quill editor to the textarea before form submission
    $('#product-form').on('submit', function() {
        $('#description').val(quill.root.innerHTML);
    });

    // Handle remove image button click
    $(document).on('click', '.remove-image', function() {
        const image = $(this).closest('.image-item').data('image');
        const removedImages = $('#removed_images').val() ? $('#removed_images').val().split(',') : [];
        removedImages.push(image);
        $('#removed_images').val(removedImages.join(','));
        $(this).closest('.image-item').remove();
    });

  });

</script>
@endpush
