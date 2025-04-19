<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Genti Production</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php
  // Konstanta dhe variabla
  define("Studio_Name", "Genti Production");
  $foundationYear = 2010;
  $currentYear = date('Y');
  $yearsActive = $currentYear - $foundationYear;

  function getTeamCount()
  {
    return 12;
  }

  // Varg asociativ me sherbime
  $services = [
    "Photography" => "Wedding, Portrait, Commercial",
    "Videography" => "Events, Promotional, Documentary",
    "Editing" => "Photo Editing, Video Editing"
  ];

  // Manipulime numerike
  $teamCount = getTeamCount();
  $averageTeamPerService = $teamCount / count($services);
  $editingTeamRatio = 3 / $teamCount * 100;
  $doubleFoundation = $foundationYear * 2;

  // RegEx per perpunim te permbajtjes se stringjeve
  $keywords = [];
  foreach ($services as $key => $value) {
    $value = preg_replace("/,/", " |", $value);
    $services[$key] = $value;
    preg_match_all("/\b[A-Z][a-z]+\b/", $value, $matches);
    $keywords[$key] = implode(", ", $matches[0]);
  }
  ?>

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

    <!-- about section -->
    <div class="about" id="about">
      <div class="container">
        <div class="heading">About <span>Us</span></div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="./images/about.jpg" alt="About Genti Production">
            </div>
          </div>
          <div class="col-md-6">
            <h3>What Makes Us Special?</h3>
            <p>At <mark>Genti Production</mark>, we believe that every wedding is unique and deserves to be captured in
              a way that reflects its individuality. Our team of professional photographers and videographers are
              dedicated to creating timeless memories that you will cherish forever.
              <br><br>We specialize in capturing the emotions, details, and moments that make your wedding day truly
              special. From the first look to the last dance, we are there to document every moment.
              <br><br>Our goal is to provide you with stunning visuals that tell the story of your love and commitment.
            </p>
            <hr>
            <h4>Studio Details</h4>
            <table class="table table-bordered">
              <tr>
                <th>Studio Name</th>
                <td><?php echo Studio_Name; ?></td>
              </tr>
              <tr>
                <th>Years Active</th>
                <td><?php echo $yearsActive; ?> years</td>
              </tr>
              <tr>
                <th>Team Members</th>
                <td><?php echo $teamCount; ?> total</td>
              </tr>
              <tr>
                <th>Average Team per Service</th>
                <td><?php echo round($averageTeamPerService, 2); ?></td>
              </tr>
              <tr>
                <th>Editing Team in %</th>
                <td><?php echo round($editingTeamRatio, 1); ?>%</td>
              </tr>

            </table>

            <h5>Service Keywords (Regex extracted)</h5>
            <ul>
              <?php foreach ($keywords as $service => $words): ?>
                <li><strong><?php echo $service; ?>:</strong> <?php echo $words; ?></li>
              <?php endforeach; ?>
            </ul>
            <button id="about-btn">Learn More</button>
          </div>
        </div>
      </div>
    </div>
    <!-- about section -->

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
    <script>
      document.getElementById("about-btn").onclick = function () {
        window.location.href = "services.php";
      };

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


</body>

</html>