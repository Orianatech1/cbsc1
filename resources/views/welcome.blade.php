@extends('layout.main')

@section('main-content')


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
                <img src="{{ url('img/old/1 (10).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/activity/1 (4).jpg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/old/1 (14).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/old/1 (15).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/old/1 (13).jpeg') }}" style="width:100%">
            </div>
            <div class="slide">
                <img src="{{ url('img/activity/1 (1).jpg') }}" style="width:100%">
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

        // Auto-slide functionality
        setInterval(() => {
            changeSlide(1); // Change to the next slide
        }, 3000); // Change the interval as needed (3000 ms = 3 seconds)

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
            <img src="storage/banner1.jpg" alt="feature image"
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
              <img src="{{ url('storage/banner1.jpg') }}"
              alt="" class="img-responsive">
            <div class="gallery-overlay">
              <div class="bg"></div>
            </div>
            <div class="gallery-content">
              <a href="storage/banner1.jpg" data-rel="lightcase:myCollection"><i
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
              <a href="storage/banner1.jpg" data-rel="lightcase:myCollection"><i
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
              <a href="storage/banner1.jpg" data-rel="lightcase:myCollection"><i
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
              <a href="storage/banner1.jpg" data-rel="lightcase:myCollection"><i
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
