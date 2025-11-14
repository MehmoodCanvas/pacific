@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Leads</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Leads</li>
        </ol>
      </nav>
    </div>

    <section >
      <table class="table datatable">
        <thead>
            <th>Lead.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Product</th>
            <th>Art</th>
            <th>Date</th>
        </thead>
        <tbody>
          @foreach($order as $orders)
          <tr>
            <td> {{$loop->iteration}}</td>
            <td> {{$orders->lead_name}}</td>
            <td> {{$orders->lead_email}}</td>
            <td> {{$orders->lead_phone}}</td>
            <td> {{$orders->lead_message}}</td>
            <td> {{$orders->product_size}}</td>
            <td> <a href='{{url('product/'.$orders->product_slug)}}' target="_blank">{{$orders->product_name}}</a></td>
            <td> @if(!empty($orders->product_art))<img src={{ asset('storage/arts/'.$orders->product_art) }}>@endif</td>
            <td> {{$orders->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
     
        </div><!-- End Left side columns -->

      
      </div>
    </section>

  </main><!-- End #main -->
@include('admin.inc.footer')