@extends('layout.app')
@section('content')

<div class="subpage-head has-margin-bottom">
    <div class="container">
        <h3>Fellowship</h3>
        <p class="lead"> God is faithful; he will not let you be tempted beyond what you can bear. </p>
    </div>
</div>

<div class="container has-margin-bottom">
    <div class="row">
        <div class="col-md-9 has-margin-bottom"> <img src="{{ $base_url .'fellowship/' . $fellowship->url }}" class="img-responsive has-margin-xs-bottom" alt="ministry">
            <p> {{ $fellowship->description }}</p>
        </div>


        <div class="col-md-3">
            <div class="event-right-block has-border has-margin-bottom">
                <div class="section-title highlight-bg has-padding-xs-top has-padding-bottom">
                    <h4> UPCOMING EVENTS </h4>
                </div>
                <div class="el-block has-margin-xs-bottom">
                    <h4> October 4 </h4>
                    <p class="el-head">Weekly fellowship &amp; prayer</p>
                    <span>Saturday 17:00 PM</span>
                    <p class="el-cta"><a class="btn btn-primary" href="#" role="button">Details →</a></p>
                </div>
                <div class="el-block ">
                    <h4> JUL 29 </h4>
                    <p class="el-head">Show me your faith</p>
                    <span>Thursday 02:00 PM</span>
                    <p class="el-cta"><a class="btn btn-primary" href="#" role="button">Details →</a></p>
                </div>
            </div>
            <div class="well">
                <div class="section-title">
                    <h4> RECENT SERMONS </h4>
                </div>
                <video width="220" controls>
                    <source src="{{ $base_url . "sermons/" . $last_sermon->url }}" type="video/mp4">
                    <source src="{{ $base_url . "sermons/" . $last_sermon->url }}" type="video/ogg">
                    Your browser does not support HTML video.
                </video>
                <div class="list-group">
                    @foreach($sermons as $sermon)
                    <a href="{{ route('single.sermon',['id'=>$sermon->id]) }}" class="list-group-item">
                        <p class="list-group-item-heading">{{ $sermon->title }}</p>
                    </a>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
