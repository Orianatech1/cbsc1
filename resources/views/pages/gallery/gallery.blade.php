@extends('layout.main')

@section('main-content')

<!-- Page Header -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3>Photo Gallery</h3>
            <ul>
                <li><a href="#">Home /</a></li>
                <li>Gallery / Photo Gallery</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->

<!-- Styles -->
<style>
    /* Place your styles here */
</style>

<!-- Main Content -->
<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="container mt-4">
                <!-- Navigation Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                            aria-controls="tab2" aria-selected="true">
                            Campus Life
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link " id="tab4-tab" data-toggle="tab" href="#tab4" role="tab"
                            aria-controls="tab4" aria-selected="false">
                            Sports
                        </a>
                    </li> --}}




                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <!-- Tab Content Goes Here -->
                        <div class="row shuffle-wrapper">
                            <!-- Loop through images or videos -->
                            <!-- Check if media is video -->
                            <!-- Image -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (10).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (10).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Check if media is video -->
                            <!-- Image -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (13).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (13).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Check if media is video -->
                            <!-- Image -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (14).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (14).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Check if media is video -->
                            <!-- Image -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (15).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (15).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (1).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (1).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (1).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (1).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (1).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (1).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (1).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (1).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (1).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (1).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;2&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('img/activity/1 (1).jpg') }}">
                                        <img class="img-fluid" src="{{ url('img/activity/1 (1).jpg') }}" alt="Campus Life"
                                            style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <hr size="4" color="red">

                    </div>

                    <div class="tab-pane fade " id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <!-- Tab Content Goes Here -->
                        <div class="row shuffle-wrapper">
                            <!-- Loop through images or videos -->
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Check if media is video -->
                            <!-- Image -->
                            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                data-groups="[&quot;4&quot;]">
                                <div class="project-img-container"
                                    style="width: auto; height: 200px; overflow: hidden;">
                                    <a class="gallery-popup" href="{{ url('storage/banner1.jpg') }}">
                                        <img class="img-fluid" src="{{ url('storage/banner1.jpg') }}" alt="Sports" style="width: 100%; height: auto;">
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <p class="project-cat"></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <hr size="4" color="red">

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
