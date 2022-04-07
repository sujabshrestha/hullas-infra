@extends('frontEnd.layout.master')


@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Career Details</h1>
                <ul>
                    <li class="item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="item"><a href="{{ route('front.career') }}"><i
                                class="flaticon-play-button"></i>Career Details</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('front/assets/images/about-bg.jpg') }}" alt="Demo Image">
        </div>

    </div>
    <!-- end page title area -->

    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">

                        <div class="widget widget-article">
                            <h3 class="sub-title">Recent Post</h3>

                            @if (isset($posts) && !empty($posts))
                                @foreach ($posts as $post)
                                    @if ($post->id != $career->id)
                                        <article class="article-item">
                                            <a href="#" class="article-img">
                                                <img src="{{ asset($post->image) }}"
                                                    style="width: 200px !important;height: 90px !important;"
                                                    alt="career-image" />
                                            </a>
                                            <div class="info">
                                                <h6 class="title">
                                                    <a
                                                        href="{{ route('front.careerSingle', $career->slug) }}">{{ $post->title }}</a>
                                                </h6>
                                            </div>
                                        </article>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="image">
                            <img src="{{ asset($career->image) }}" alt="image" />
                        </div>
                        <div class="content">
                            <h2>{{ $career->title }}</h2>
                            {!! $career->post_content !!}
                        </div>
                        <div class="reply mt-2">
                            <a data-id="{{ $career->id }}" data-title="{{ $career->title }}" class="primary-btn applyNow">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Button trigger modal -->
<!-- Button trigger modal -->
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body contact-area">
            <div class="contact-form">
                <div class="content">
                    <h3>Apply Now</h3>
                    <p id="careerTitle"></p>
                </div>
                <form id="ApplySubmit">
                <input type="hidden" name="careerid" id="careerid">
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" placeholder="Enter name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" placeholder="Enter email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" name="phone" placeholder="Enter phone" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cirriculum Vitae</label>
                    <input type="file" name="cv" class="form-control" id="cv">
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>


        </div>

      </div>

    </div>
  </div>

@endsection

@push('scripts')
    <script>
        $(document).on('click', '.applyNow', function() {
            var careerid = $(this).attr('data-id');
            var careertitle = $(this).attr('data-title');
            $('#careerid').val(careerid);
            $('#careerTitle').text(careertitle);
            $('.modal').modal('show');
        });


        $(document).on('submit','#ApplySubmit',function(e){
            e.preventDefault();
            var params = $('#ApplySubmit').serializeArray();
            var formData = new FormData($('#ApplySubmit')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('front.applyNow') }}",
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                beforeSend: function (data) {
                },
                success: function (data) {
                    alert(data.success);
                },
                error: function (err) {
                    if (err.status == 422) {
                        $.each(err.responseJSON.errors, function (i, error) {
                            var el = $(document).find('[name="' + i + '"]');
                            el.after($('<span style="color: red;">' + error[0] + '</span>').fadeOut(15000));
                        });
                    }
                },
                complete: function () {
                }
            });
        });
    </script>
@endpush
