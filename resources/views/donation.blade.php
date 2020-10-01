@extends('layout.app')
@section('content')

    <div class="subpage-head has-margin-bottom">
        <div class="container">
            <h3>Charity Donation</h3>
            <p class="lead">Posted on 23 June 2020 by <a href="#" class="link-reverse">pst Z.Ndombi</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 has-margin-bottom">
                <article class="blog-content"> <img src="{{ asset('assets/images/charity-donation-big.jpg') }}" alt="charity donation" class="img-responsive has-margin-xs-bottom">
                    <p class="lead">Covid19 Situation in the country</p>
                    <p>With the current situation in the country we as Peace Makers Church International have decided to come up with a fund raising our fellow believers who have been affected dearly with the pandemic</p>
                    <p>You can always send your donation via mpesa on +254 721 283 328 , in support for our fellow believers, or visit our church with your donation which will be distributed among the believers, be blessed as you give!</p>
                </article>
            </div>


            <div class="col-md-4">

                <div class="charity-box has-margin-xs-bottom">
                    <div class="charity-desc">
                        <h2 class="pledged-amount has-no-margin">Ksh: 60000.00</h2>
                        <p>Pledged of ksh: 15000 goal</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span>60%</div>
                        </div>
                        <div class="clearfix">
                            <div class="pull-left has-margin-xs-right">
                                <h3>24</h3>
                                <p>Backers</p>
                            </div>
                            <div class="pull-left">
                                <h3 class="pledged-amount">17</h3>
                                <p>Days left</p>
                            </div>
                        </div>
                        <div class="text-center has-margin-xs-top"> <a href="#" class="btn btn-lg btn-primary">Donate Now →</a> </div>
                    </div>
                </div>

                <div class="tag-cloud has-margin-bottom"> <a href="#">bulletin</a> <a href="#">events</a> <a href="{{ route('about') }}">church</a> <a href="{{ route('donation') }}">charity</a> <a href="#">belief</a> <a href="#">ministry</a> <a href="#">sermon</a> </div>
            </div>
        </div>
    </div>

@endsection
