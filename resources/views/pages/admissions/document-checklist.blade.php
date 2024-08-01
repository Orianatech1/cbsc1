@extends('layout.main')

@section('main-content')




<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3>Document Checklist</h3>
            <ul>
                <li><a href="{{ ('/') }}">Home /</a></li>
                <li>Admission / Document Checklist</li>
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
                            <h3><a href="#">Document Checklist</a></h3>
                            <p>1. Passport size Coloured Photographs (2 Nos.)</p>

                            <p>2. Original Birth certificate&nbsp;</p>

                            <p>3. Original School leaving certificate for students from STD II to STD XII. (Students
                                coming from other states must provide the school leaving certificate countersigned by
                                Education Officer if that state/Regional office of CBSE)</p>

                            <p>4. Progress Report of previous Academic Year (photocopy of report card for CBSE School
                                and Original for state board school)</p>

                            <p>5. Blood Group Report.</p>

                            <p>6. Caste Certificate (for reserved category only).</p>

                            <p>7. AGE LIMIT: Age limit for admission (by 31th December of the Current Academic Year)</p>

                            <p>8. Class I: 6 Years by 31th December&nbsp;of the Current Academic Year</p>

                            <p>9. Aadhar Card of student.</p>
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
                            <li><a href="{{ url('/document-checklist') }}">Document Checklist</a></li>
                            <li><a href="{{ url('/fee-details') }}">Fee Details</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Post End here -->








@endsection
