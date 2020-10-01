@extends('layout.app')
@section('content')

    <div class="subpage-head has-margin-bottom">
        <div class="container">
            <h3>Prayer Request</h3>
            <p class="lead">Send your prayer request let us pray with you</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 has-margin-bottom">

                <section class="post-comment-form">
                    <h3 class="comments-head">Send your prayer request</h3>
                    <form class="form" role="form" method="post" action="{{ route('post.prayer-request') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-4">
                                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Your name (required)">
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Your email (optional)">
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <input type="text" name="phone" id="phone" class="form-control input-lg" placeholder="Phone (required)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea cols="8" rows="4" name="description" id="description" class="form-control input-lg" placeholder="Your Prayer Request (required)"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Prayer</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>


            <div class="col-md-3">
                <div class="well">
                    <h4>Inspiration</h4>
                    <p><em>Ephesians 3:20</em> <br> Now unto Him Who is able to do exceeding abundantly above all that we ask or think according to the power that works in us.</p>
                </div>

                <div class="tag-cloud has-margin-bottom"> <a href="#">bulletin</a> <a href="#">programs</a> <a href="#">events</a> <a href="#">church</a> <a href="#">pastors</a> <a href="#">belief</a> <a href="#">ministry</a> <a href="#">sermon</a> </div>
            </div>
        </div>
    </div>

@endsection
