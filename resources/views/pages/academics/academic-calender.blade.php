@extends('layout.main')

@section('main-content')

<!-- Page Header Start here -->
<section class="page-header section-notch">
<div class="overlay">
<div class="container">
    <h3>Academic Calendar</h3>
         <ul>
            <li><a href="#">Home /</a></li>
            <li>Academics/Academic Calendar</li>
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
<h3><a href="#">Academic Calendar</a></h3>
    <object data="pdf/PCPS ANNUAL CALENDER.pdf" type="application/pdf" width="100%" height="800px" internalinstanceid="20"></object>
        <p>Academic Calendar</p>
</div>
</div><!-- post item -->
</div><!-- post items -->
</div>
<div class="col-md-3">
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
</div>
</div>
</div>
</section>
<!-- Blog Post End here -->

@endsection

