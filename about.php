<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage ABOUT</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<?php require('include/links.php');?>
<style>
.image{
  height: 350px; 
}
.image:hover{
  transform: scale(1.03);
  transition: all 0.3s; 
  box-shadow: gray;
}
.box:hover{
  border-top-color: green ;
}
</style>
</head>
<body class="bg-light">
<!-- header -->

<?php require('include/header.php');
      ?>
<!-- ------------------------------------------------------------------------------------- -->

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">About us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, illo blanditiis totam provident 
    magnam magni ad <br>omnis. Asperiores molestiae ducimus ut? In laboriosam placeat unde quae
     earum modi, ullam repudiandae!
  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3"> HLO EVERYONE </h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio reiciendis in necessitatibus repudiandae, vero perspiciatis cum quisquam dolorem vitae numquam quasi voluptas atque accusamus, nam suscipit delectus omnis harum pariatur.

      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="image/caraousel/vimalimage.jpeg" class="w-100 image">

    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="image/caraousel/14.jpg" width="70px" >
        <h4 class="mt-3">1000+ Registered garden</h4>
      </div>

    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="image/caraousel/14.jpg" width="70px" >
        <h4 class="mt-3">30k+ Staff Registered</h4>
      </div>

    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="image/caraousel/14.jpg" width="70px" >
        <h4 class="mt-3">5k+ Reviews (Happy Customer)</h4>
      </div>

    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="image/caraousel/14.jpg" width="70px" >
        <h4 class="mt-3">40K Certificate Generated</h4>
      </div>

    </div>
  </div>
</div>

<h3 class="my-5  fw-bold  h-font text-center" >Management Team</h3>

<div class="container px-4 mb-5">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white mx-2 text-center overflow-hidden rounded">
        <img src="image/caraousel/11.jpg" class="w-100" >
        <h5 class="mt-2">SURAJ</h5>
      </div>
      <div class="swiper-slide bg-white mx-2 text-center overflow-hidden rounded">
        <img src="image/caraousel/11.jpg" class="w-100" >
        <h5 class="mt-2">SURAJ</h5>
      </div>
      <div class="swiper-slide bg-white mx-2 text-center overflow-hidden rounded">
        <img src="image/caraousel/11.jpg" class="w-100" >
        <h5 class="mt-2">SURAJ</h5>
      </div>
      <div class="swiper-slide bg-white mx-2 text-center overflow-hidden rounded">
        <img src="image/caraousel/11.jpg" class="w-100" >
        <h5 class="mt-2">SURAJ</h5>
      </div>
      <div class="swiper-slide bg-white mx-2 text-center overflow-hidden rounded">
        <img src="image/caraousel/11.jpg" class="w-100" >
        <h5 class="mt-2">SURAJ</h5>
      </div>
      <div class="swiper-slide bg-white mx-2 text-center overflow-hidden rounded">
        <img src="image/caraousel/11.jpg" class="w-100" >
        <h5 class="mt-2">SURAJ</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
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

  var swiper = new Swiper(".mySwiper", {
    
      pagination: {
        el: ".swiper-pagination",
        spacebetween:40,
      },
      breakpoints:{
        320:{
          slidesPerView:1,
          spacebetween:40,
        },
        640:{
          slidesPerView:1,
          spacebetween:40,
        },
        768:{
          slidesPerView:2,
          spacebetween:40,
        },
        1024:{
          slidesPerView:3,
          spacebetween:40,
        }
      },
    });

  </script>

</body>
</html>