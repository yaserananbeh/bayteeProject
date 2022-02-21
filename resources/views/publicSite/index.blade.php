@extends('publicSite.layout.master')
@section('content')

<section class="banner-two">
    <div class="banner-two__bg" style="opacity: 0.5;">
        <div class="banner-two__bg-inner" data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/backgrounds/banner-2-bg-1.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-2.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-3.jpg" } ], "transition": "fade", "timer": false }' style="background-image: url('assets/images/backgrounds/sliderImage.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;"></div><!-- /.banner-two__bg-inner -->
    </div><!-- /.banner-two__bg -->
    <div class="container ">
        <div class="mb-5">
            <p>explore</p>
            <h2>Jordan Houses</h2>
        </div>

        <div style="margin-left: 70px;">
            <a class="thm-btn rounded-pill" href="{{ route('houses-list.index') }}">Explore Now</a>
        </div>
    </div>
</section>

<section class="destinations-three">
    <div class="container">
        <div class="block-title text-center">
            <p>Checkout</p>
            <h3>The Cities</h3>
        </div>
        <div class="row">
            @foreach ($category as $categories)
            <div class="col-lg-4 w-100 col-md-6">
                <div class="destinations-three__single">
                    <img style="height: 45vh" src="uploads/{{$categories->category_img}}" alt="">
                    <div class="destinations-three__content">
                        <h3><a href="{{ route('houses-list.show',$categories->id)}}">{{$categories->category_name}}</a></h3>
                    </div>
                    <div class="destinations-three__hover-content">
                        <h3><a href="{{ route('houses-list.show',$categories->id)}}">{{$categories->category_name}}</a></h3>
                        <p>{{$categories->trip->count(). ' Houses'}}</p>
                        <a href="{{ route('houses-list.show',$categories->id)}}  " class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>





<section class="cta-one cta-one__home-two">
    <div class="container">
        <h3>Discover the beauty of architecture</h3>
        <div class="cta-one__button-block">
            <a href="{{ route('houses-list.index') }}" class="thm-btn cta-one__btn">Book Now!</a><!-- /.thm-btn cta-one__btn -->
        </div>
    </div>
</section>

<section class="tour-one">
    <div class="container">
        <div class="block-title text-center">
            <p>Featured Houses</p>
            <h3>Most Popular Houses</h3>
        </div>

        <div class="tour-one__carousel tour-one__carousel-no-overflow thm__owl-carousel  owl-carousel owl-theme" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
            @foreach ($trip as $trips)
            <div class="item">


                <div class="tour-one__single">
                    <div class="tour-one__image">
                        <img style="min-width:35wh; max-height:30vh" src="{{asset('trip_images/'.$trips->image)}}" alt="">
                    </div>

                    <div class="tour-one__content" style="min-height: 350px">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="{{route('guide',$trips->guide->id)}}"><i></i> {{"guide: " . $trips->guide->name}}</a></li>
                            <li><a><i class="fas fa-calendar-day"></i> {{$trips->date}}</a></li>
                        </ul>

                        <h3><a href="{{ route('trips-details.show',$trips->id)}}">{{$trips->name}}</a></h3>
                        <p><span>{{$trips->price . "JD"}}</span> / Per Person</p>
                        <p>Capacity :{{$trips->max_visitors}} Person</p>
                        <ul class="tour-one__meta list-unstyled">
                            <li><a><i class="far fa-clock"></i> {{$trips->days . "day"}}</a></li>
                            <!-- <li><a><i class="far fa-user-circle"></i> {{"+". $trips->minimum_age}}</a></li> -->
                            <li><a href="{{route('houses-list.show',$trips->category->id)}}"><i class="far fa-map"></i>{{$trips->category->category_name}}</a></li>
                        </ul>
                    </div>


                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>



<section class="cta-four img-responsive" style="background-image: url(assets/images/backgrounds/subHero.jpg);">
    <div class="container">
        <p>Find Your Future Home</p>
        <h3>FIND THE BEST HOUSE IN<span style="color:white"> Jordan</span></h3>
    </div>
</section>


<section class="blog-one">
    <div class="container">
        <div class="block-title text-center">
            <p>Check out Our</p>
            <h3>Recently Added</h3>
        </div>
        <div class="row">
            @foreach ($news as $tripDate)
            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                <div class="blog-one__single">
                    <div class="blog-one__image">
                        <img style="min-width:35wh; max-height:30vh" src="{{asset('trip_images/'.$tripDate->image)}}" alt="">
                        <a href="{{ route('trips-details.show',$tripDate->id)}}"><i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                    <div class="blog-one__content" style="min-height:280px">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="{{route('guide',$tripDate->guide->id)}}"><i></i> {{"guide: " . $tripDate->guide->name}}</a></li>
                            <li><a><i class="far fa-comments"></i> {{$tripDate->date}}</a></li>

                        </ul>
                        <h3><a href="{{ route('trips-details.show',$tripDate->id)}}">{{$tripDate->name}}</a></h3>
                        <ul class="tour-one__meta list-unstyled">
                            <li><a><i class="far fa-clock"></i> {{$tripDate->days . " day"}}</a></li>
                            <!-- <li><a><i class="far fa-user-circle"></i> {{"+". $tripDate->minimum_age}}</a></li> -->
                            <li><a href="{{ route('houses-list.show',$tripDate->category->id)}}"><i class="far fa-map"></i>{{$tripDate->category->category_name}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


@endsection