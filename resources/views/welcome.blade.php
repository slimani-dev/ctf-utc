@extends('layouts.dashboard')

@section('content')
    <section id="home" class="video-hero"
             style="height: 100vh; background-image: url({{ asset('images/cover_img_1.jpg') }});  background-size:cover; background-position: center center;background-attachment:fixed;"
             data-section="home">
        <div class="overlay"></div>
        <a class="player"
           data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="animate-box">
                            <h2>Take on your biggest projects and goals</h2>
                            <p>with Unapp's high quality features</p>
                            @guest
                                @if (Route::has('register'))
                                    <p><a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-custom">Start Now</a></p>
                                @endif
                            @else
                                <p><a href="{{ route('challenges') }}" class="btn btn-primary btn-lg btn-custom">Go to
                                        challenges</a></p>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
