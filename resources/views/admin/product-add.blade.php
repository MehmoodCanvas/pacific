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
              <h5 class="card-title">Add Products</h5>

              <!-- General Form Elements -->
              <form action="{{url('admin/post-product/')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='product_name' placeholder="Write Name (Wood Frame)...."> 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="dis" class="col-sm-2 col-form-label">Product Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  name='product_description' id='dis' placeholder="Write...."></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                                    <label for="dis" class="col-sm-2 col-form-label">Product Description</label>
                  <div class="col-sm-10">
                <select name="product_category_id" id="product_category_id" class="form-control">
                  <option value="" selected>Select Category</option>
                  @foreach($category as $cat)
                  <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                  @endforeach
                </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Product Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name='product_price' placeholder="Write Price (1000)...." required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Product Images</label>
                  <div class="col-sm-10">
                        <div class="input-images"></div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Status of Product</label>
                  <div class="col-sm-10">
                    <select name="product_status" id="product_status" class="form-control ">
                      <option value="enable" selected>Published</option>
                      <option value="disable">Draft</option>

                    </select>
                  </div>
                </div>
               
            </div>
        

                <div class="row mb-3">
                  <div class="col-sm-10">
                      <input type="submit" value="Insert New Product" class='btn btn-success'>
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