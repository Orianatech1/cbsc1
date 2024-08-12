@extends('layout.main')

@section('main-content')






<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3>Managing Committee</h3>
            <ul>
                <li><a href="{{ ('/') }}">Home /</a></li>
                <li>About / Managing Committee</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<!-- Blog Post Start here -->
<section class="blog-post padding-120">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="single-post ">
                    <h4>1. Managing Committee</h4>
                    <object data="pdf/School Managing Committee.pdf" type="application/pdf" width="100%"
                        height="800px" internalinstanceid="20"></object>

                </div><!-- single post -->
            </div>

        </div>
    </div>
</section>
<!-- Blog Post End here -->
@endsection
