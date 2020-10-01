<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our Church is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
    <meta name="keywords" content="Church, Website, Template, Bulletin, Programs, Events, Themeforest, Premium, Charity, Non Profit ">
    <meta name="author" content="Surjith SM">
    <title>PeaceMakers Church International</title>

    <script src="/cdn-cgi/apps/head/WYeuHMJDBbsW5gGKVaLvuooc5oc.js"></script><link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('assets/css/church.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/fancybox.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{ asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel='stylesheet' type='text/css'>
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"> <img src="{{ asset('assets/images/church-logo1.png')}}" alt="church logo" class="img-responsive"></a> </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">ABOUT</a></li>
{{--                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-left" role="menu">--}}
{{--                        <li><a href="ministry.html">Childrens Ministry</a></li>--}}
{{--                        <li><a href="ministry.html">Students Ministry</a></li>--}}
{{--                        <li><a href="ministry.html">Groups</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a href="{{ route('sermons') }}">Sermons</a></li>
{{--                <li><a href="{{ route('donation') }}">Donation</a></li>--}}
                <li><a href="{{ route('prayer.request') }}">Prayer Request</a></li>
                <li><a href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
        </div>

    </div>
</div>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h5>ABOUT THE CHURCH</h5>
                <p>For the word of God is living and active. Sharper than any double-edged sword, it penetrates even to dividing soul and spirit, joints and marrow; it judges the thoughts and attitudes.</p>
            </div>
            <div class="col-sm-6 col-md-3">
                <h5>QUICK LINKS</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About Uss</a></li>
                    <li><a href="{{ route('sermons') }}">Sermons</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h5>OUR ADDRESS</h5>
                <p> Peace Makers Church<br>
                    Kangemi<br>
                    Opposite Lea Toto<br>
                    <br>
                    Phone: (+254) 721 283328<br>
                    Email: <a href="#"><span class="__cf_email__" data-cfemail="b0ddd1d9dcf0d3d1c4d8dfdcd9d3c7d5d2c3d9c4d59ed3dfdd">[info@peacemakers.com]</span></a></p>
            </div>
            <div class="col-sm-6 col-md-3">
                <h5>SERVICE</h5>
                <div class="social-icons">
                    <p>
                        Wednesdays at 6:30PM - 7:30PM
                        Fridays at 5:00PM - 7:30PM (Prayers)
                        Saturdays at 5:00PM - 7:00pm (Fellowship)
                        Sundays at 9:00AM - 12:00pm (Service)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p class="text-center">Copyright &copy; 2020 All rights reserved</p>
        </div>
    </div>
</footer>




<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/ketchup.all.js') }}"></script>
<script src="{{ asset('assets/js/fancybox.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
