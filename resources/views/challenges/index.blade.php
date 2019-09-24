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
                    <div class="col-md-4 col-sm-6 text-center animate-box">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url({{ asset($challenge->image) }});">
                                <p class="tag"><span class="sale">{{ $challenge->category->name }}</span></p>
                                <a href="#">
                                    <div class="title"><h2 class="price"><span>{{ $challenge->points }}</span> points</h2></div>
                                </a>
                            </div>
                            <div class="desc">
                                <h3><a href="product-detail.html">{{ $challenge->name }}</a></h3>
                                <p><span>@</span> {{ $challenge->user->name }}</p>
                            </div>
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

    <div id="colorlib-subscribe" class="colorlib-subscribe" style="background-image: url({{ asset('images/cover_img_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                    <h2>You want to add something</h2>
                    <p>If you have a challenge and you want to add it it's simple just add it here and once approved everyone will see it</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Challenge</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Challenge</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" action="">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="flag" name="flag" placeholder="Enter password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input type="number" step="1" min="0" max="200" class="form-control" id="points" name="points" placeholder="Enter password">
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
