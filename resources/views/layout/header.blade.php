<script>
  document.getElementById("mySliderSection").style.minHeight = "800px";
</script>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PCPS-Home</title>

    <link href="#" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="kidsacade/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-awesome -->
    <link href="kidsacade/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Flaticon -->
    <link href="kidsacade/assets/flaticon/flaticon.css" rel="stylesheet">
    {{-- favicon --}}

    <link rel="icon" type="image/png" href="storage/Logo.png">

    <!-- lightcase -->
    <link href="kidsacade/assets/css/lightcase.css" rel="stylesheet">

    <!-- Swiper -->
    <link href="kidsacade/assets/css/swiper.min.css" rel="stylesheet">

    <!-- quick-view -->
    <link href="kidsacade/assets/css/quick-view.css" rel="stylesheet">

    <!-- nstSlider -->
    <link href="kidsacade/assets/css/jquery.nstSlider.css" rel="stylesheet">

    <!-- flexslider -->
    <link href="kidsacade/assets/css/flexslider.css" rel="stylesheet">

    <!--  rtl  -->
    <link href="kidsacade/assets/css/rtl.css" rel="stylesheet">

    <!-- Style -->
    <link href="kidsacade/assets/css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsive -->
    <link href="kidsacade/assets/css/responsive.css" rel="stylesheet">

</head>

<body id="scroll-top">

    <!-- Preloader start here -->
    <div id="loader-wrapper">
        <div id="loader"></div>
      </div>
      <style>
        #loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 99;
  background: #fff; /* Optional: Background color */
}

#loader {
  display: block;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 150px; /* Adjust size as needed */
  height: 150px; /* Adjust size as needed */
  margin: -75px 0 0 -75px; /* Center the loader */
  background: url('img/activity/1496.gif') no-repeat center center; /* Replace with your GIF path */
  background-size: contain;
}

      </style>
    <!-- mobile menu start here -->
    <div class="mobile-menu-area">
        <div class="logo-area">
            <a style="max-width:175px" class="logo" href="{{ url('/') }}"><img src="{{ url('img/mobilelogo.png') }}"
                    alt="logo" class="img-responsive"></a>
            <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="mobile-menu">
            <ul class="m-menu">
                <li class="dropdown-submenu">
                    <a href="#">Home</a>

                </li>
                <li class="dropdown-submenu">
                    <a href="{{ url('/') }}">About</a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('/aboutourorg') }}">Our Organization </a></li>

                                        <li><a href="{{ url('/aboutourteam') }}">President&#039;s Message </a></li>
                                        <li><a href="{{ url('/vissionmission') }}">Vision and Mission </a></li>
                                        <li><a href="{{ url('/pmessage') }}">Principal&#039;s Message </a></li>
                                        <li><a href="{{ url('/affiliation') }}">Collaboration </a></li>
                                        <li><a href="{{ url('/stafflist') }}">Staff List </a></li>
                                        <li><a href="{{ url('/managingcommittee') }}">Managing Committee </a></li>

                                        <li><a href="{{ url('/manpubdisclosure') }}">MANDATORY PUBLIC DISCLOSURE </a></li>


                    </ul>
                </li>

                <li class="dropdown-submenu">
                    <a href="#">Admission</a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('/admission-enquiry') }}">Admission Enquiry </a></li>
                        <li><a href="{{ url('/admission-procedure-age-criteria') }}">Admission Procedure &amp; Age Criteria </a></li>
                        <li><a href="{{ url('/document-checklist') }}">Document Checklist </a></li>

                        <li><a href="{{ url('/') }}">Prospectus </a></li>

                        <li><a href="{{ url('/fee-details') }}">Fee Details </a></li>
                    </ul>
                </li>

                <li class="dropdown-submenu">
                    <a href="#">Academics</a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('/curriculam-details') }}">Curriculum Details </a></li>
                        <li><a href="{{ url('/') }}">Learning Resources </a></li>
                        <li><a href="{{ url('/') }}">School Best Practices </a></li>

                        <li><a href="{{ url('/academic-calender') }}">Academic Calendar </a></li>


                        <li><a href="{{ url('/school-best-practice') }}">Book List </a></li>

                        <li><a href="{{ url('/holiday-list') }}">Holiday List </a></li>
                        <li><a href="{{ url('/holiday-list') }}">Achievements </a></li>

                </li>

            </ul>
            </li>

            <li class="dropdown-submenu">
                <a href="{{ url('/facilities') }}">Facilities</a>
                <ul class="mobile-submenu">
                    <li><a href="{{ url('/laboratories') }}">Laboratories</a></li>
                    <li><a href="{{ url('/schoolfacilities') }}">School Facilities</a></li>
                    <li><a href="{{ url('/assessment') }}">Assessment</a></li>

                </ul>
            </li>

            <li class="dropdown-submenu">
                <a href="#">Gallery</a>
                <ul class="mobile-submenu">
                    <li><a href="{{ url('/gallery') }}">Gallery </a></li>

                </ul>
            </li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>

            </ul>
        </div>
    </div>
    <!-- mobile menu ending here -->


    <header class="header-two">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a class="logo" href="{{ url('/') }}"><img style="float: left;" src="{{ url('storage/Logo.png') }}"
                                alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="col-md-5">
                        <center style="margin-left: -145px;">
                            <h3 class="school_name"> Pune Cambridge Public School</h3>
                            <span class="school_addr">PCPS,
                                 Sr. No 28. Jijamata chowk,
                                 Behind Ambegaon Pathar Police Chowki,
                                 Ambegaon Pathar, Pune- 411046</span> <br>
                            <span class="school_grade"> <b> UDISE - 27251600131 </b></span>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <ul class="top-contents"><br><br>
                            <li>
                                <i class="icon flaticon-phone-call"></i>
                                <div class="content">
                                    <p style='font-size:15px'>Call Us </p>
                                    <span style='font-size:15px'>020 - 24363600/34363300 </span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- header top -->


        <div class="main-menu">
            <div class="container-fluide">
                <div class="row no-gutters">
                    <nav class="main-menu-area w-100">
                        <div class="logo-area d-md-none">
                            <a style="max-width:195px;padding:10px;" class="logo" href="{{ url('/') }}"><img
                                    src="storage/Logo.png" alt="logo"
                                    class="img-responsive"></a>

                            <button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="menu-area w-100">


                            <ul class="menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/') }}">PCPS </a></li>
                                    </ul>

                                </li>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="{{ url('/aboutourorg') }}">Our Organization </a></li>

                                        <li><a href="{{ url('/aboutourteam') }}">President&#039;s Message </a></li>
                                        <li><a href="{{ url('/vissionmission') }}">Vision and Mission </a></li>
                                        <li><a href="{{ url('/pmessage') }}">Principal&#039;s Message </a></li>
                                        <li><a href="{{ url('/affiliation') }}">Collaboration </a></li>
                                        <li><a href="{{ url('/stafflist') }}">Staff List </a></li>
                                        <li><a href="{{ url('/managingcommittee') }}">Managing Committee </a></li>





                                        <li><a href="{{ url('/manpubdisclosure') }}">MANDATORY PUBLIC DISCLOSURE </a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ url('/manpubdisclosure') }}">Mandatory Public Disclosure</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Admissions <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/admission-enquiry') }}">Admission Enquiry </a></li>
                                        <li><a href="{{ url('/admission-procedure-age-criteria') }}">Admission Procedure &amp; Age Criteria </a></li>
                                        <li><a href="{{ url('/document-checklist') }}">Document Checklist </a></li>

                                        <li><a href="{{ url('/') }}">Prospectus </a></li>

                                        <li><a href="{{ url('/fee-details') }}">Fee Details </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Academics <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/curriculam-details') }}">Curriculum Details </a></li>
                                        <li><a href="{{ url('/learning') }}">Learning Resources </a></li>
                                        <li><a href="{{ url('/school-best-practice') }}">School Best Practices </a></li>

                                        <li><a href="{{ url('/academic-calender') }}">Academic Calendar </a></li>


                                        <li><a href="{{ url('/booklist') }}">Book List </a></li>

                                        <li><a href="{{ url('/holiday-list') }}">Holiday List </a></li>
                                        <li><a href="{{ url('/academic-achievements') }}">Achievements </a></li>



                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Facilities <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/laboratories') }}">Laboratories</a></li>
                                        <li><a href="{{ url('/schoolfacilities') }}">School Facilities</a></li>
                                        <li><a href="{{ url('/assessment') }}">Assessment</a></li>

                                </li>
                            </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/gallery') }}">Gallery </a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>










