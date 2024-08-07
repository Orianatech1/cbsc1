@extends('layout.main')

@section('main-content')

<!-- Contact Start here -->
<section class="contact contact-page padding-120">
<div class="contact-details ">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
   <ul>
     <li class="contact-item">
       <span class="icon flaticon-signs"></span>
        <div class="content">
        <h4>Institute Name</h4>
        <p>Pune Cambridge Public School</p>
        </div>
     </li>
     <li class="contact-item">
        <span class="icon flaticon-signs"></span>
        <div class="content">
        <h4>Our Location</h4>
        <p>Pune Cambridge Public School, Jijamata chowk, Behind Ambegaon Pathar Police Chowki, Ambegaon Pathar- Pune 411046</p>
        </div>
     </li>
     <li class="contact-item">
        <span class="icon flaticon-smartphone"></span>
        <div class="content">
        <h4>Phone Number</h4>
        <p> 020 - 24363600, 020 - 34363300,  9011032856</p>
        </div>
     </li>
     <li class="contact-item">
        <span class="icon flaticon-message"></span>
        <div class="content">
        <h4>Email Address</h4>
        <p>pcpscbseambegaon@gmail.com</p>
        </div>
     </li>
   </ul>
</div>
<div class="col-md-8 col-sm-6 col-xs-12">




    <div class="post-items">
        <div class="post-item">
                <div class="post-content">

<form class="contact-form" id="submit_admission" method="post" name="pcps_form" action="https://script.google.com/macros/s/AKfycbzt-fi01PUMVyDfAHPUCS-HnjTwXijmDWrBshTjhOr-XsHeR9E0-6w9-CAXMw4EDubZeQ/exec" >

        <input type="text" placeholder="Full Name Of Student *" class="contact-input" name="name" id="name" data-error="Name field is required" required>
                            <br>
        <input type="text" placeholder="Full Name Of Parent *" class="contact-input" name="parent_name" id="parent_name" data-error="Parent Name field is required" required>


        <br>

        <input type="email" placeholder="Email ID Of Parent *" class="contact-input" name="email" id="email" data-error="Email field is required" required>
        <input type="text" placeholder="Phone Of Parent*" class="contact-input" name="phone" id="phone" data-error="Phone field is required" required>
        <input type="text" placeholder="Name of Last School Attended" class="contact-input" name="city" id="phone" data-error="Phone field is required" required>

        {{-- <select id="city" class='contact-input' name="city">
            <option selected="selected">-Select City-</option>
            <option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Cities-</i></font></option>
            <option>Pune</option>
            <option>Mumbai</option>

            <option>Other</option>
        </select> --}}

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

    </select>
    <input type="text" placeholder="Marks Obtained In Pervious Standard *" class="contact-input" name="marks" id="marks">

<script>

const scriptURL = 'https://script.google.com/macros/s/AKfycbzt-fi01PUMVyDfAHPUCS-HnjTwXijmDWrBshTjhOr-XsHeR9E0-6w9-CAXMw4EDubZeQ/exec'

const form = document.forms['pcps_form']

form.addEventListener('submit', e => {
e.preventDefault()
fetch(scriptURL, { method: 'POST', body: new FormData(form)})
.then(response => alert("Thank you! We Will Get Back To You." ))
.then(() => { window.location.reload(); })
.catch(error => console.error('Error!', error.message))
})

</script>
<input type="hidden" name="_token" value="">


<input type="submit" class="contact-button" value="Submit" >

</form>
<script src="css/jquery.min.js"></script>
<script src="css/sweetalert.min.js"></script>
</div>
</div><!-- row -->
</div><!-- container -->
</div><!-- contact-details -->
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3784.584000910924!2d73.84030857519014!3d18.45718778262415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDI3JzI1LjkiTiA3M8KwNTAnMzQuNCJF!5e0!3m2!1sen!2sin!4v1722490169611!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="width:100% !important; height:100% !important; border:0" allowfullscreen=""></iframe>

</div>
</section>
<!-- Contact End here -->
@endsection

