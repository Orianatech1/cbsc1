@extends('layout.main')

@section('main-content')


<style>
    .pro-description .nav-tabs {
        border-bottom: 0px;
        margin-bottom: 40px;
    }

    .pro-description .center {
        display: flex;
        justify-content: center;
    }


    .pro-description .nav-tabs>li>a {
        position: relative;
        list-style: none;
        display: inline-block;
        float: left;
        n font-style: italic;
        font-weight: 700;
        font-size: 18px;
        color: #92278F;
        padding: 0px 5px 10px;
        cursor: pointer;
        border-bottom: 1px solid #ebebeb;
        text-decoration: none;
    }

    .pro-description .nav-tabs>li.active>a,
    .pro-description .nav-tabs>li.active>a:focus,
    .pro-description .nav-tabs>li a.active:before {
        content: url(../kidsacade/images/gallery/menu-icon.jpg);
        position: absolute;
        bottom: -10px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .pro-description .nav-tabs>li>a:hover {
        border-bottom: 1px solid #ebebeb;
    }

    .pro-description .nav-tabs>li:nth-child(1) a {
        color: red !important;
    }

    .pro-description .nav-tabs>li:nth-child(2) a {
        color: green !important;
    }

    .pro-description .nav-tabs>li:nth-child(3) a {
        color: #92278f !important;
    }

    .pro-description .nav-tabs>li:nth-child(4) a {
        color: #fc7f0c !important;
    }

    .pro-description .nav-tabs>li:nth-child(5) a {
        color: #ee257c !important;
    }

    .pro-description .nav-tabs>li:nth-child(6) a {
        color: #92278f !important;
    }
</style>

<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3>About Us</h3>
            <ul>
                <li><a href="{{ url('/welcome') }}">Home /</a></li>
                <li>About</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<!-- Product start here -->
<section class="product-details padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="pro-details">
                    <div class="row">

                        <div class="pro-description">
                            <div class="center">
                                <ul class="nav nav-tabs" id="FacultyTab" role="tablist">

                                    <li class="test" role="presentation"><a class="active" href="#Principal"
                                            aria-controls="description" role="tab" data-toggle="tab">Principal</a></li>


                                    <li class="test" role="presentation"><a href="#Co-ordinator" aria-controls="reviews"
                                            role="tab" data-toggle="tab">Co-ordinator</a></li>

                                </ul>
                            </div>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="Principal">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="{{ url('storage/banner1.jpg') }}"
                                                                onerror="this.src='{{ url('storage/banner1.jpg') }}'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr.
                                                                Kunjir
                                                                Sir
                                                                ..
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Principal
                                                                </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B.Ed.
                                                                    DSM</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 20 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    principal@punecambridge.org</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="{{ url('storage/banner1.jpg') }}"
                                                                onerror="this.src='{{ url('storage/banner1.jpg') }}'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Dr.
                                                                Katkar

                                                                Sir
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Vice
                                                                    principal </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. M.ED.,
                                                                    M.Phil., Ph.D.</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 15 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    principal@punecambridge.org</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="Co-ordinator">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="{{ url('storage/banner1.jpg') }}"
                                                                onerror="this.src='{{ url('storage/banner1.jpg') }}'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr.
                                                                XYZ
                                                                R.
                                                                .
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Co-ordinator
                                                                </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. A. M.ED
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 12 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    xyz20@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="{{ url('storage/banner1.jpg') }}"
                                                                onerror="this.src='{{ url('storage/banner1.jpg') }}'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                pqr


                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Co-ordinator
                                                                </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.SC. , M.ED.
                                                                    , D.S.M.</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    neetabenkepune@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="{{ url('storage/banner1.jpg') }}"
                                                                onerror="this.src='{{ url('storage/banner1.jpg') }}'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                tieieie


                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Co-ordinator
                                                                </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc. B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    gasdfas@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="{{ url('storage/banner1.jpg') }}"
                                                                onerror="this.src='{{ url('storage/banner1.jpg') }}'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Tredfd


                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Co-ordinator
                                                                </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc..B.ED
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    tygrfr2@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
