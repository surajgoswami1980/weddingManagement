<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage</title>
    <?php require('include/links.php');
     ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   
    <style>
/* Chrome, Safari, Edge, Opera */


.custom-bg{
  background-color: rgb(5, 93, 78);
}

@media screen and (max-width :575px) {
  .avilable{
  margin-top: 25px;
  padding: 0,35px;
  
}
}
</style>
</head>
<body class="bg-light">
<!-- header -->

<?php require('include/header.php');
      ?>

<!-- slider  -->

<div class="container-fluid px-lg-4 mt-4">
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="image/caraousel/1.png" class="w-100 d-block " />
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/2.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/14.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/11.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/12.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/13.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/16.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/15.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="image/caraousel/17.jpg" class="w-100 d-block"/>
      </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div> -->
  </div>
</div>

<!-- avilavility -->

<div class="container avilable">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
       <h5 class="mb-4">
        Check Bokking avilability 
       </h5>
       <form>
        <div class="row align-items-end">
          <div class="col-md-3  mb-3 ">
            <label class="form-label">FROM</label>
            <input type="date" class="form-control  shadow-none" >  
          </div>
          <div class="col-md-3  mb-3 ">
            <label class="form-label">TO</label>
            <input type="date" class="form-control  shadow-none" >  
          </div>
          <div class="col-md-2  mb-3">
            <label class="form-label font-weight-500">Total Members</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Number of members</option>
              <option value="1">less then 100</option>
              <option value="2">100-500</option>
              <option value="3">500 or more</option>
            </select>
          </div>
          <div class="col-md-2  mb-3 ">
            <label class="form-label font-weight-500">Budget</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Select Your Budget</option>
              <option value="1">less then 2 lakh</option>
              <option value="2">2 lakh to 10 lakh  </option>
              <option value="3">more then 10 lakh</option>
            </select>
          </div>
          <div class="col-md-1 mb-3">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
       </form>
    </div> 

  </div>
</div>

<!-- garden cards  -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold "> OUR BEST GARDENS</h2>
<div class="container">
  <div class="row">

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="image/caraousel/17.JPG" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Botenical Garden </h5>
            <h6 class="card-text mb-4">Rs. 15,000 per day </h6>
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
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
              <a href="#" class="btn btn-sm  btn-outline-dark rounded-0 fw-bold shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="image/caraousel/11.JPG" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">BHOLENATH Garden </h5>
            <h6 class="card-text mb-4">Rs. 55,000 per day </h6>
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
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
              <a href="#" class="btn btn-sm  btn-outline-dark  shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="image/caraousel/2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ryno-jack Garden </h5>
            <h6 class="card-text mb-4">Rs. 35,000 per day </h6>
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
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">

              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
              <a href="#" class="btn btn-sm  btn-outline-dark  shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none ">More Gardens >>></a>
      </div>
  </div>

</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold "> OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="" width="80px" >
      <h5 class="mt-3"> DJ</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="" width="80px" >
      <h5 class="mt-3"> FOOD</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="" width="80px" >
      <h5 class="mt-3"> SERVENTS</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="" width="80px" >
      <h5 class="mt-3"> PARKING</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="" width="80px" >
      <h5 class="mt-3"> STAGE</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn  btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilities >>> </a>
    </div>
  </div>
</div>

<!-- testinimials  -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold "> Testinomials</h2>

<div class="container mt-5">
   <!-- Swiper -->
   <div class="swiper mySwiper1">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
       <div class="profile d-flex align-items-center p-4">
        <img src="image/caraousel/17.jpg" width="30px" >
        <h6 > USER SURAJ</h6>
       </div>
       <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, vero 
        ratione impedit dolorum ex animi ut, odit facere repellat, totam error veniam debitis
         quasi? Facere deleniti quis earum minus magni.</P>
         <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
         </div>

      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
         <img src="image/caraousel/15.jpg" width="30px" >
         <h6 > USER HARDIK</h6>
        </div>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, vero 
         ratione impedit dolorum ex animi ut, odit facere repellat, totam error veniam debitis
          quasi? Facere deleniti quis earum minus magni.</P>
          <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
          </div>
 
       </div>

       <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center p-4">
         <img src="image/caraousel/16.jpg" width="30px" >
         <h6 > USER KESHAV</h6>
        </div>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, vero 
         ratione impedit dolorum ex animi ut, odit facere repellat, totam error veniam debitis
          quasi? Facere deleniti quis earum minus magni.</P>
          <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
          </div>
 
       </div>


    </div>

    <div class="swiper-pagination"></div>

    
  </div>
</div>


<!-- contact us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold "> Contact us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.399056182651!2d76.96857797531744!3d29.358602675276185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ddb0067be3c2f%3A0x140d28b7d087e3a0!2sSURAJ%20TRADING%20TIPS!5e0!3m2!1sen!2sin!4v1712827926404!5m2!1sen!2sin"  height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us </h5>
          <a href="tel : +91 8295150083 " class="d-inline-block mb-2 text-decoration-none text-dark" >
            <i class="bi bi-telephone-fill " ></i>
            +918295150083</a><br>
            <a href="tel : +91 8295150083 " class="d-inline-block mb-2 text-decoration-none text-dark" >
              <i class="bi bi-telephone-fill " ></i>
              +918295150083</a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us </h5>
          <a href="#" class="d-inline-block mb-3 mt-2" >
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i>
              Twitter
            </span>
           </a>
            <br>
            <a href="#" class="d-inline-block mb-3" >
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i>
                Facebook
              </span>
             </a>
              <br>
              <a href="#" class="d-inline-block" >
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-instagram me-1"></i>
                  Instagram
                </span>
               </a>
                
      
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
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay:{
        delay:2500,
        disableOnInteraction:false,
      }
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev",
      // },
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true,
      // },
      
    });

    var swiper = new Swiper(".mySwiper1", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:3,
        },
        1024:{
          slidesPerView:3,
        }
      }
    });

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