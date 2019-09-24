@extends('layouts.dashboard')

@section('title', 'Add challenges')

@section('content')
    <section id="home" class="video-hero"
             style="height: 100px; background-image: url({{ asset('images/cover_img_1.jpg') }});  background-size:cover; background-position: center center;background-attachment:fixed;"
             data-section="home">
        <div class="overlay"></div>
    </section>

    <div class="colorlib-work" style="background: white">
        <div class="container">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-xs-10 col-xs-offset-1 text-center p-5 m-5">
                    <div>
                        {{ Form::model(null, ['route' => 'challenges.store','class' => 'form-horizontal','files' => true])}}
                        {{ Form::token() }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name:',['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{ Form::text('name',null,['class' => 'form-control form-control-lg']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('flag', 'Flag:',['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{ Form::text('flag',null,['class' => 'form-control form-control-lg']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('points', 'Points:',['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{ Form::number('points',null,['class' => 'form-control form-control-lg','step'=>"10", 'min'=>"0", 'max'=>"200"]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="category">Category:</label>
                            <div class="col-sm-10">
                                {{ Form::select('category_id', $categories, null, ['placeholder' => 'Select category...','class'=>"form-control form-control-lg"]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('image', 'Image:',['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{ Form::file('image', null, ['class'=>"form-control-file"]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('description', 'Description:',['class' => 'control-label col-sm-2']) }}
                            <div class="col-sm-10">
                                {{ Form::textarea('description',null,['class'=>"form-control"]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
