@extends('layout.app')
@section('content')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item slide-one active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>EXPERIENCE GOD'S</h3>
                        <h1>UNCEASING PROVISION</h1>
                        <p><a class="btn btn-giant btn-primary" href="charity-donation.html" role="button">JOIN US &rarr;</a></p>
                    </div>
                </div>
            </div>
            <div class="item slide-two">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Waves of Grace</h2>
                        <p class="lead">Receive the unceasing wave after wave, after wave, after wave of Grace God has for you.</p>
                        <p><a class="btn btn-lg btn-primary" href="ministry.html" role="button">Learn more &rarr;</a></p>
                    </div>
                </div>
            </div>
            <div class="item slide-three">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Grace and Truth</h2>
                        <p class="lead">For God did not send his Son into the world to condemn the world, but to save the world through him. <em>John 3:17</em></p>
                        <p><a class="btn btn-lg btn-primary" href="image-gallery.html" role="button">Browse gallery &rarr;</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>


    <div class="highlight-bg has-margin-bottom">
        <div class="container event-cta">
            <div class="ec-txt">
                <p>"The Law Demands, but Grace Supplies" - Paster Z.Ndombi.</p>
            </div>
            <a class="btn btn-lg btn-primary" href="event-single.html" role="button">Program details →</a> </div>
    </div>


    <div class="container">
        <div class="row feature-block">
            @foreach($sermons as $sermon)
            <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" src="{{ $base_url .'sermons/' . $sermon->featured_photo }}" alt="catholic church">
                <h5>{{ $sermon->title }}</h5>
                <p>{{ $sermon->description }}</p>
                <p><a href="{{ route('single.sermon',['id'=>$sermon->id]) }}" role="button">Watch Video →</a></p>
            </div>
            @endforeach

        </div>
    </div>


    <div class="container has-margin-bottom">
        <div class="row">
            <div class="col-md-9 has-margin-bottom">
                <div class="section-title left-align-desktop">
                    <h4> LATEST BULLETIN </h4>
                </div>

                @foreach($bulletins as $bulletin)
                <div class="row has-margin-bottom">
                    <div class="col-md-4 col-sm-4"> <img class="img-responsive center-block" src="{{ $base_url .'bulletin/' . $bulletin->featured_photo }}" alt="bulletin blog"> </div>
                    <div class="col-md-8 col-sm-8 bulletin">
                        <h4 class="media-heading">{{ $bulletin->title }} </h4>
                        <p>on  by <a href="#" class="link-reverse">{{ $bulletin->bulletin_by }}</a></p>
                        <p> {{ $bulletin->description }}</p>
                        <a class="btn btn-primary" href="{{ route('single.bulletin',['id'=>$bulletin->id]) }}" role="button">Read Article →</a> </div>
                </div>
                @endforeach

            </div>


            <div class="col-md-3">
                <div class="well">
                    <div class="section-title">
                        <h4> RECENT SERMONS </h4>
                    </div>
                    <video width="220" controls>
                        <source src="{{ $base_url . "sermons/" . $latest_sermon->url }}" type="video/mp4">
                        <source src="{{ $base_url . "sermons/" . $latest_sermon->url }}" type="video/ogg">
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


    <div class="highlight-bg has-margin-bottom">
        <div class="container event-list">
            <div class="section-title">
                <h4> BIBLE VERSES </h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel2">
                        <div class="item">
                            <blockquote class="blockquote-centered"> For God so loved the world that he gave his one and only begotten Son, that who ever believes in him shall not perish but have eternal life. <small>John 3:16 (KJV)</small> </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="blockquote-centered"> For if, by the trespass of the one man, death reigned through that one man, how much more will those who receive God's abundant provision of grace!
                                <small>Romans 5:17 (NIV)</small> </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="blockquote-centered">For God did not send his Son into the world to condemn the world, but to save the world through him. <small>John 3:17</small> </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="section-title">
            <h4> Fellowships </h4>
        </div>
        <div class="row feature-block">

            @foreach($fellowships as $fellowship)
            <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" width="150" src="{{ $base_url .'fellowship/' . $fellowship->url }}" alt="church">
                <h5>{{ $fellowship->title }}</h5>
                <p> {{ $fellowship->descripiton }}</p>
                <p><a href="{{ route('single.fellowship',['id'=>$fellowship->id]) }}" role="button">Read more →</a></p>
            </div>
            @endforeach

        </div>
    </div>


@endsection
