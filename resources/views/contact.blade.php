@extends('layout.app')
@section('content')

    <div class="subpage-head has-margin-bottom">
        <div class="container">
            <h3>Contact us</h3>
            <p class="lead">Our Church address and contact details</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 has-margin-bottom">
                <form id="phpcontactform" role="form" method="post" action="{{ route('post.contact') }}" >
                    @csrf
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name (required)" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label>Email ID</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email (optional)" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Your Phone Number (required)" name="phone" id="phone">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" rows="5" name="description" placeholder="Enter Your Message (required)" id="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Send message</button>
                    <span class="help-block loading"></span>
                </form>
            </div>

            <div class="col-md-6 has-margin-bottom">
                <h5>OUR ADDRESS</h5>
                <div class="row">
                    <div class="col-lg-6">Peace Makers Church<br>
                        Kangemi<br>
                        Opposite Lea Toto<br>
                        </div>
                    <div class="col-lg-6">Phone: (+254) 721 283328<br>
                        Email: <a href="#"><span class="__cf_email__" data-cfemail="eb868a8287ab888a9f83848782889c8e8998829f8ec5888486">[info@peacemakers.com]</span></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="location-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7977.66691959538!2d36.74090152298154!3d-1.2730849200688645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f199b4b5c610d%3A0xf90f500dd2746cd3!2sGichagi%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1601575878746!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

@endsection
