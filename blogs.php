<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs - Genti Production</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- fonts links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <div class="all-content">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="logo"><img src="./images/logo.png" alt="Genti Production"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.php">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- blogs -->
    <section class="blogs" id="blogs" style="margin-top: 50px;">
      <h1>Latest <span>Blogs</span></h1>

      <div class="container">

        <div class="row">

          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/blog1.jpg" alt="Blog 1">
              <div class="card-body">
                <h3>Top Wedding Trends for 2023</h3>
                <h5><i>Admin / 6 March 2023</i></h5>
                <p>Discover the latest wedding trends for 2023, from bold colors to unique venues.</p>
                <button id="blogbtn">Read More</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/blog2.jpg" alt="Blog 2">
              <div class="card-body">
                <h3>How to Choose the Perfect Wedding Photographer</h3>
                <h5><i>Admin / 6 March 2023</i></h5>
                <p>Tips on selecting the right photographer to capture your special day.</p>
                <button id="blogbtn">Read More</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/blog3.png" alt="Blog 3">
              <div class="card-body">
                <h3>Wedding Videography: What to Expect</h3>
                <h5><i>Admin / 6 March 2023</i></h5>
                <p>Learn what to expect from your wedding videographer and how to prepare.</p>
                <button id="blogbtn">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- blogs -->

    <script>
      // Verifikim me regex ne inputin e kerkimit
      $("form").submit(function (e) {
        const searchText = $("input[type='search']").val();
        const pattern = /^[a-zA-Z0-9\s]+$/;

        if (!pattern.test(searchText)) {
          alert("Search input përmban karaktere të palejuara!");
          e.preventDefault();
        }
      });
    </script>

    <!-- footer -->
    <footer id="footer">
      <div class="footer-logo text-center">
        <img src="./images/logo.png" alt="Genti Production">
      </div>
      <div class="socail-links text-center">
        <a href="https://twitter.com" target="_blank">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://facebook.com" target="_blank">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://instagram.com" target="_blank">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://youtube.com" target="_blank">
          <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="https://pinterest.com" target="_blank">
          <i class="fa-brands fa-pinterest-p"></i>
        </a>
      </div>

      <div class="credite text-center">
        Designed By <a href="#"> Grupi 7</a>
      </div>
      <div class="copyright text-center">
        &copy; Copyright <strong><span>Genti Production</span></strong>. All Rights Reserved
      </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"><i><img src="./images/up-arrow.png" alt="" width="55px"></i></a>

</body>

</html>