@extends('layout.app')
@section('content')

    <div class="subpage-head has-margin-bottom">
        <div class="container">
            <h3>Bulletin</h3>
            <p class="lead">You cannot, but God Can. Rest in His work</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9 has-margin-bottom">
                <img src="{{ $base_url . "bulletin/" . $bulletin->featured_photo }}" height="300" alt="">
                <p>
                    {{ $bulletin->description }}
                </p>
            </div>


            <div class="col-md-3">
                <div class="well has-margin-bottom">
                    <div class="section-title">
                        <h4> RECENT SERMONS </h4>
                    </div>
                    <video width="220" controls>
                        <source src="{{ $base_url . "sermons/" . $last_sermon->url }}" type="video/mp4">
                        <source src="{{ $base_url . "sermons/" . $last_sermon->url }}" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="list-group">
                        @foreach($sermons as $single_sermon )
                            <a href="{{ route('single.sermon',['id'=>$single_sermon->id]) }}" class="list-group-item">
                                <p class="list-group-item-heading">{{ $single_sermon->title }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
