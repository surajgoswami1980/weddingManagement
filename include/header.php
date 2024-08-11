<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">Marriage</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="gardens.php">Gardens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>

      </ul>
      <div class="d-flex">
       
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginmodal">
          Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registermodal">
          Register
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- login button model -->

<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="">
        <div class="modal-header">
          
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
        <i class="bi bi-person-circle fs-3 me-2"></i>  
        User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control  shadow-none" >  
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control  shadow-none" >  
        </div>
        <div class=" mb-3">
          <button class=" btn btn-dark  shadow-none form-control mb-2">Login</button>
                <div class="d-flex f-direction-column justify-content-evenly">
                  <div class="div">
                    <label>Not Registered ? </label> 
                    <label data-bs-toggle="modal" data-bs-target="#registermodal" >
                    <a href="#"id="register-link" >Register </a> here</label> 
                    </div>
                    <div class="div">
                    <a href=" javascript: void(0)" class=" text-decoration-none">forget password </a>
                    </div>
                  </div>
        </div>
      </div>

        </form>
    </div>
  </div>
</div>

<!-- register modal  -->
<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="">
        <div class="modal-header">
          
        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i> 
         
        User Registration</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <span class=" badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base " >
            Note:- Please Enter Details According to your Documents </span>
            <div class="container-fluid">
              <div class="row" >
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-6 p-0">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">  Phone</label>
                  <input type="number" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-6 p-0">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea  class="form-control  shadow-none" rows="1" ></textarea>  
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label"> pincode</label>
                  <input type="number" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-6 p-0">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label"> Password</label>
                  <input type="password" class="form-control  shadow-none" >  
                </div>
                <div class="col-md-6 p-0">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control  shadow-none" >  
                </div>
              
              
              </div>
                  <div class="text-center my-1 display-flex ">
                    <button type="submit"class=" btn btn-dark  form-control shadow-none mb-2">Submit</button>
                    <br>
                    <label>Already Registered ? </label> 
                    <label data-bs-toggle="modal" data-bs-target="#loginmodal" >
                    <a href="#"id="login-link" >login </a> here</label> 
                    
                  </div> 
            </div>

      </div>

        </form>
    </div>
  </div>
</div>