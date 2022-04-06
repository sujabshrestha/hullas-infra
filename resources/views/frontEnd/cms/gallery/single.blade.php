
@extends('frontEnd.layout.master')

@push('style')
@endpush

@section('content')

    <div class="gallery-container">
        <div class="about-page-title">
            {{ $album->title ?? '' }}
        </div>
        <div class="container">
            <a href="{{ route('front.gallery') }}" class="back-button"><i class="fa fa-arrow-left"></i></a>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4">
                        <div class="album-container">
                            <a href="javascript:void(0)" onclick="openModal();currentSlide(1)">
                                <div class="img-container">
                                    <img src="{{ asset('thumbnail/'.$image->image) }}" alt="" />
                                </div>
                                <div class="overlay">
                                    <div class="view">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="galleryModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                @foreach($images as $image)
                <div class="mySlides">

                    <img src="{{ asset($image->image) }}" style="width:100%; height: auto">
                </div>
                @endforeach

                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


            </div>
        </div>
    </div>

@endsection

@push('script')

<script>
    // gallery
    function openModal() {
        document.getElementById("galleryModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("galleryModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }
</script>

@endpush