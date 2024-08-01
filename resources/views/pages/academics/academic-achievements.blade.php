@extends('layout.main')

@section('main-content')

<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3>School Achievements</h3>
            <ul>
                <li><a href="#">Home /</a></li>
                <li>Academics / School Achievements</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->
<!-- Product start here -->
<section class="product padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xs-12 post-item-pagination">
                <div class="product-items">
                    <div class="product-item-grid">
                        <div class="pro-item">
                            <div class="pro-image cd-item" id="prdct1">
                                <img src="storage/banner1.jpg" style="height: 260px; width:288px;" alt="product image"
                                    class="img-responsive">
                            </div>
                            <div class="pro-content" style="height: 100px !important;">
                                <strong><a href="#">STD 10 Result 2024</a></strong>
                            </div><!-- pro-content -->
                        </div> <!-- pro item -->
                    </div><!-- product-item -->
                    <div class="product-item-grid">
                        <div class="pro-item">
                            <div class="pro-image cd-item" id="prdct2">
                                <img src="storage/banner1.jpg" style="height: 260px; width:288px;" alt="product image"
                                    class="img-responsive">
                            </div>
                            <div class="pro-content" style="height: 100px !important;">
                                <strong><a href="#">STD 12 Result 2024</a></strong>
                            </div><!-- pro-content -->
                        </div> <!-- pro item -->
                    </div><!-- product-item -->
                    <div class="product-item-grid">
                        <div class="pro-item">
                            <div class="pro-image cd-item" id="prdct3">
                                <img src="storage/banner1.jpg" style="height: 260px; width:288px;" alt="product image"
                                    class="img-responsive">
                            </div>
                            <div class="pro-content" style="height: 100px !important;">
                                <strong><a href="#">Gold Medal Winners In Olimpiad Enlgish</a></strong>
                            </div><!-- pro-content -->
                        </div> <!-- pro item -->
                    </div><!-- product-item -->

                    <div id="cd-quick-view-coverlay"></div>
                </div><!-- product items -->

            </div>
            <div class="col-lg-3 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3 class="sidebar-title">Academics</h3>
                        <ul class="sidebar-categories">
                            <li><a href="#">Curriculum Details</a> </li>
                            <li><a href="#">Learning Resources</a></li>
                            <li><a href="#">School Best Practice</a></li>
                            <li><a href="#">Academic Calendar</a></li>

                            <li><a href="#">Academic Achivements</a></li>

                            <li><a href="#">Book List</a></li>
                            <li><a href="#">Holiday List</a></li>
                        </ul>
                    </div>

                </div>
            </div><!-- row -->
        </div><!-- container -->
</section>
<!-- Product end here -->


@endsection

