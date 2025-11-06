@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Category</h5>

              <!-- General Form Elements -->
              <form action="{{url('admin/post-category/')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='category_name' placeholder="Write Name (Wood Frame)...."> 
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="dis" class="col-sm-2 col-form-label">Category Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"  name='category_description' id='dis' placeholder="Write...."></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Category Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name='category_image'>
                  </div>

            </div>
        

                <div class="row mb-3">
                  <div class="col-sm-10">
                      <input type="submit" value="Insert New Category" class='btn btn-success'>
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