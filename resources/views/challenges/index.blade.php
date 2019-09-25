@extends('layouts.dashboard')

@section('title', 'challenges')

@section('content')
    <section id="home" class="video-hero"
             style="height: 500px; background-image: url({{ asset('images/cover_img_1.jpg') }});  background-size:cover; background-position: center center;background-attachment:fixed;"
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
                @foreach($challenges as $challenge)
                    <div class="col-md-4 col-sm-6 animate-box">
                        <div class="product-entry">
                            <div class="product-img" data-toggle="modal"
                                 data-target="#challengeModal{{ $challenge->id }}"
                                 style="background-image: url({{ asset($challenge->image) }}); cursor: pointer">
                                <p class="tag"><span class="sale">{{ $challenge->category->name }}</span></p>
                                <a href="#">
                                    <div class="title">
                                        <h2 class="price"><span>{{ $challenge->points }}</span>
                                            points
                                        </h2>
                                    </div>
                                </a>
                            </div>
                            <article class="desc">
                                <h2>
                                    <a href="{{ $challenge->name }}" data-toggle="modal"
                                       data-target="#challengeModal{{ $challenge->id }}">
                                        {{ $challenge->name }}
                                    </a>
                                </h2>
                                <strong>Solved by : </strong>{{ count($challenge->users) }} users<br>
                                <p class="admin"><span>{{ $challenge->created_at->format('d-m-Y') }}</span> <a href="#"
                                                                                                               class="admin"><span> by {{ $challenge->user->name }}</span></a>
                                </p>
                            </article>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="challengeModal{{ $challenge->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <article>
                                <h2 class="text-uppercase">{{ $challenge->name }}</h2>
                                <p class="admin">
                                    <span>{{ $challenge->created_at->format('d-m-Y') }}</span>
                                    <a href="#"
                                       class="admin"><span> by {{ $challenge->user->name }}</span></a>
                                </p>
                                <strong>Points : </strong>{{ $challenge->points }}<br>
                                <strong>Solved by : </strong>{{ count($challenge->users) }} users<br>
                                <strong>Category: </strong>{{ $challenge->category->name }}<br>
                                <strong>Description: </strong><br>
                                <div id="description{{ $challenge->id }}" style="padding-top: 10px"></div>
                                {{ Form::model(null, ['route' => 'challenges.store','class' => 'form-horizontal','files' => true])}}
                                {{ Form::token() }}
                                <div class="form-group">
                                    <div class="col-xs-12 ">
                                        {{ Form::text('name',null,['class' => 'form-control form-control-lg border-dark']) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </article>
                        </div>
                    </div>
                @endforeach
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

    <div id="colorlib-subscribe" class="colorlib-subscribe"
         style="background-image: url({{ asset('images/cover_img_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                    <h2>You want to add something</h2>
                    <p>If you have a challenge and you want to add it it's simple just add it here and once approved
                        everyone will see it</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('challenges.create') }}" class="btn btn-primary">Add Challenge</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('js/QuillDeltaToHtmlConverter.bundle.js') }}"></script>
<script>
    function showContent(id,delta) {
        const converter = new QuillDeltaToHtmlConverter(delta, {});
        const html  = converter.convert();
        console.log(html);
        $(id).html(html);
    }
    @foreach($challenges as $challenge)
        showContent( '#description{{ $challenge->id }}', {!! $challenge->description !!});
    @endforeach
</script>
@endsection