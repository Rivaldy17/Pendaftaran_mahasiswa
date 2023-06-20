@extends('template.tmp_home')
@section('content')
<section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p><?=setting()->nama_cam ?></p>
                    <small>Edulogy is the ideal choice for your organization, your business and your online education system. Create your online course now with unlimited page templates, color options, and menu features.</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="#" class="btn btn-primary wow slideInLeft">Read More</a> &nbsp;&nbsp;&nbsp;
                            <?php if(session()->get('form') == 0) : ?><a href="/form" class="btn btn-default wow slideInRight">join Now</a> <?php else : ?><?php endif; ?><?php if(session()->get('form') == 1) : ?><a href="/dashboard" class="btn btn-default wow slideInRight">Dashboard</a> <?php else : ?><?php endif; ?>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>
<section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="assets/tmp_home/images/1.png" alt="" class="img-responsive wow slideInLeft" style="margin-top:135px;">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h2>Lorem ipsum dolor sit amet <mark>consectetur</mark>adipisicing elit,
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit Ex voluptatum explicabo commod.    
                        </h2>

                            <p>Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero.</p>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                        <li>Custom Shortcodes</li>
                                        <li>Visual Page Builder</li>
                                        <li>Unlimited Shortcodes</li>
                                        <li>Responsive Theme</li>
                                        <li>Tons of Layouts</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
                                        <li>Font Awesome Icons</li>
                                        <li>Pre-Defined Colors</li>
                                        <li>AJAX Transitions</li>
                                        <li>High Quality Support</li>
                                        <li>Unlimited Options</li>
                                    </ul><!-- end check -->    
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                    <ul class="check">
                                        <li>Shopping Layouts</li>
                                        <li>Pre-Defined Fonts</li>
                                        <li>Style Changers</li>
                                        <li>Footer Styles</li>
                                        <li>Header Styles</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 --> 
                            </div><!-- end row -->   

                            <hr class="invis">

                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-primary">Learn More About us</a>
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@endsection