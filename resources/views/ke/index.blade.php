@extends('ke.app.master')
@section('page_title', 'Home page')
@section('content')

  <div class="welcome-slider-area owl-carousel">
    <div class="slider-item">
        <img src="{{ url('assets/img/slider/slide1.jpg') }}" alt="">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <div class="welcome-caption">
                            <h1>Today's Progress was yesterday's Plan</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, reiciendis, debitis. Nisi quis placeat, cum. Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item">
        <img src="{{ url('assets/img/slider/slide1.jpg') }}" alt="">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <div class="welcome-caption">
                            <h1>Today's Progress was yesterday's Plan</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, reiciendis, debitis. Nisi quis placeat, cum. Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item">
        <img src="{{ url('assets/img/slider/slide1.jpg') }}" alt="">
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <div class="welcome-caption">
                            <h1>Today's Progress was yesterday's Plan</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, reiciendis, debitis. Nisi quis placeat, cum. Lorem ipsum dolor sit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!--  slider area end -->
<div class="about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ke-about-thumbs wow fadeInLeft">
                    <img src="{{ url('assets/img/1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="ke-about-content wow fadeInRight" data-wow-delay="0.1s">
                    <div class="section-title">
                        <h2>About</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab laudantium, fugiat quaerat dicta repellendus sint inventore culpa ipsa natus asperiores assumenda, ut, hic quidem expedita fugit facilis! At deserunt accusamus vitae voluptate dolorum non eius, dicta aliquam eligendi, sint consectetur dignissimos, quisquam? Quaerat ea, deserunt libero aut veritatis veniam neque.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci itaque unde quae vitae, laboriosam similique nemo aut officia quos optio ipsam iusto, animi minima veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iste!</p>
                    <a href="" class="ke-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
