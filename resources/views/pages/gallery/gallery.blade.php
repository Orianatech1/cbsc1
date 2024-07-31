
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
                            <a class="nav-link active" id="tab2-tab"
                                data-toggle="tab" href="#tab2" role="tab"
                                aria-controls="tab2"
                                aria-selected="true">
                                Campus Life
                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link " id="tab3-tab"
                                data-toggle="tab" href="#tab3" role="tab"
                                aria-controls="tab3"
                                aria-selected="false">
                                Annual Day 2022-23
                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link " id="tab4-tab"
                                data-toggle="tab" href="#tab4" role="tab"
                                aria-controls="tab4"
                                aria-selected="false">
                                Sports
                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link " id="tab8-tab"
                                data-toggle="tab" href="#tab8" role="tab"
                                aria-controls="tab8"
                                aria-selected="false">
                                Educational Excursion to Dr. Suresh Naik Space Spark
                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link " id="tab9-tab"
                                data-toggle="tab" href="#tab9" role="tab"
                                aria-controls="tab9"
                                aria-selected="false">
                                Educational Excursion To Visit G-20 Exhibition
                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link " id="tab10-tab"
                                data-toggle="tab" href="#tab10" role="tab"
                                aria-controls="tab10"
                                aria-selected="false">
                                Annual sports Meet
                            </a>
                        </li>
                                            <li class="nav-item">
                            <a class="nav-link " id="tab11-tab"
                                data-toggle="tab" href="#tab11" role="tab"
                                aria-controls="tab11"
                                aria-selected="false">
                                Annual Day 2023-24
                            </a>
                        </li>
                                    </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tab2"
                            role="tabpanel" aria-labelledby="tab2-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;2&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="../storage/photo_gallery/2/1721213414IMG-20240717-WA0030.jpg">
                                                    <img class="img-fluid" src="../storage/photo_gallery/2/1721213414IMG-20240717-WA0030.jpg"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
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
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Campus Life" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display7d99.html?tab=2&amp;2CampusLife=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayaf77.html?tab=2&amp;2CampusLife=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display7798.html?tab=2&amp;2CampusLife=4">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayf5f8.html?tab=2&amp;2CampusLife=5">5</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display8bac.html?tab=2&amp;2CampusLife=6">6</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display499e.html?tab=2&amp;2CampusLife=7">7</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displaye363.html?tab=2&amp;2CampusLife=8">8</a></li>

                            <li class="page-item disabled"><span class="page-link">...</span></li>





                                                                        <li class="page-item"><a class="page-link" href="photo_gallery_displaycda2.html?tab=2&amp;2CampusLife=52">52</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display494c.html?tab=2&amp;2CampusLife=53">53</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_display7d99.html?tab=2&amp;2CampusLife=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                            <div class="tab-pane fade " id="tab3"
                            role="tabpanel" aria-labelledby="tab3-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;3&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2022-23" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayd513.html?tab=3&amp;3AnnualDay2022-23=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displaya765.html?tab=3&amp;3AnnualDay2022-23=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayde25.html?tab=3&amp;3AnnualDay2022-23=4">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display4d4b.html?tab=3&amp;3AnnualDay2022-23=5">5</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_displayd513.html?tab=3&amp;3AnnualDay2022-23=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                            <div class="tab-pane fade " id="tab4"
                            role="tabpanel" aria-labelledby="tab4-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;4&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Sports" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display82d6.html?tab=4&amp;4Sports=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayefda.html?tab=4&amp;4Sports=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display94c1.html?tab=4&amp;4Sports=4">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display6b01.html?tab=4&amp;4Sports=5">5</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displaye766.html?tab=4&amp;4Sports=6">6</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display217f.html?tab=4&amp;4Sports=7">7</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_display82d6.html?tab=4&amp;4Sports=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                            <div class="tab-pane fade " id="tab8"
                            role="tabpanel" aria-labelledby="tab8-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;8&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion to Dr. Suresh Naik Space Spark" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displaye554.html?tab=8&amp;8EducationalExcursiontoDr.SureshNaikSpaceSpark=2">2</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_displaye554.html?tab=8&amp;8EducationalExcursiontoDr.SureshNaikSpaceSpark=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                            <div class="tab-pane fade " id="tab9"
                            role="tabpanel" aria-labelledby="tab9-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;9&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Educational Excursion To Visit G-20 Exhibition" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display28d7.html?tab=9&amp;9EducationalExcursionToVisitG-20Exhibition=2">2</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_display28d7.html?tab=9&amp;9EducationalExcursionToVisitG-20Exhibition=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                            <div class="tab-pane fade " id="tab10"
                            role="tabpanel" aria-labelledby="tab10-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;10&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual sports Meet" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display3aea.html?tab=10&amp;10AnnualsportsMeet=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayd252.html?tab=10&amp;10AnnualsportsMeet=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display3b78.html?tab=10&amp;10AnnualsportsMeet=4">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display8197.html?tab=10&amp;10AnnualsportsMeet=5">5</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displaybeb3.html?tab=10&amp;10AnnualsportsMeet=6">6</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display4235.html?tab=10&amp;10AnnualsportsMeet=7">7</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display30d7.html?tab=10&amp;10AnnualsportsMeet=8">8</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_display3aea.html?tab=10&amp;10AnnualsportsMeet=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                            <div class="tab-pane fade " id="tab11"
                            role="tabpanel" aria-labelledby="tab11-tab">
                            <!-- Tab Content Goes Here -->
                            <div class="row shuffle-wrapper">
                                <!-- Loop through images or videos -->
                                                                    <!-- Check if media is video -->
                                                                           <!-- Image -->
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center shuffle-item"
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href="#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
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
                                            data-groups="[&quot;11&quot;]">
                                            <div class="project-img-container" style="width: auto; height: 200px; overflow: hidden;">
                                                <a class="gallery-popup" href=".#">
                                                    <img class="img-fluid" src="#"
                                                        alt="Annual Day 2023-24" style="width: 100%; height: auto;">
                                                </a>
                                                <div class="project-item-info">
                                                    <div class="project-item-info-content">
                                                        <p class="project-cat"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                                                                </div>
                            <hr size="4" color="red">
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">

                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                                                                        <li class="page-item active"><span class="page-link">1</span></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display78da.html?tab=11&amp;11AnnualDay2023-24=2">2</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display8152.html?tab=11&amp;11AnnualDay2023-24=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display49cb.html?tab=11&amp;11AnnualDay2023-24=4">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display12b7.html?tab=11&amp;11AnnualDay2023-24=5">5</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display9330.html?tab=11&amp;11AnnualDay2023-24=6">6</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_displayf4c0.html?tab=11&amp;11AnnualDay2023-24=7">7</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display2123.html?tab=11&amp;11AnnualDay2023-24=8">8</a></li>

                            <li class="page-item disabled"><span class="page-link">...</span></li>





                                                                        <li class="page-item"><a class="page-link" href="photo_gallery_display3479.html?tab=11&amp;11AnnualDay2023-24=14">14</a></li>
                                                                                <li class="page-item"><a class="page-link" href="photo_gallery_display7c9c.html?tab=11&amp;11AnnualDay2023-24=15">15</a></li>


                    <li class="page-item"><a class="page-link" href="photo_gallery_display78da.html?tab=11&amp;11AnnualDay2023-24=2" rel="next">&raquo;</a></li>
            </ul>

                            </div>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
</section>


@endsection
