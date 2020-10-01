@extends('layout.app')
@section('content')

    <div class="subpage-head has-margin-bottom">
        <div class="container">
            <h3>About us</h3>
            <p class="lead">Becoming and maintaining a Disciple Making Church</p>
        </div>
    </div>

    <div class="container has-margin-bottom">
        <div class="row">
            <div class="col-md-9 has-margin-bottom">
                <h4>Our Mission</h4>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <h4>Our Vision</h4>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            </div>


            <div class="col-md-3 visible-md-block visible-lg-block">
                <div class="well">
                    <div class="section-title">
                        <h4> RECENT SERMONS </h4>
                    </div>
                    <video width="230" controls>
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

    <div class="container">
        <div class="section-title">
            <h4> OUR Pastors </h4>
        </div>
        <div class="row feature-block">
            <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" style="height: 200px !important;" src="{{ asset('assets/images/ndombi.jpeg')}}" alt="catholic church">
                <h5>Pastor: Z.Ndombi</h5>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa. </p>
            </div>

            <div class="col-md-4 col-sm-6 has-margin-bottom"> <img class="img-responsive" style="height: 200px !important;" src="{{ asset('assets/images/pp.jpeg')}}" alt="ministry sermon">
                <h5>Pastor: Malasi</h5>
                <p>Fermentum massa.Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            </div>

            <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom"> <img class="img-responsive" style="height: 200px !important;" src="{{ asset('assets/images/pp.jpeg') }}" alt="bulletin programs">
                <h5>Pastor: Shikwe</h5>
                <p> Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa etiam porta fusce dapibus.</p>
            </div>

        </div>
    </div>

@endsection
