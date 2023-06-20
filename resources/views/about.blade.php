@extends('template.tmp_home')
@section('content')
        <section class="section">
            <div class="container">
                <div class=" ">
                    <div class="row">
                        <div class="col-md-6 shop-media">
                            <div class="row">
                                <div class="col-md-12">
                                <div class="image-wrap entry">
                                    <img src="assets/tmp_home/upload/3.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="assets/tmp_home/upload/3.jpg" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="image-wrap entry">
                                        <img src="assets/tmp_home/upload/4.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]" href="assets/tmp_home/upload/4.jpg" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div><!-- end image-wrap -->
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="image-wrap entry">
                                        <img src="assets/tmp_home/upload/5.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]" href="assets/tmp_home/upload/5.jpg" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div><!-- end image-wrap -->
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="image-wrap entry">
                                        <img src="assets/tmp_home/upload/5.jpg" alt="" class="img-responsive">
                                        <div class="magnifier">
                                            <a rel="prettyPhoto[inline]" href="assets/tmp_home/upload/5.jpg" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div><!-- end image-wrap -->
                                </div>
                            </div><!-- end row -->
                        </div><!-- end col -->

                        <div class="col-md-6">
                            <div class="shop-desc">
                                <h3>About Us</h3>
                                <small><?=setting()->nama_cam ?></small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis consequat condimentum. In a tincidunt purus. Curabitur facilisis luctus aliquet. Aenean a cursus erat, sit amet interdum arcu. Mauris aliquam magna turpis, lobortis pellentesque velit elementum et. Nulla scelerisque a lorem nec posuere. Nunc convallis posuere tincidunt. Pellentesque a aliquet odio. Integer euismod, enim id lacinia auctor, tortor turpis malesuada enim, in semper turpis magna quis enim.</p>
                                <div class="shop-meta">
                                    <a href="home" class="btn btn-primary">Back Home</a>
                                    <ul class="list-inline">
                                        <li> Contact</li>
                                        <li>Phone: <a href="#"><?=setting()->phone ?></a>
                                        <li>IG: <a href="#"><?=setting()->ig ?></a>
                                        <li>FB: <a href="#"><?=setting()->fb ?></a>
                                        <li>Email: <a href="#"><?=setting()->email ?></a>
                                    </ul>
                                </div><!-- end shop meta -->
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->
</div>
</div>
</div>
                    
@endsection