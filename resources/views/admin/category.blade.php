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
    </div>

    <section>
    <a  class="btn btn-success" href="{{url('/admin/add-category')}}">Add New Category</a>
      <table class="table datatable">
        <thead>
            <th>S.No</th>
            <th>Category Name</th>
            <th>Category Price</th>
            <th>Category Image</th>
            <th>Action</th>
        </thead>
        <tbody>
          @foreach($category as $category)
          <tr>
            <td>{{$category->category_id}}</td>
            <td>{{$category->category_name}}</td>
            <td>{{$category->category_description}}</td>
            <td><img src="{{asset('storage/category/'.$category->category_image)}}" width="100px"/></td>
            <td><a href='{{url('admin/category-edit/'.$category->category_id)}}' target='_blank' class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a><a  href='{{url('admin/category-delete/'.$category->category_id)}}' class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main>
  <!-- End #main -->
@include('admin.inc.footer')