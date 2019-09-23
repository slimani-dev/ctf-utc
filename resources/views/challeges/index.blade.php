@extends('layouts.dashboard')

@section('title', 'challenges')

@section('content')
    <section id="home" class="video-hero"
             style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;"
             data-section="home">
        <div class="overlay"></div>
        <div class="display-t display-t2 text-center">
            <div class="display-tc display-tc2">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box">
                            <h2>Portfolio grid w/o text</h2>
                            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                <span>Work  grid w/o text</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="colorlib-work">
        <div class="container">
            <div class="row">
                @for($i = 0; $i< 20; $i++)
                    <div class="col-md-4 col-sm-6 text-center animate-box">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url({{ asset('images/work-'.($i%9 +1).'.jpg') }});">
                                <a href="#">
                                    <p class="tag"><span class="sale">New</span></p>
                                    <div class="title"><h2>Catch The Flag</h2></div>
                                </a>
                                <div class="cart">
                                    <p>
                                        <span><a href="#">start</a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="product-detail.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
