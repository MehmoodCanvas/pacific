@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Product</h5>

              <!-- General Form Elements -->
              <form action="{{url('admin/edit-product/'.$product->product_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  value="{{$product->product_name}}" name='product_name' placeholder="Write Name (Men's T-shirt)...."> 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Product Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  name='product_description' placeholder="Write....">
                    {{$product->product_description}}
                    </textarea>
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Product Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" name='product_category_id'>
                      <option selected="" disabled>Select Category</option>
                  @foreach($category as $cat)
                      <option value="{{$cat->category_id}}" {{ ( $cat->category_id == $product->product_category_id) ? 'selected' : '' }}>{{$cat->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name='product_price' value="{{$product->product_price}}">
                  </div>
                </div>


                <div class="row mb-3">
                <div id='slideupload' class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Multiple Images</label>
                  <div class="col-sm-10">
                        <div class="input-images"></div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Status of Product</label>
                  <div class="col-sm-10">
                  <select name="product_status" id="product_status" class="form-control">
                  <option value="enable" {{ $product->product_status == 'enable' ? 'selected' : '' }}>Published</option>
                  <option value="disable" {{ $product->product_status == 'disable' ? 'selected' : '' }}>Draft</option>
              </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">SKU</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='product_sku' value="{{$product->product_sku}}">
                  </div>
                </div>

              </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                      <input type="submit" value="Update Product" class='btn btn-success'>
                  </div>
                </div>
              </form><!-- End General Form Elements -->
            </div>
          </div>
        </div>
      </div>
    </section>

   

  </main><!-- End #main -->
@include('admin.inc.footer')    