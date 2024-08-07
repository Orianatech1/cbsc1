<!-- Footer Start here -->
<footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="title">
                <center>
                  <a href="{{ url('/') }}"><img style="max-width: 40%" src="{{ url('storage/footerlogo.png') }}" alt="logo"
                      class="img-responsive"></a>
                  <h6 style="font-size: 15px; font-weight: 700;">
                    <font color="red">Pune Cambridge Public School</font>
                  </h6>
                </center>
              </div>
              <div class="footer-about">
                <ul>

                  <li><span><i class="fa fa-home" aria-hidden="true"></i></span>
                    PCPS, Jijamata chowk, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Behind Ambegaon Pathar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Police Chowki,
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ambegaon Pathar- Pune &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 411046
                    </li>
                  <li><span><i class="fa fa-phone" aria-hidden="true"></i></span>020 - 24363600/34363300 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9011032856</li>

                  <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>pcpscbseambegaon@gmail.com</li>
                  <li><span><i class="fa fa-globe" aria-hidden="true"></i></span>www.punecambridge.org </li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">Quick Links</h4>
              <ul class="twitter-post">
                <li><a href="{{ url('/') }}">Home </a></li>
                <li><a href="{{ url('/about') }}">About </a></li>
                <li><a href="{{ url('/manpubdisclosure') }}">Mandatory Public Disclosure </a></li>
                <li><a href="{{ url('/contact') }}">Contact Us </a></li>

              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">CBSC Links</h4>
              <ul class="twitter-post">
                <li><a href="http://cbse.nic.in/" target="_blank">CBSE</a></li>
                <li><a href="http://cbseaff.nic.in/cbse_aff/welcome.aspx" target="_blank">School Affiliation</a></li>
                <li><a href="#" target="_blank">Careers</a></li>

              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <h4 class="title">Recent Photos</h4>
              <ul class="photos">
                <li>

                  <img src="{{ url('img/activity/1 (14).jpg') }}"
                    style="height: 65px !important;width: 90px !important;" alt="gallery image" class="img-responsive">

                </li>
                <li>

                  <img src="{{ url('img/activity/1 (14).jpg') }}"
                    style="height: 65px !important;width: 90px !important;" alt="gallery image" class="img-responsive">

                </li>
                <li>

                  <img src="{{ url('img/activity/1 (14).jpg') }}"
                    style="height: 65px !important;width: 90px !important;" alt="gallery image" class="img-responsive">

                </li>


              </ul>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer top -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xs-12">


            <p style="text-align: center"> Copyright © 2024 Designed & Developed By OrianaTech,
             | <a href="#" target="_blank"> Pune Cambridge Group Of Institute, Pune</a></p>
          </div>

        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer bottom -->
  </footer>
  <!-- Footer End here -->
  <a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>


  <script>
    document.onreadystatechange = function () {
      if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader-wrapper").style.visibility = "visible";
      } else {
        document.querySelector("#loader-wrapper").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
      }
    };
  </script>


  <!-- jquery -->
  <script src="kidsacade/assets/js/jquery-1.12.4.min.js"></script>

  <!-- Bootstrap -->
  <script src="kidsacade/assets/js/bootstrap.min.js"></script>

  <!-- Isotope -->
  <script src="kidsacade/assets/js/isotope.min.js"></script>

  <!-- lightcase -->
  <script src="kidsacade/assets/js/lightcase.js"></script>

  <!-- counterup -->
  <script src="../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="kidsacade/assets/js/jquery.counterup.min.js"></script>

  <!-- Swiper -->
  <script src="kidsacade/assets/js/swiper.jquery.min.js"></script>

  <!--progress-->
  <script src="kidsacade/assets/js/circle-progress.min.js"></script>

  <!--velocity-->
  <script src="kidsacade/assets/js/velocity.min.js"></script>

  <!--quick-view-->
  <script src="kidsacade/assets/js/quick-view.js"></script>

  <!--nstSlider-->
  <script src="kidsacade/assets/js/jquery.nstSlider.js"></script>

  <!--flexslider-->
  <script src="kidsacade/assets/js/flexslider-min.js"></script>

  <!--easing-->
  <script src="kidsacade/assets/js/jquery.easing.min.js"></script>

  <!-- custom -->
  <script src="kidsacade/assets/js/custom.js"></script>

</body>



</html>
