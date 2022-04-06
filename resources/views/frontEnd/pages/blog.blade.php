<div id="blog" class="container-fluid blog">
    <div class="container">
         <div class="session-title">
            <h2>Our Blog</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
        </div>
            <div class="blog-row row">

                @if (isset($blogs) && $blogs->count() > 0)
                @foreach ($blogs  as $blog)
                <div class="col-lg-4 col-md-6 ">
                    <div class="blog-col">
                     <a href="{{ route('front.blogSingle', $blog->slug) }}">
                         <img src="{{ asset($blog->image) }}" alt="">
                         <span>{{ $blog->created_at->format('F d, Y') }}</span>
                         <h4>{{ $blog->title }}</h4>
                         {!! strip_tags(Str::limit($blog->post_content, 100))  !!}
                         </a>
                     </div>

                 </div>
                @endforeach
                @endif



        </div>
    </div>
</div>
