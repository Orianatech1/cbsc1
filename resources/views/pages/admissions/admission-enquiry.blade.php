
 @extends('layout.main')

@section('main-content')


<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
        <h3>Admission Enquiry</h3>
        <ul>
            <li><a href="{{ url('/') }}">Home /</a></li>
            <li>Admission / Admission Enquiry</li>
        </ul>
        </div><!-- container -->
    </div><!-- overlay -->
    </section><!-- page header -->
    <!-- Page Header End here -->


     <!-- Blog Post Start here -->
     <section class="blog-post padding-120">
        <div class="container">
          <div class="row">
            <div class="col-md-9 post-item-pagination">


                                    <div class="post-items">
                        <div class="post-item">
                                <div class="post-content">
                                          <h3><a href="#">Submit Admission Enquiry</a></h3>
     <form class="contact-form" id="submit_admission" method="post" enctype="multipart/form-data" onsubmit="return submitUserForm();" >

                        <input type="text" placeholder="Full Name Of Student *" class="contact-input" name="name" id="name" data-error="Name field is required" required>
                                            <br>
                        <input type="text" placeholder="Full Name Of Parent *" class="contact-input" name="parent_name" id="parent_name" data-error="Parent Name field is required" required>


                        <br>

                        <input type="email" placeholder="Email ID Of Parent *" class="contact-input" name="email" id="email" data-error="Email field is required" required>
                        <input type="text" placeholder="Phone Of Parent*" class="contact-input" name="phone" id="phone" data-error="Phone field is required" required>
                        <select id="city" class='contact-input' name="city">
                            <option selected="selected">-Select City-</option>
                            <option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Cities-</i></font></option>
                            <option>Pune</option>
                            <option>Mumbai</option>

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
                    <input type="text" placeholder="Marks Obtained In Pervious Standard *" class="contact-input" name="marks" id="marks">


                        <script src='css/api.js'></script>
                        <script>
                        function submitUserForm() {
                            var response = grecaptcha.getResponse();
                            if(response.length == 0) {
                                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
                                return false;
                            }
                            return true;
                        }

                        function verifyCaptcha() {
                            document.getElementById('g-recaptcha-error').innerHTML = '';
                        }
                        </script>

                        {{-- <div class="g-recaptcha" data-sitekey=" " data-callback="verifyCaptcha"></div>
                        <div id="g-recaptcha-error"></div> --}}


                        <input type="hidden" name="_token" value="">


                        <input type="submit" class="contact-button" value="Submit" >

                    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#submit_admission').on('submit', function(event){
        event.preventDefault();
        $.ajax({
        url:"/Admission/submit_admission_enquiry",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
        swal("Successfully Inserted !!!", "We Will Contact You Soon.", "success");
        $('#submit_admission input[type="text"]').val('');
        $('#submit_admission input[type="email"]').val('');
        location.reload();
        }
        })
        });
    });
    </script>

                                </div>
                        </div><!-- post item -->
                    </div><!-- post items -->



            </div>
            <div class="col-md-3">
              <div class="sidebar">

                <div class="sidebar-item">
                  <h3 class="sidebar-title">Admissions</h3>

                  <ul class="sidebar-categories">
                                                <li><a href="{{ url('/admission-enquiry') }}">Admission Enquiry</a></li>
                                                <li><a href="{{ url('/admission-procedure-age-criteria') }}">Admission Procedure &amp; Age Criteria</a></li>
                                                <li><a href="{{ url('/doucment-checklist') }}">Document Checklist</a></li>
                                                <li><a href="{{ url('/fee-details') }}">Fee Details</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- Blog Post End here -->


              <script src="js/jquery.min.js"></script>
          <script src="js/sweetalert.min.js"></script>
          <script>
          $(document).ready(function(){
              $('#submit_admission').on('submit', function(event){
              event.preventDefault();
              $.ajax({
              url:"/submit_admission_enquiry",
              method:"POST",
              data:new FormData(this),
              dataType:'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success:function(data)
              {
              swal("Successfully Inserted !!!", "We Will Contact You Soon.", "success");
              $('#submit_admission input[type="text"]').val('');
              $('#submit_admission input[type="email"]').val('');
              location.reload();
              }
              })
              });
          });
          </script>








 @endsection
