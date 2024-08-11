<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage-gardens</title>
    
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

<?php require('include/header.php');?>
<!-- ------------------------------------------------------------------------------------- -->

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Our Gardens</h2>
  <div class="h-line bg-dark"></div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded">
          <div class="container-fluid flex flex-lg-column align-items-stretch">
           <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <div class="border bg-light p-3 rounded mb-3 ">
                <h5 class="mb-3 " style="font-size: 18px;">CHECK AVIBILITY</h5>
                <label class="form-label">CHECK-IN</label>
                <input type="date" class="form-control  shadow-none mb-3" >  
                <label class="form-label">CHECK-OUT</label>
                <input type="date" class="form-control  shadow-none" >  
                
              </div>
              <div class="border bg-light p-3 rounded mb-3 ">
                <h5 class="mb-3 " style="font-size: 18px;">Facilities</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input  shadow-none mb-3" > 
                  <label class="form-check-label" for="f1">Facility 1</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input  shadow-none mb-3" > 
                  <label class="form-check-label" for="f2">Facility 2</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input  shadow-none mb-3" > 
                  <label class="form-check-label" for="f3">Facility 2</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f4" class="form-check-input  shadow-none mb-3" > 
                  <label class="form-check-label" for="f4">Facility 2</label>
                </div>
              </div>
            </div>          
          </div>
        </nav>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="card mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-lg-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/caraousel/1.png" class="img-fluid rounded" >
             </div>
             <div class="col-lg-5 px-lg-3 px-md-3">
                   <h5 class="mb-3"> THE AHOOJA GARDEN</h5>
                    <div class="features mb-4">
                      <h6 class="mb-1">Features</h6>
                      <span class="badges rounded-pill bg-light-pink text-dark  text-wrap mb-3 ">
                          50 Room
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3">
                        2 Stage
                    </span>
                        <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3 ">
                          1 Hall
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        1 PARKING
                    </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        1 Open-Dinning
                    </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class="mb-1">FACILITIES</h6>
                     <span class="badges rounded-pill bg-light-pink text-dark  text-wrap mb-3 ">
                        AC-HEATER
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3">
                        DECORATION
                    </span>
                        <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3 ">
                          DJ
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        FOODS
                    </span>
                </div>
                <div class="rating ">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>

            </div>
            <div class="col-lg-2 text-center ">
              <h6 class="mb-4">Rs. 25000 per day</h6>
              <a href="#" class="btn w-100 btn-sm text-white custom-bg shadow-none mb-2">BOOK NOW</a>
              <a href="#" class="btn w-100 btn-sm  btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-lg-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/caraousel/1.png" class="img-fluid rounded" >
             </div>
             <div class="col-lg-5 px-lg-3 px-md-3">
                   <h5 class="mb-3"> THE AHOOJA GARDEN</h5>
                    <div class="features mb-4">
                      <h6 class="mb-1">Features</h6>
                      <span class="badges rounded-pill bg-light-pink text-dark  text-wrap mb-3 ">
                          50 Room
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3">
                        2 Stage
                    </span>
                        <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3 ">
                          1 Hall
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        1 PARKING
                    </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        1 Open-Dinning
                    </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class="mb-1">FACILITIES</h6>
                     <span class="badges rounded-pill bg-light-pink text-dark  text-wrap mb-3 ">
                        AC-HEATER
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3">
                        DECORATION
                    </span>
                        <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3 ">
                          DJ
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        FOODS
                    </span>
                </div>
                <div class="rating ">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>

            </div>
            <div class="col-lg-2 text-center ">
              <h6 class="mb-4">Rs. 25000 per day</h6>
              <a href="#" class="btn w-100 btn-sm text-white custom-bg shadow-none mb-2">BOOK NOW</a>
              <a href="#" class="btn w-100 btn-sm  btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-lg-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/caraousel/1.png" class="img-fluid rounded" >
             </div>
             <div class="col-lg-5 px-lg-3 px-md-3">
                   <h5 class="mb-3"> THE AHOOJA GARDEN</h5>
                    <div class="features mb-4">
                      <h6 class="mb-1">Features</h6>
                      <span class="badges rounded-pill bg-light-pink text-dark  text-wrap mb-3 ">
                          50 Room
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3">
                        2 Stage
                    </span>
                        <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3 ">
                          1 Hall
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        1 PARKING
                    </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        1 Open-Dinning
                    </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class="mb-1">FACILITIES</h6>
                     <span class="badges rounded-pill bg-light-pink text-dark  text-wrap mb-3 ">
                        AC-HEATER
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3">
                        DECORATION
                    </span>
                        <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3 mb-3 ">
                          DJ
                      </span>
                      <span class="badges rounded-pill bg-light text-dark  text-wrap ms-3  mb-3 ">
                        FOODS
                    </span>
                </div>
                <div class="rating ">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>

            </div>
            <div class="col-lg-2 text-center ">
              <h6 class="mb-4">Rs. 25000 per day</h6>
              <a href="#" class="btn w-100 btn-sm text-white custom-bg shadow-none mb-2">BOOK NOW</a>
              <a href="#" class="btn w-100 btn-sm  btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
            </div>
          </div>
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