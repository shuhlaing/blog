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
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <a href="index.php" class="nav-item nav-link"><h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Admin Panel</h2></a>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="index.php" class="nav-item nav-link">Blog</a>
              <a href="user_list.php" class="nav-item nav-link">User</a>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h1 class="mb-5">Blog Lists</h1>
            </div>
            <div class="text-left wow fadeInUp" data-wow-delay="0.1s">
                <a href="add.php" type="button" class="btn btn-info" style="background-color:#06BBCC;color:white;border-radius:5px;padding:10px;float:left;">Create New Blog Post</a>
            </div>
            <div class="row row--top-20">
              <div class="col-md-12">
                <div class="table-container">
                  <table class="table">
                    <thead class="table__thead">
                      <tr>
                        <th class="table__th">#</th>
                        <th class="table__th">Name</th>
                        <th class="table__th">Policy</th>
                        <th class="table__th">Policy status</th>
                        <th class="table__th">Destination</th>
                        <th class="table__th">Status</th>
                        <th class="table__th">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table__tbody">
                      <tr class="table-row table-row--chris">
                        <td class="table-row__td">
                        1
                        </td>
                        <td class="table-row__td">
                          <div class="table-row__img"></div>
                          <div class="table-row__info">
                            <p class="table-row__name">Christin Ericssen</p>
                          </div>
                        </td>
                        <td data-column="Policy" class="table-row__td">
                          <div class="">
                            <p class="table-row__policy">$5,000</p>
                          </div>
                        </td>
                        <td data-column="Policy status" class="table-row__td">
                          <p class="table-row__p-status status--green status">Approved</p>
                        </td>
                        <td data-column="Destination" class="table-row__td">
                          Huston, US
                        </td>
                        <td  data-column="Status" class="table-row__td">
                          <p class="table-row__status status--green status">Active</p>
                        </td>
                        </td>
          <td class="table-row__td">

                          <a href="edit.php">Edit</a> |
                          <a href="delete.php"
                            onClick="return confirm('Are you sure you want ot delete theis item')"
                            type="button">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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
