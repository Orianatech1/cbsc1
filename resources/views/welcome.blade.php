@extends('layout.main')

@section('main-content')


{{-- <div id="myModal" class="modal fade" role="dialog">
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

            <input type="text" placeholder="Full Name Of Student *" class="contact-input" name="name" id="name"
              data-error="Name field is required" required>
            <br>
            <input type="text" placeholder="Full Name Of Parent *" class="contact-input" name="parent_name"
              id="parent_name" data-error="Parent Name field is required" required>


            <br>

            <input type="email" placeholder="Email ID Of Parent *" class="contact-input" name="email" id="email"
              data-error="Email field is required" required>
            <input type="text" placeholder="Phone Of Parent*" class="contact-input" name="phone" id="phone"
              data-error="Phone field is required" required>
            <select id="city" class='contact-input' name="city">
              <option selected="selected">-Select City-</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#000000"><i>-Top Metropolitan Cities-</i></font>
              </option>
              <option>Ahmedabad</option>
              <option>Bengaluru/Bangalore</option>
              <option>Chandigarh</option>
              <option>Chennai</option>
              <option>Delhi</option>
              <option>Gurgaon</option>
              <option>Hyderabad/Secunderabad</option>
              <option>Kolkatta</option>
              <option>Mumbai</option>
              <option>Noida</option>
              <option>Pune</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Andhra Pradesh-</i></font>
              </option>
              <option>Anantapur</option>
              <option>Guntakal</option>
              <option>Guntur</option>
              <option>Hyderabad/Secunderabad</option>
              <option>kakinada</option>
              <option>kurnool</option>
              <option>Nellore</option>
              <option>Nizamabad</option>
              <option>Rajahmundry</option>
              <option>Tirupati</option>
              <option>Vijayawada</option>
              <option>Visakhapatnam</option>
              <option>Warangal</option>
              <option>Andra Pradesh-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font>
              </option>
              <option>Itanagar</option>
              <option>Arunachal Pradesh-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Assam-</i></font>
              </option>
              <option>Guwahati</option>
              <option>Silchar</option>
              <option>Assam-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Bihar-</i></font>
              </option>
              <option>Bhagalpur</option>
              <option>Patna</option>
              <option>Bihar-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Chhattisgarh-</i></font>
              </option>
              <option>Bhillai</option>
              <option>Bilaspur</option>
              <option>Raipur</option>
              <option>Chhattisgarh-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Goa-</i></font>
              </option>
              <option>Panjim/Panaji</option>
              <option>Vasco Da Gama</option>
              <option>Goa-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Gujarat-</i></font>
              </option>
              <option>Ahmedabad</option>
              <option>Anand</option>
              <option>Ankleshwar</option>
              <option>Bharuch</option>
              <option>Bhavnagar</option>
              <option>Bhuj</option>
              <option>Gandhinagar</option>
              <option>Gir</option>
              <option>Jamnagar</option>
              <option>Kandla</option>
              <option>Porbandar</option>
              <option>Rajkot</option>
              <option>Surat</option>
              <option>Vadodara/Baroda</option>
              <option>Valsad</option>
              <option>Vapi</option>
              <option>Gujarat-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Haryana-</i></font>
              </option>
              <option>Ambala</option>
              <option>Chandigarh</option>
              <option>Faridabad</option>
              <option>Gurgaon</option>
              <option>Hisar</option>
              <option>Karnal</option>
              <option>Kurukshetra</option>
              <option>Panipat</option>
              <option>Rohtak</option>
              <option>Haryana-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Himachal Pradesh-</i></font>
              </option>
              <option>Dalhousie</option>
              <option>Dharmasala</option>
              <option>Kulu/Manali</option>
              <option>Shimla</option>
              <option>Himachal Pradesh-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font>
              </option>
              <option>Jammu</option>
              <option>Srinagar</option>
              <option>Jammu and Kashmir-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Jharkhand-</i></font>
              </option>
              <option>Bokaro</option>
              <option>Dhanbad</option>
              <option>Jamshedpur</option>
              <option>Ranchi</option>
              <option>Jharkhand-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Karnataka-</i></font>
              </option>
              <option>Bengaluru/Bangalore</option>
              <option>Belgaum</option>
              <option>Bellary</option>
              <option>Bidar</option>
              <option>Dharwad</option>
              <option>Gulbarga</option>
              <option>Hubli</option>
              <option>Kolar</option>
              <option>Mangalore</option>
              <option>Mysoru/Mysore</option>
              <option>Karnataka-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Kerala-</i></font>
              </option>
              <option>Calicut</option>
              <option>Cochin</option>
              <option>Ernakulam</option>
              <option>Kannur</option>
              <option>Kochi</option>
              <option>Kollam</option>
              <option>Kottayam</option>
              <option>Kozhikode</option>
              <option>Palakkad</option>
              <option>Palghat</option>
              <option>Thrissur</option>
              <option>Trivandrum</option>
              <option>Kerela-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Madhya Pradesh-</i></font>
              </option>
              <option>Bhopal</option>
              <option>Gwalior</option>
              <option>Indore</option>
              <option>Jabalpur</option>
              <option>Ujjain</option>
              <option>Madhya Pradesh-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Maharashtra-</i></font>
              </option>
              <option>Ahmednagar</option>
              <option>Aurangabad</option>
              <option>Jalgaon</option>
              <option>Kolhapur</option>
              <option>Mumbai</option>
              <option>Mumbai Suburbs</option>
              <option>Nagpur</option>
              <option>Nasik</option>
              <option>Navi Mumbai</option>
              <option>Pune</option>
              <option>Solapur</option>
              <option>Maharashtra-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Manipur-</i></font>
              </option>
              <option>Imphal</option>
              <option>Manipur-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Meghalaya-</i></font>
              </option>
              <option>Shillong</option>
              <option>Meghalaya-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Mizoram-</i></font>
              </option>
              <option>Aizawal</option>
              <option>Mizoram-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Nagaland-</i></font>
              </option>
              <option>Dimapur</option>
              <option>Nagaland-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Orissa-</i></font>
              </option>
              <option>Bhubaneshwar</option>
              <option>Cuttak</option>
              <option>Paradeep</option>
              <option>Puri</option>
              <option>Rourkela</option>
              <option>Orissa-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Punjab-</i></font>
              </option>
              <option>Amritsar</option>
              <option>Bathinda</option>
              <option>Chandigarh</option>
              <option>Jalandhar</option>
              <option>Ludhiana</option>
              <option>Mohali</option>
              <option>Pathankot</option>
              <option>Patiala</option>
              <option>Punjab-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Rajasthan-</i></font>
              </option>
              <option>Ajmer</option>
              <option>Jaipur</option>
              <option>Jaisalmer</option>
              <option>Jodhpur</option>
              <option>Kota</option>
              <option>Udaipur</option>
              <option>Rajasthan-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Sikkim-</i></font>
              </option>
              <option>Gangtok</option>
              <option>Sikkim-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Tamil Nadu-</i></font>
              </option>
              <option>Chennai</option>
              <option>Coimbatore</option>
              <option>Cuddalore</option>
              <option>Erode</option>
              <option>Hosur</option>
              <option>Madurai</option>
              <option>Nagerkoil</option>
              <option>Ooty</option>
              <option>Salem</option>
              <option>Thanjavur</option>
              <option>Tirunalveli</option>
              <option>Trichy</option>
              <option>Tuticorin</option>
              <option>Vellore</option>
              <option>Tamil Nadu-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Tripura-</i></font>
              </option>
              <option>Agartala</option>
              <option>Tripura-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Union Territories-</i></font>
              </option>
              <option>Chandigarh</option>
              <option>Dadra & Nagar Haveli-Silvassa</option>
              <option>Daman & Diu</option>
              <option>Delhi</option>
              <option>Pondichery</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Uttar Pradesh-</i></font>
              </option>
              <option>Agra</option>
              <option>Aligarh</option>
              <option>Allahabad</option>
              <option>Bareilly</option>
              <option>Faizabad</option>
              <option>Ghaziabad</option>
              <option>Gorakhpur</option>
              <option>Kanpur</option>
              <option>Lucknow</option>
              <option>Mathura</option>
              <option>Meerut</option>
              <option>Moradabad</option>
              <option>Noida</option>
              <option>Varanasi/Banaras</option>
              <option>Uttar Pradesh-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Uttaranchal-</i></font>
              </option>
              <option>Dehradun</option>
              <option>Roorkee</option>
              <option>Uttaranchal-Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-West Bengal-</i></font>
              </option>
              <option>Asansol</option>
              <option>Durgapur</option>
              <option>Haldia</option>
              <option>Kharagpur</option>
              <option>Kolkatta</option>
              <option>Siliguri</option>
              <option>West Bengal - Other</option>
              <option disabled="disabled" style="background-color:#3E3E3E">
                <font color="#FFFFFF"><i>-Other-</i></font>
              </option>
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
            <input type="text" placeholder="Marks Obtained In Pervious Standard *" class="contact-input" name="marks"
              id="marks">


            <script src='../www.google.com/recaptcha/api.js'></script>
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

            <div class="g-recaptcha" data-sitekey="6LclwsYZAAAAAAgRQcityBCrIMXsmnmB7Mk4ufOo"
              data-callback="verifyCaptcha"></div>
            <div id="g-recaptcha-error"></div>


            <input type="hidden" name="_token" value="Jb86t8cyJF3tYuSyZKqNnU3OXe6RjEJs0ijldeWJ">


            <input type="submit" class="contact-button" value="Submit">

          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div> --}}

  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="../unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
  {{-- <script>
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



  <!-- Banner Start here -->
  <section class="banner banner-two" id="mySliderSection">
    <div class="banner-slider swiper-container" style="width:100% !important; height: 600px !important;">
      <div class="swiper-wrapper">


        <style>
            .slider-container {
                position: relative;
                max-width: 100%;
                margin: auto;
                overflow: hidden;
            }

            .slides {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .slide {
                min-width: 100%;
                box-sizing: border-box;
            }

            .prev, .next {
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                cursor: pointer;
                background-color: rgba(0, 0, 0, 0.5);
                border: none;
                transform: translateY(-50%);
            }

            .prev {
                left: 0;
            }

            .next {
                right: 0;
            }
        </style>


    <div class="slider-container">
        <div class="slides" id="slides">
            <div class="slide">
                <img src="{{ url('img/old/1 (1).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('storage/banner2.jpg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('storage/banner3.jpg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/old/1 (3).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/old/1 (5).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/old/1 (6).jpeg') }}" style="width:100%">
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.getElementsByClassName("slide");
            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }

            const offset = -currentSlide * 100;
            document.getElementById("slides").style.transform = `translateX(${offset}%)`;
        }

        function changeSlide(step) {
            showSlide(currentSlide + step);
        }

        showSlide(currentSlide);
    </script>

    </div>
    </div>
  </section>
  <!-- Banner End here -->


  <!-- facility Start here -->
  <section class="facility facility-two">
    <div class="container">
      <div class="facility-items">
        <!-- facility item -->
        <div class="facility-item">
            <div class="front-part">
              <span class="icon-two flaticon-line-chart"></span>
              <h4><a href="facility_details/4.html">
                  <font color="white">School USP</font>
                </a></h4>
            </div>
            <div class="back-part">
              <span class="icon-two flaticon-line-chart"></span>
              <h4><a href="facility_details/4.html">
                  <font color="white">School USP</font>
                </a></h4>
              <p>Affordable fees for students with provision for parents to pay fee in installments.</p>
            </div>
          </div>
          <!-- facility item -->
          <div class="facility-item">
            <div class="front-part">
              <span class="icon-two flaticon-avatar"></span>
              <h4><a href="facility_details/2.html">
                  <font color="white">Assessment</font>
                </a></h4>
            </div>
            <div class="back-part">
              <span class="icon-two flaticon-avatar"></span>
              <h4><a href="facility_details/2.html">
                  <font color="white">Assessment</font>
                </a></h4>
              <p>Assessments are a continuous process, conducted on weekly, monthly termwise.</p>
            </div>
          </div>
        <div class="facility-item">
          <div class="front-part">
            <span class="icon-two flaticon-symbols"></span>
            <h4><a href="facility_details/6.html">
                <font color="white">Pedagogy</font>
              </a></h4>
          </div>
          <div class="back-part">
            <span class="icon-two flaticon-symbols"></span>
            <h4><a href="facility_details/6.html">
                <font color="white">Pedagogy</font>
              </a></h4>
            <p>The pedagogical practices at pcs are learner centric.</p>
          </div>
        </div>


        <!-- facility item -->
        <div class="facility-item">
          <div class="front-part">
            <span class="icon-two flaticon-pen"></span>
            <h4><a href="facility_details/3.html">
                <font color="white">Final Evaluation</font>
              </a></h4>
          </div>
          <div class="back-part">
            <span class="icon-two flaticon-pen"></span>
            <h4><a href="facility_details/3.html">
                <font color="white">Final Evaluation</font>
              </a></h4>
            <p>Evaluation includes written exam, notebook submission, and subject enrichment activities.</p>
          </div>
        </div>


        <!-- facility item -->

      </div><!-- facility items -->
    </div><!-- container -->
  </section><!-- facility -->
  <!-- facility End here -->


  <!-- Event Start here -->
  {{-- <section class="event event-two padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Don't Miss Our Event</h3>
      </div>

      <div class="event-items">
        <div class="row">

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">


              <div style="width:100%;" class="event-content">
                <h4>Diwali Celebration 22</h4>
                <ul>
                  <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span> 21-Oct-22</li>

                </ul>
                <p>
                <p>Diwali Celebration in Blossom...</p>

                <a href="school_event_display/7.html" class="button-default">View Details</a>
              </div>

            </div>
          </div>


          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">


              <div style="width:100%;" class="event-content">
                <h4>BPSN Annual Day 2023-24 Teaser</h4>
                <ul>
                  <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span> 21-Jan-24</li>

                </ul>
                <p>
                <p>BPSN Annual Day 2023-24 Tease...</p>

                <a href="school_event_display/11.html" class="button-default">View Details</a>
              </div>

            </div>
          </div>


          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="event-item">


              <div style="width:100%;" class="event-content">
                <h4>Annual Day Invitation 2023-24</h4>
                <ul>
                  <li><span><i class="fa fa-calendar" aria-hidden="true"></i></span> 21-Jan-24</li>

                </ul>
                <p>
                <p>Annual Day Invitation 2023-24...</p>

                <a href="school_event_display/12.html" class="button-default">View Details</a>
              </div>

            </div>
          </div>

        </div>

        <center><a href="school_event_display/create.html" class="button-default">View All Events</a></center>
      </div>

    </div><!-- container -->
  </section> --}}
  <!-- event blog -->
  <!-- event End here -->

  <!-- facility Start here -->
  <!-- facility End here -->

  <!-- Features Start here -->
  <section class="features padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Why Choose Pune Cambridge?</h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="features-left">
            <div class="feature-item">
              <div class="icon flaticon-people-1"></div>
              <div class="content">
                <h4>Sports Facilities</h4>
                <p>Sports and games curriculum is an integral and compulsory part of the education process. </p>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon flaticon-symbols"></div>
              <div class="content">
                <h4>ICT Facilities</h4>
                <p>Information and Communication Technology to enhance, optimise the delivery of information. </p>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon flaticon-microphone"></div>
              <div class="content">
                <h4>Music And Art Club</h4>
                <p>Clubs are an essential element of life as they offer our pupils to engage in exciting new challenges.
                </p>
              </div>
            </div>
          </div><!-- feature left -->
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="feature-image">
            <img src="{{ url('img/old/1 (6).jpeg') }}" alt="feature image"
              class="img-responsive" style="height: 360px; width:360px;">
          </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="features-right">
            <div class="feature-item">
              <div class="icon flaticon-home"></div>
              <div class="content">
                <h4>Transport</h4>
                <p>The school provides transportation facilities to students. Buses are operated in all routes. </p>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon flaticon-line-chart"></div>
              <div class="content">
                <h4>Modern Library</h4>
                <p>School Library has an indispensable role in a school setting. It is where independent learning is
                  facilitated. </p>
              </div>
            </div>
            <div class="feature-item">
              <div class="icon flaticon-signs"></div>
              <div class="content">
                <h4>Equipped Laboratories</h4>
                <p>Laboratory provides the first-hand experience to develop skills necessary for study and research.
                </p>
              </div>
            </div>
          </div><!-- feature left -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- features -->
  <!-- Features End here -->

  <!-- Gallery Start here -->
  <section class="gallery gallery-two">
    <div class="overlay padding-120">
      <div class="section-header bg">
        <h3>Our School Gallery</h3>
      </div>
      <div class="gallery-two-items">

        <div class="gallery-item">
          <div class="gallery-image">
              <img src="{{ url('img/old/1 (6).jpeg') }}"
              alt="" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{ url('img/old/1 (7).jpeg') }}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4></h4>
            </div>
          </div>
        </div>
        <div class="gallery-item">
          <div class="gallery-image">
            <img src="storage/banner1.jpg"
              alt="" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{ url('img/old/1 (8).jpeg') }}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4></h4>
            </div>
          </div>
        </div>
        <div class="gallery-item">
          <div class="gallery-image">
            <img src="storage/banner1.jpg"
              alt="" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{ url('img/activity/1 (9).jpeg') }}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4></h4>
            </div>
          </div>
        </div>
        <div class="gallery-item">
          <div class="gallery-image">
            <img src="{{ url('img/activity/1 (3).jpeg') }}"
              alt="" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="{{ url('img/activity/1 (7).jpeg') }}" data-rel="lightcase:myCollection"><i
                  class="icon flaticon-expand"></i></a>
              <h4></h4>
            </div>
          </div>
        </div>

      </div><!-- gallery items -->

      <div class="gallery-button"><a href="#" class="button-default">View More
          Gallery</a></div>

    </div><!-- overlay -->
  </section><!-- gallery -->
  <!-- Gallery End here -->

  <!-- Achievements Start here -->
  <section class="achievements">
    <div class="overlay padding-120">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-student"></i>
              <span class="counter">450</span><span>+</span>
              <p>Total Students</p>
            </div><!-- achievement item -->
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-construction"></i>
              <span class="counter">25</span><span>+</span>
              <p>Class Rooms</p>
            </div><!-- achievement item -->
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-school-bus"></i>
              <span class="counter">12</span><span>+</span>
              <p>School Bus</p>
            </div><!-- achievement item -->
          </div>
          <div class="col-md-3 col-sm-3 col-12">
            <div class="achievement-item">
              <i class="icon flaticon-people"></i>
              <span class="counter">50</span><span>+</span>
              <p>Total Teachers</p>
            </div><!-- achievement item -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- achievements -->
  <!-- Achievements End here -->


  @endsection
