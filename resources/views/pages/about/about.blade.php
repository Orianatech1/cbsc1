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
        float: left;n
        font-style: italic;
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
            <h3>Principal</h3>
            <ul>
                <li><a href="{{ url('/welcome') }}">Home /</a></li>
                <li>About / Our Team / Principal</li>
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

                                    <li class="test" role="presentation"><a href="#PrimaryI-V" aria-controls="reviews"
                                            role="tab" data-toggle="tab">Primary I-V</a></li>

                                    <li class="test" role="presentation"><a href="#SecondaryVI-VIII"
                                            aria-controls="reviews" role="tab" data-toggle="tab">Secondary VI-VIII</a>
                                    </li>

                                    <li class="test" role="presentation"><a href="#SrSecondaryXI-XII"
                                            aria-controls="reviews" role="tab" data-toggle="tab">Sr Secondary XI
                                            -XII</a></li>

                                    <li class="test" role="presentation"><a href="#SecondaryIX-X"
                                            aria-controls="reviews" role="tab" data-toggle="tab">Secondary IX - X</a>
                                    </li>

                                    <li class="test" role="presentation"><a href="#Counsellor" aria-controls="reviews"
                                            role="tab" data-toggle="tab">Counsellor</a></li>

                                    <li class="test" role="presentation"><a href="#NURSE" aria-controls="reviews"
                                            role="tab" data-toggle="tab">NURSE</a></li>

                                    <li class="test" role="presentation"><a href="#Pre-Primary" aria-controls="reviews"
                                            role="tab" data-toggle="tab">Pre-Primary</a></li>


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
                                                            <img src="../storage/Menus/About/OurTeam/vv.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Sahare
                                                                V.
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
                                                                    principal@jspmbpsn.edu.in</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/vice%20principal.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Dr.
                                                                Kadam
                                                                G.
                                                                S.
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
                                                                    principal@jspmbpsn.edu.in</li>
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
                                                            <img src="../storage/Menus/About/OurTeam/Rohit%20Sumbare.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr.
                                                                Sumbare
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
                                                                    tgtcoordinator20@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Neeta%20Benke.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Benke
                                                                N.
                                                                A.
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
                                                            <img src="../storage/Menus/About/OurTeam/Govidamaa%20Badugu.webp"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Badagu
                                                                G.
                                                                T.
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
                                                                    govi_badgu@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Mansi%20Gaikwad.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Gaikwad
                                                                M.
                                                                ..
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
                                                                    mansigaikwad9342@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="PrimaryI-V">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Rajeshri%20Deshpande.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Deshpande
                                                                R.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.sc B.Ed
                                                                    (Computer)</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rajeshri.dsp@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/kk.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Gavali
                                                                K.
                                                                K.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.sc. B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    krutikagavali26@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Varsha%20Gosavi.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Gosavi
                                                                V.
                                                                J.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    varsha.gosavi2013@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Vidya%20Shinde.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Shinde
                                                                V.
                                                                R.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A B.ed (
                                                                    D.ed )</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    vidyabajiraodesai@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Rohini.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Gaikwad
                                                                R.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.sc (Maths),
                                                                    B.Ed.</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 3 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rohinisg094@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Ujawala%20chavan.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Chavan
                                                                U.
                                                                P.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. Bed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ujwalapankaj16@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Sonali%20Kumawat.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Phutane
                                                                S.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A. D.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    phutanesonali@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Reshma.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Karande
                                                                R.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> BSc. BEd</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    reshmakarandems25@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Aparna%20Bage.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Bage
                                                                A.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.sc B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    aparna.bage@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Purva%20Dravid.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Dravid
                                                                P.
                                                                P.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. Sc B. Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> Five years
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    dravidpurva@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Saraswati%20Biradar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Biradar
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Com B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    biradarsaraswati82@gmail.com </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Urmila%20Jadhav.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Jadhav
                                                                U.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A.B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 5 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    urmilajadhav5729@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Ashwini%20Kolekar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kolekar
                                                                A.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A.B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 9 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ashwinisandip.k@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Akanksha%20Panhale.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Panhale
                                                                A.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A M.Lib
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 4 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    panhaleakanksha@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Dhanshree%20Konde.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Konde
                                                                D.
                                                                C.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. .B. Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    gharedhanshri37875@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Rasana%20Supekar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Supekar
                                                                R.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B.Ed.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 years
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rasanabhagwat@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Varsha%20Thite.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Thite
                                                                V.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B. A. B.ed.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    varshathite9999@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Jyoti%20Patane.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Patane
                                                                J.
                                                                D.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B . Com.DEL.
                                                                    Ed</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    jyotipatane1@gmail.com </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG-20221019-WA0024%20(1)%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Vasekar
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> MA Bed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 6 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sushamavaskar@gmai.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Yoginee%20Joshi.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Joshi
                                                                Y.
                                                                N.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> MCA</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    yogineejoshi28@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Vaishnavi%20P.%20Bhakte.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Bhakte
                                                                V.
                                                                P.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> S. Y. Karate
                                                                    (Black Belt)</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    vaishnavibhakte2002@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Shubham%20Salunke.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Salunke
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> Diploma in
                                                                    Fine Commercial Art</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    shubham199608@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Anjali%20Mate.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Mate
                                                                A.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B. Sc. B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 12 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    anjalimate83@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Ashwini%20Bhosale.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Bhosale
                                                                A.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Prt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B. Sc. B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ashwinib@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="SecondaryVI-VIII">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/vccz5wan.png"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Jajure
                                                                R.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc, B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ruchikajajure@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/91d37shu.png"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Bhusare
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc , MBA
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    shwetasbhusare@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Pallavi%20Deshmukh.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Deshmukh
                                                                P.
                                                                .
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc.,
                                                                    M.A..B.Ed.</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 9 years </li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    raginipawani@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Nitin%20Rathod.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Rathod
                                                                N.
                                                                G.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A ., D. Ed.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 year&#039;s
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    nifurathod123@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Sarita%20Chavan.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Chavan
                                                                S.
                                                                P.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 13 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sarita12chavan@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG-20221107-WA0013%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Mote
                                                                S.
                                                                B.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span>
                                                                    B.A.,M.lib.I.Sc.,A.T.D.</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 3 Year&#039;s
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sarikamote80@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Priyanka%20Kulkarni.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kulkarni
                                                                P.
                                                                N.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.sc B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    kulkarni.priyanka43@gmail.com </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/WhatsApp%20Image%202024-06-23%20at%204.41.04%20PM%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Birajdar.
                                                                P.
                                                                R.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc
                                                                    (mathematics ).B.Ed</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1 Year</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    birajdarpratibha.bed21.23@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/kk.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kininge
                                                                S.
                                                                Y.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.sc
                                                                    .(chemistry), B.ed</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 3 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    swatikininge07@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG-20240627-WA0019%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Biradar
                                                                J.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Tech., B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 5 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    tbiradar6@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Sanskruti%20Hivrekar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Hivarekar
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> BCA, MBA</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    deepali.karyakarte19@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Anita%20More.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                More
                                                                A.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B. Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    anitamore147@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Suvarna%20Kale.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kale
                                                                S.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 4 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    suvarnakale12345@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Rekha%20Ghorpade.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Ghorpade
                                                                R.
                                                                J.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. Bed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 15 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rekhaghorpade1@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Suhasini%20Pawar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Pawar
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 11 years
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    suhasini2706@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Gauri%20Sakhare.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Sakhare
                                                                G.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 Years </li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    gaurispatane@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Rupali%20Kshirsagar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kshirsagar
                                                                R.
                                                                P.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A.M.Ed ,SET
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 14</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rupalialok7@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Shital%20Dalvi.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Dalvi
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 15 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sheetaldalvi31@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Punam%20Nimbalkar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Nimbalkar
                                                                P.
                                                                R.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A B.Ed.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    nimbalkar.r.punam@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Priyanka%20Kanase.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kanase
                                                                P.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span>
                                                                    B.Sc.(Maths),B.Ed.</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    priyamate23@gmail.com </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Ashwamedh%20Pawar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr.
                                                                Pawar
                                                                A.
                                                                C.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. Music
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ashwamedh.pawar@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Taimina%20Pathan.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Pathan
                                                                T.
                                                                F.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> ATD, A. M.
                                                                    (Art/ craft)</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 12 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    taiminapathan87@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Supriya%20chaudhari.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Dhage
                                                                S.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A.B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    supriyadhage2525@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Rushabh%20Gadache.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Gadache
                                                                R.
                                                                R.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span>
                                                                    B.SC.(FORENSIC SC,)B.P.Ed</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rushabh.gadache@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG_0005.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Sasane
                                                                V.
                                                                E.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A. B.ed.
                                                                    DSM</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sannidhasasane19@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG_0010.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Carunia
                                                                A.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A. B.Ed.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 36 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    caruniaanaha@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Manali%20Gorwadkar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Gorwadkar
                                                                M.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc. B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 9 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    manaligorwadkar@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Amruta%20Utikar%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Utikar
                                                                A.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> MS.C B.ED
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    amruta123@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Jyoti.png"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Belure
                                                                J.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. Sc. B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    jyotibelure@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Mrunmai.png"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Palkar
                                                                M.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Upt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A. B.ed.
                                                                    DSM</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    mrunmaip@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="SrSecondaryXI-XII">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/WhatsApp%20Image%202024-06-23%20at%204.40.55%20PM%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Mahajan
                                                                V.
                                                                J.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Pgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> Msc. BEd</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 5 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    jayshree249@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG-20230222-WA0001%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Waghode
                                                                T.
                                                                T.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Pgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 9 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    waghodetrupti24@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Mahesh%20Sir.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr.
                                                                Chadchankar
                                                                M.
                                                                ..
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Pgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc Maths B
                                                                    Ed</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    mahesh.chadchankar@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Ishwar%20Bhise.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr.
                                                                Bhise
                                                                E.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Pgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. A. B. Ed
                                                                    English</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10+ years
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    eshwarbhise@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG_20230428_100511%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Rana
                                                                D.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Pgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc. M.Phill
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 20 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    bpsncomputer@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG_3844.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Shinde
                                                                R.
                                                                R.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Pgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B.ped,
                                                                    M.ped</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rajshinde@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="SecondaryIX-X">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/WhatsApp%20Image%202024-06-23%20at%204.40.56%20PM%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Shivanikar
                                                                D.
                                                                D.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> MA.MCM.BED
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 9 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    deepshrishivanikar23@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Kavita%20Kashid.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kashid
                                                                K.
                                                                K.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B.Ed
                                                                    CTET</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10yrs</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    kavikantyadav@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Jyoti%20Sadamate.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Sadamate
                                                                J.
                                                                H.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. A, M.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    jyotisadamate831@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Renuka%20Kamble.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kamble
                                                                R.
                                                                .
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A. B Ed
                                                                    PDPET </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 9 yrs</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rewawagmare9@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Deepali%20Malpe.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Malpe
                                                                D.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A. B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7yrs</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    dipalimalpe85@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Asha%20Munjmule.webp"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Mujumale
                                                                A.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. A. M. Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 11
                                                                    year&#039;s</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ashaamujumale@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Saili%20Kulkarni.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Kulkarni
                                                                S.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc.B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sailippanse2008@gmail.com </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Vanita%20Ghadge.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Ghadge
                                                                V.
                                                                N.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A ,B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    vanitapatole340@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/hwnjlims.png"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Tagare
                                                                P.
                                                                C.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc. B.Ed.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    pratikshapuranik8028@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Pallavi%20Dhakoji.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Dhakoji
                                                                P.
                                                                N.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Htgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> MCM, B.Sc
                                                                    ,B.ED</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8.5 Years
                                                                </li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    pndhakoji@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Archana%20Udchan.webp"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Mujumale
                                                                A.
                                                                A.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. A. M. Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 11
                                                                    year&#039;s</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ashaamujumale@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Gajanan%20Lonkar.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Lonkar
                                                                G.
                                                                G.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A.B.P.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 15 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    gajananlonkar8@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/varsha%20choudhari.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms.
                                                                Choudhari
                                                                V.
                                                                K.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.C.M.</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 10 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    choudharivarsha10@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Gauri%20Ghode.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Ghode
                                                                G.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> MA. B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8yrs</li><br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    gaurijoshi1988@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Kirti%20Paradhi.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Paradhi
                                                                K.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. Sc. B.ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    kirti.pardhi84@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Reshma%20Lokhande.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Lokhande
                                                                R.
                                                                K.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A.B.Ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 8YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    lokhandereshma192@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Hemvati%20Jambhale.webp"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Jambhale
                                                                H.
                                                                C.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M. A. B. ED.
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 7 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    hemvatijambhale@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Neha%20Giri.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Giri
                                                                N.
                                                                K.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    nehagiri922@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Pradnya%20Hole.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Hole
                                                                P.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 3 Years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    holepradnya97@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG_3880.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Mr
                                                                Bhadalkar
                                                                S.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Tgt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.Sc. B.Ed
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 4 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    shankarb@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="Counsellor">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/IMG-20230704-WA0017%20(1).jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Inamdar
                                                                M.
                                                                M.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Counsellor
                                                                </li> <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A.
                                                                    Psychology</li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 15 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    manomy.medha@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="NURSE">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Sharone%20Ditchi.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Ditchi
                                                                S.
                                                                .
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Nurse </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> PDC,GNM</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 18 YEARS</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sharoneditchi@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="Pre-Primary">

                                    <!-- Teachers Start here -->
                                    <div class="teachers teachers-page">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/1.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Thorat
                                                                P.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Ppt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> Mcom , PPTTC
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 6 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    pallavi.thorat0892@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Ashwini.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Pol
                                                                A.
                                                                V.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Ppt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.A B.ed</li>
                                                                <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1 Year</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    ashwinipol57@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/rupali.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Shelake
                                                                R.
                                                                S.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Ppt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> B.A. (T.T.C)
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 1 Year</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    rupalishelake777@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- teacher item -->
                                                </div>
                                                <div class="col-lg-6 col-xs-12">
                                                    <div class="teacher-item">
                                                        <div class="teacher-image">
                                                            <img src="../storage/Menus/About/OurTeam/Sheetal.jpg"
                                                                onerror="this.src='../storage/Menus/About/OurTeam/teacher_01.jpg'"
                                                                alt="teacher image" class="img-responsive">
                                                        </div>
                                                        <div class="teacher-content">

                                                            <h4>
                                                                Ms
                                                                Mali
                                                                S.
                                                                D.
                                                            </h4>

                                                            <ul>
                                                                <li><span><i class="fa fa-home"
                                                                            aria-hidden="true"></i></span> Ppt </li>
                                                                <br>

                                                                <li><span><i class="fa fa-graduation-cap"
                                                                            aria-hidden="true"></i></span> M.Sc. TTC
                                                                </li> <br>

                                                                <li><span><i class="fa fa-briefcase"
                                                                            aria-hidden="true"></i></span> 2 years</li>
                                                                <br>

                                                                <li><span><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i></span>
                                                                    sheetal24arya@gmail.com</li>
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
