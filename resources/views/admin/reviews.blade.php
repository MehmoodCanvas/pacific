@include('admin.inc.header')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Reviews</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Reviews</li>
        </ol>
      </nav>
    </div>

    <section>
      <table class="table datatable">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Business</th>
            <th>Email</th>
            <th>Rating</th>
            <th>Image</th>
            <th>Feedback</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reviews as $review)
          <tr id="review-{{ $review->ratings_id }}">
            <td>{{ $review->ratings_id }}</td>
            <td>{{ $review->ratings_name }}</td>
            <td>{{ $review->ratings_business }}</td>
            <td>{{ $review->ratings_email }}</td>
            <td>{{ $review->ratings_star }}</td>
            <td>
              @if($review->ratings_pic)
                <img src="{{ asset('storage/review/'.$review->ratings_pic) }}" width="60" height="60" class="rounded">
              @else
                <span class="text-muted">No Image</span>
              @endif
            </td>
            <td>{{ $review->ratings_feedback }}</td>
            <td>
              <select class="form-select review-status" data-id="{{ $review->ratings_id }}">
                <option value="1" {{ $review->ratings_status == 1 ? 'selected' : '' }}>Approved</option>
                <option value="0" {{ $review->ratings_status == 0 ? 'selected' : '' }}>Disabled</option>
              </select>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
</main>

@include('admin.inc.footer')

<script>
$(document).ready(function() {
  $('.review-status').change(function() {
    let reviewId = $(this).data('id');
    let newStatus = $(this).val();

    $.ajax({
      url: "{{ route('admin.updateReviewStatus') }}",
      type: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        id: reviewId,
        status: newStatus
      },
      success: function(response) {
        if (response.success) {
          toastr.success(response.message);
        } else {
          toastr.error(response.message);
        }
      },
      error: function(xhr, status, error) {
        console.error("Error:", error);
        toastr.error("Something went wrong. Please try again.");
      }
    });
  });
});
</script>
