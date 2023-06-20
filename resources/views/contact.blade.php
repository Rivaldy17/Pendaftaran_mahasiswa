@extends('template.tmp_home')
@section('content')
<section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Contact</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">

                    <div id="map" class="wow slideInUp"></div>

                    <div class="row contactv2 text-center" id="cto">
                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-email wow fadeIn"></i>
                                <h4>Contact us today</h4>
                                <small>Phone: +62  <?=setting()->phone ?></small>
                                <small>Email: <?=setting()->email ?></small>
                                <p><a href="#"> <?=setting()->email ?></a></p>
                            </div><!-- end small-box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-map-with-position-marker wow fadeIn"></i>
                                <h4>University location</h4>
                                <small><?=setting()->alamat ?></small>
                                <p><a href="#">View on Google Map</a></p>
                            </div><!-- end small-box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-share wow fadeIn"></i>
                                <h4>Be Social</h4>
                                <small>Instagram: <?=setting()->ig ?></small>
                                <small>Facebook: facebook.com/<?=setting()->fb ?></small>
                                <p><a href="#">Email Newsletter</a></p>
                            </div><!-- end small-box -->
                        </div><!-- end col -->
                    </div><!-- end contactv2 -->

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title text-center">
                                <h3>Contact Form</h3>
                                <p>Maecenas sit amet tristique turpis. Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                            </div><!-- end title -->
                            @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li style="font-size:15px;">{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif
@if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
                            <form class="big-contact-form" action="{{route('actioncontact')}}#cto" method="post">
            @csrf
                                <input name="nama_c" type="text" class="form-control" value="<?php echo session()->get('nama') ?>" readonly>
                                <input name="email_c" type="email" class="form-control" value="<?php echo session()->get('email') ?>" readonly>
                                <input name="subject" type="text" class="form-control" placeholder="Subject..">
                                <textarea name="message" class="form-control" placeholder="Message goes here.."></textarea>
                                <input name="status" type="hidden" value="1" class="form-control" readonly>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>
@endsection