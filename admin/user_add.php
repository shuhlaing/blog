<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Exit Admin - Online Reading </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/cat-1.jpg" type="image/x-icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/testimonial-1.jpg">



    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
      input[type=text] {
        width: 300px;
        box-sizing: border-box;
        border: none;
        /* border-bottom:2px solid #06BBCC !important; */
          border-bottom:2px solid var(--dark) !important;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 20px 20px 5px 5px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
        outline:none;
      }
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header Start -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <a href="index.php" class="nav-item nav-link"><h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Exit Admin Panel</h2></a>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="" class="nav-item nav-link">User </a>
              <a href="" class="nav-item nav-link">User Image</a>
                <form style="padding-right:25px !important;">
                  <input type="text" name="search" placeholder="Search..">
                </form>
                <a href="" class="nav-item nav-link">User Image</a>
              </div>
            </div>

            <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Form</h6>
                <h3 class="mb-5">User Create Form</h3>
            </div>
            <div class="row row--top-20">
                <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="table-container">
                  <form>
                    <div class="form-group" style="padding-bottom:15px;">
                      <label for="exampleInputEmail1" style="padding-bottom:15px;">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group" style="padding-bottom:15px;">
                      <label for="exampleInputEmail1" style="padding-bottom:15px;">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group" style="padding-bottom:15px;">
                      <label for="exampleInputPassword1" style="padding-bottom:15px;">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check" style="padding-bottom:15px;">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="user_list.php" class="btn btn-secondary">Back</a>
                  </form>
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer" data-wow-delay="0.1s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Find your way</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                          <a class=" btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn-social" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
      <script>
      function activateSearchbox(el){
        el.classList.add('searchbox--active')
      }
      function deactivateSearchbox(el){
        el.classList.remove('searchbox--active')
      }

      function onFocus(){
        activateSearchbox(document.querySelector('.searchbox'));
      }

      function onBlur(){
        deactivateSearchbox(document.querySelector('.searchbox'));
      }
      </script>
</body>

</html>
