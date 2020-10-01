@extends('layout.app')
@section('content')
    <div class="subpage-head has-margin-bottom">
        <div class="container">
            <h3>Church Sermons</h3>
            <p class="lead">A collection of our church sermons</p>
        </div>
    </div>
    <div class="container has-margin-bottom">
        <div class="row">
            @foreach($sermons as $sermon)
            <div class="col-sm-6 has-margin-xs-bottom">
                <div class="embed-responsive embed-responsive-4by3">
                    <video width="700" controls>
                        <source src="{{ $base_url . "sermons/" . $sermon->url }}" type="video/mp4">
                        <source src="{{ $base_url . "sermons/" . $sermon->url }}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                </div>
                <h4>{{ $sermon->title }}</h4>
                <p>{{ $sermon->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
