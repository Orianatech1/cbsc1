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

    <title>Pune&#39; Cambridge</title>

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
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preloader end here -->

    <!-- mobile menu start here -->
    <div class="mobile-menu-area">
        <div class="logo-area">
            <a style="max-width:175px" class="logo" href="{{ url('/') }}"><img src="{{ url('storage/Logo.png') }}"
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
                    <a href="{{ url('/') }}">Home</a>

                </li>
                <li class="dropdown-submenu">
                    <a href="{{ url('/') }}">About</a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('/aboutourorg') }}">Our Organization </a></li>

                                        <li><a href="{{ url('/aboutourteam') }}">Founder&#039;s Secretay Message </a></li>
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
                        <ul class="top-contents">
                            <li>
                                <i class="icon flaticon-phone-call"></i>
                                <div class="content">
                                    <p style='font-size:15px'>Call Us </p>
                                    <span style='font-size:15px'>020 - 24363600/34363300 </span>
                                </div>
                            </li>
                            <li>
                                <i class="icon flaticon-alarm-clock"></i>
                                <div class="content" style=' margin-right: 15px;'>
                                    <p style='font-size:15px'>School Timing</p>
                                    <span style='font-size:15px'> 7:50AM - 2:30PM</span>
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
                                    <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/about') }}">PCPS </a></li>
                                    </ul>

                                </li>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="{{ url('/aboutourorg') }}">Our Organization </a></li>

                                        <li><a href="{{ url('/aboutourteam') }}">Founder&#039;s Secretay Message </a></li>
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




    {{-- <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function () {
      $('#myModal').modal('show');
    });
    </script>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="modal-header">
                        <center>
                            <h4 class="modal-title">Admission Notification</h4>
                        </center>
                    </div>

                    <form class="contact-form" id="submit_admission" method="post" enctype="multipart/form-data"
                        onsubmit="return submitUserForm();">

                        <input type="text" placeholder="Full Name Of Student *" class="contact-input" name="name"
                            id="name" data-error="Name field is required" required>
                        <br>
                        <input type="text" placeholder="Full Name Of Parent *" class="contact-input" name="parent_name"
                            id="parent_name" data-error="Parent Name field is required" required>


                        <br>

                        <input type="email" placeholder="Email ID Of Parent *" class="contact-input" name="email"
                            id="email" data-error="Email field is required" required>
                        <input type="text" placeholder="Phone Of Parent*" class="contact-input" name="phone" id="phone"
                            data-error="Phone field is required" required>
                        <select id="city" class='contact-input' name="city">
                            <option selected="selected">-Select City-</option>
                            <option disabled="disabled" style="background-color:#3E3E3E">
                                <font color="#000000"><i>-Top Cities-</i></font>
                            </option>

                            <option>Mumbai</option>

                            <option>Pune</option>

                            <option>Other</option>
                        </select>
                        <select id="standard" class='contact-input' name="standard">
                            <option selected="selected">-Select Standard For Which Admission Is Required-</option>
                            <option>Nursery</option>
                            <option>Jr.KG</option>
                            <option>Sr.KG</option>
                            <option>Class 1</option>
                            <option>Class 2</option>
                            <option>Class 3</option>
                            <option>Class 4</option>
                            <option>Class 5</option>
                            <option>Class 6</option>
                            <option>Class 7</option>
                            <option>Class 8</option>
                            <option>Class 9</option>
                            <option>Class 10</option>
                        </select>
                        <input type="text" placeholder="Marks Obtained In Pervious Standard *" class="contact-input"
                            name="marks" id="marks">


                        <script src='css/api.js'></script>
                        <script>
                            function submitUserForm() {
                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                  document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
                  return false;
                }
                return true;
              }

              function verifyCaptcha() {
                document.getElementById('g-recaptcha-error').innerHTML = '';
              }
                        </script>

                        <div class="g-recaptcha" data-sitekey=""
                            data-callback="verifyCaptcha"></div>
                        <div id="g-recaptcha-error"></div>


                        <input type="hidden" name="_token" value="">


                        <input type="submit" class="contact-button" value="Submit">

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script src="css/jquery.min.js"></script>
    <script src="css/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
      $('#submit_admission').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
          url: "/Admission/submit_admission_enquiry",
          method: "POST",
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
            swal("Successfully Inserted !!!", "We Will Contact You Soon.", "success");
            $('#submit_admission input[type="text"]').val('');
            $('#submit_admission input[type="email"]').val('');
            location.reload();
          }
        })
      });
    });
    </script> --}}
