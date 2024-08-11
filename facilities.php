<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage-facilities</title>
    
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
  <h2 class="fw-bold h-font text-center">Our facilities</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, illo blanditiis totam provident 
    magnam magni ad <br>omnis. Asperiores molestiae ducimus ut? In laboriosam placeat unde quae
     earum modi, ullam repudiandae!
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="div BG-WHITE rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="image/caraousel/1.png" width="40px" >
            <h5 m-0 ms-3 >DJ</h5>
          </div>
          <P >
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, esse facere similique praesentium, debitis tenetur accusamus odit doloribus itaque eum optio assumenda delectus consectetur beatae, repudiandae distinctio nobis fugiat harum?
          </P>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="div BG-WHITE rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="image/caraousel/1.png" width="40px" >
          <h5 m-0 ms-3 >DJ</h5>
        </div>
        <P >
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, esse facere similique praesentium, debitis tenetur accusamus odit doloribus itaque eum optio assumenda delectus consectetur beatae, repudiandae distinctio nobis fugiat harum?
        </P>
      </div>
  </div>
  <div class="col-lg-4 col-md-6 mb-5 px-4">
    <div class="div BG-WHITE rounded shadow p-4 border-top border-4 border-dark pop">
      <div class="d-flex align-items-center mb-2">
        <img src="image/caraousel/1.png" width="40px" >
        <h5 m-0 ms-3 >DJ</h5>
      </div>
      <P >
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, esse facere similique praesentium, debitis tenetur accusamus odit doloribus itaque eum optio assumenda delectus consectetur beatae, repudiandae distinctio nobis fugiat harum?
      </P>
    </div>
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
  <div class="div BG-WHITE rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
      <img src="image/caraousel/1.png" width="40px" >
      <h5 m-0 ms-3 >DJ</h5>
    </div>
    <P >
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, esse facere similique praesentium, debitis tenetur accusamus odit doloribus itaque eum optio assumenda delectus consectetur beatae, repudiandae distinctio nobis fugiat harum?
    </P>
  </div>
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
  <div class="div BG-WHITE rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
      <img src="image/caraousel/1.png" width="40px" >
      <h5 m-0 ms-3 >DJ</h5>
    </div>
    <P >
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, esse facere similique praesentium, debitis tenetur accusamus odit doloribus itaque eum optio assumenda delectus consectetur beatae, repudiandae distinctio nobis fugiat harum?
    </P>
  </div>
</div>
<div class="col-lg-4 col-md-6 mb-5 px-4">
  <div class="div BG-WHITE rounded shadow p-4 border-top border-4 border-dark pop">
    <div class="d-flex align-items-center mb-2">
      <img src="image/caraousel/1.png" width="40px" >
      <h5 m-0 ms-3 >DJ</h5>
    </div>
    <P >
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, esse facere similique praesentium, debitis tenetur accusamus odit doloribus itaque eum optio assumenda delectus consectetur beatae, repudiandae distinctio nobis fugiat harum?
    </P>
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