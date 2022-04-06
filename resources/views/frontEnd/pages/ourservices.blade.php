<section class="our-service container-fluid">
    <div class="container">
        <div class="session-title row">
            <h2>Our Services</h2>
            <!-- <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p> -->
        </div>
        <div class="col-sm-12 blog-cont">
            <div class="row no-margin">
                @if (isset($ourservices) && $ourservices->count() > 0)
                    @foreach ($ourservices as $service)
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">
                            <div class="blog_imagein">
                                <img src="{{ asset($service->image) }}" alt="">
                            </div>
                            <div class="blog-single-det">
                                <h6>{{ $service->title }}</h6>
                                {!! strip_tags(Str::limit($service->post_content, 40)) !!}
                                <a href="{{ route('front.servicessingle', $service->slug) }}">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif


            </div>
        </div>

    </div>
</section>
