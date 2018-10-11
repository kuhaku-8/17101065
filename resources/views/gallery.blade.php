@extends('layouts.main')

@section('title')
    Gallery
@endsection

@push('header')
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel2/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel2/dist/assets/owl.theme.default.css')}}">
    <link href="{{asset('assets/plugins/lightbox2/dist/css/lightbox.css')}}" rel="stylesheet" />
@endpush

@section('header')
    <h1>GALLERY</h1>
    <ol class="breadcrumb">
        <li><a href="#">Menu</a></li>
        <li class="active">Gallery</li>
    </ol>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">GAMES 3D</div>
        <div class="panel-body">
            <div class="owl-carousel styleThree" data-title="Adventure">
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-1.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-2.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-3.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-4.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-5.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-6.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-7.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-8.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-9.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-10.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-11.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-12.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-13.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-14.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-15.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-16.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-17.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-18.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-19.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-20.jpg')}}" alt="Owl Carousel Image" />
                </div>
            </div>
            <div class="owl-carousel styleThree" data-title="Strategy">
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-1.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-2.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-3.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-4.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-5.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-6.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-7.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-8.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-9.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-10.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-11.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-12.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-13.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-14.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-15.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-16.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-17.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-18.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-19.jpg')}}" alt="Owl Carousel Image" />
                </div>
                <div class="item">
                    <img src="{{asset('assets/images/image-gallery/thumb/thumb-20.jpg')}}" alt="Owl Carousel Image" />
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script src="{{asset('assets/js/pages/medias/carousel.js')}}"></script>
    <script src="{{asset('assets/plugins/owl-carousel2/dist/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/pages/medias/owl-carousel.js')}}"></script>
@endpush