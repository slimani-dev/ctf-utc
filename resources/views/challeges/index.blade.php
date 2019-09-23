@extends('layouts.dashboard')

@section('content')
    <section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="overlay"></div>
        <div class="display-t display-t2 text-center">
            <div class="display-tc display-tc2">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box">
                            <h2>Portfolio grid w/o text</h2>
                            <p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span>Work  grid w/o text</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="colorlib-work">
        <div class="container">
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-1.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-2.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-3.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-4.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-5.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-6.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-7.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-8.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="work-grid">
                        <a href="#" class="work-img" style="background-image: url(images/work-9.jpg)">
                            <span class="icon"><i class="icon-plus2"></i></span>
                        </a>
                    </div>
                </div>
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
