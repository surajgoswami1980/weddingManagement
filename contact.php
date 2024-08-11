<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage-contact</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<?php require('include/links.php');?>
<style>
/* Chrome, Safari, Edge, Opera */
.pop:hover{
  border-top-color: yellow !important;
  transform: scale(1.08);
    transition: all 0.4s;  
}
</style>
</head>
<body class="bg-light">
<!-- header -->

<?php require('include/header.php');
      ?>
<!-- ------------------------------------------------------------------------------------- -->

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Our Contact us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, illo blanditiis totam provident 
    magnam magni ad <br>omnis. Asperiores molestiae ducimus ut? In laboriosam placeat unde quae
     earum modi, ullam repudiandae!
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg- col-md-6 mb-5 px-4">
        <div class="div BG-WHITE rounded shadow p-4 ">
        <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.399056182651!2d76.96857797531744!3d29.358602675276185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ddb0067be3c2f%3A0x140d28b7d087e3a0!2sSURAJ%20TRADING%20TIPS!5e0!3m2!1sen!2sin!4v1712827926404!5m2!1sen!2sin"  height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/dCsHHZUrG245gJXeA" target="_blanket" class="d-line text-decoration-none text-dark mb-2">
        <i class="bi bi-geo-alt-fill"></i>
          Vikas Nagar,1148D, Near Sir Chotu Ram Heritage School , Panipat Haryana (132103)
        </a>
        <h5 class="mt-4">Call us </h5>
               <a href="tel : +91 8295150083 " class="d-inline-block mb-2 text-decoration-none text-dark" >
                <i class="bi bi-telephone-fill " ></i>
                +918295150083</a>
                 <a href="tel : +91 8295150083 " class="d-inline-block mb-2 text-decoration-none text-dark" >
              <i class="bi bi-telephone-fill " ></i>
              +918295150083</a>
              <h5 class="mt-3">Email :</h5>
              <i class="bi bi-envelope-at"></i>
              <a href="mailto: ask.surajgoswami853@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark  " >surajgoswami853@gmail.com</a>

              <h5 class="mt-4">Follow us </h5>
          <a href="#" class="d-inline-block mb-3 mt-2 text-dark fs-5 me-2" >
            
              <i class="bi bi-twitter me-1"></i>
             
           </a>
            
            <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2" >
              
                <i class="bi bi-facebook me-1"></i>
                
             </a>
              
              <a href="#" class="d-inline-block text-dark fs-5 me-2" >
               
                  <i class="bi bi-instagram me-1"></i>
                  
               </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="div BG-WHITE rounded shadow p-4 ">
          <form>
            <h5 class="text-center mb-5">Send a Message </h5>
            <div class="mb-4">
              <label class="form-label" style="font-weight:500">Name</label>
              <input type="text" class="form-control  shadow-none" >  
            </div>
            <div class="mb-4">
              <label class="form-label" style="font-weight:500">Email</label>
              <input type="Email" class="form-control  shadow-none" >  
            </div>
            <div class="mb-4">
              <label class="form-label" style="font-weight:500">Phone Number</label>
              <input type="digit" class="form-control  shadow-none" >  
            </div>
            <div class="mb-4">
              <label class="form-label" style="font-weight:500">Subject</label>
              <input type="text" class="form-control  shadow-none" >  
            </div>
            <div class="mb-4">
              <label class="form-label" style="font-weight:500">Message</label>
              <textarea  class="form-control  shadow-none" rows="6" style="resize:none" ></textarea>  
            </div>
            <button type="submit"class=" btn btn-dark text-white custom-bg mt-3 form-control shadow-none mb-4">Send</button>
            
          </form>

      </div>
  </div>

  </div>
</div>


<!-- --------------------footer ---------------------- -->

<?php
require('include/footer.php');
?>


<!-- js for slider -->

<script>

  // Function to close the registration modal when the login modal is opened
  document.getElementById('login-link').onclick = function() {
    // Close the registration modal
    $('#registermodal').modal('hide');
  };
  document.getElementById('register-link').onclick = function() {
    // Close the registration modal
    $('#loginmodal').modal('hide');
  };

  </script>

</body>
</html>