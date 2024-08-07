@extends('layout.main')

@section('main-content')



<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
        <h3>Fee Details</h3>
        <ul>
            <li><a href="{{ url('/') }}">Home /</a></li>
            <li>Admission / Fee Details</li>
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
                                    <h3><a href="#">Fee Details</a></h3>
                                                                        <p><a href="pdf/staff.pdf" target="_blank">View File </a></p>
                                        <object data="pdf/Fee Structure .pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="20"></object>
                                                                                                        <p>Fee Details</p>
                                                                </div>
                        </div><!-- post item -->
                    </div><!-- post items -->




            </div>
            <div class="col-md-3">
              <div class="sidebar">

                <div class="sidebar-item">
                  <h3 class="sidebar-title">Admissions</h3>

                  <ul class="sidebar-categories">
                                                <li><a href="{{ url('/') }}">Admission Enquiry</a></li>
                                                <li><a href="{{ url('/') }}">Admission Procedure &amp; Age Criteria</a></li>
                                                <li><a href="{{ url('/') }}">Document Checklist</a></li>

                                                <li><a href="{{ url('/') }}">Fee Details</a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        <!-- Blog Post End here -->







@endsection
