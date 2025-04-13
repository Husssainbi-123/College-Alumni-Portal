


    
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alumni Portal</title>
    <link rel="icon" type="image/png" href="images.jpg">
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Include Bootstrap CSS -->

    <style>
         <style>
        /* Parent menu item (Alumni Assist) */
.menu-item {
    position: relative;
    padding: 10px 20px;
    color: white;
    cursor: pointer;
}

/* Dropdown content for Alumni Assist - Hidden by default */
.dropdown-content {
    display: none; /* Hide dropdown initially */
    position: absolute;
    top: 100%; /* Position it directly below the parent */
    left: 0;
    background-color: #ff6600;
    padding: 0;
    margin: 0;
    list-style: none;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
    z-index: 1;
}

/* Individual dropdown items */
.dropdown-content li {
    padding: 10px;
}

.dropdown-content li a {
    color: white;
    text-decoration: none;
    display: block;
}

.dropdown-content li:hover {
    background-color: #cc5200;
}

/* Show dropdown on hover */
.nav-item:hover .dropdown-content {
    display: block; /* Display dropdown when hovered */
}

/* To prevent overlap with the neighboring menu items */
nav ul {
    position: relative;
    display: flex;
}

    .news-card {
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            transition: transform 0.2s;
        }

        .news-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .news-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #343a40;
        }

        .news-date {
            color: #6c757d;
        }

        .news-description {
            height: 50px; /* Truncate to a specific height */
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                
                
                 
                <a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
                    <img src="images.jpg" alt="SVREC Logo" title="SVREC" style="height:35px; margin-right: 10px;" />
                    <div style="display: flex; flex-direction: column; line-height: 1;">
                        <span style="font-size: 18px; font-weight: bold; color: #1F2A79; text-transform: uppercase;">SVREC</span>
                        <span style="font-size: 12px; font-weight: bold; color: #1F2A79; text-transform: uppercase;">ALUMNI ASSOCIATION</span>
                    </div>
                </a>
                
                
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

               <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <nav class="mr-auto ml-lg-5">
                        
                    </nav>
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="members.html">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="newsroom.php">NewsRoom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events.html">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alumni fund.html">Alumni Fund</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alumni assist.html">Alumni Assist</a>
                            
                                <ul class="dropdown-content">
                                    <li><a href="#">Mentors</a></li><br>
                                    <li><a href="#">Send Query</a></li>
                                    <li><a href="#">Share Opportunities</a></li>
                                    <li><a href="#">Share Achievements</a></li>
                                    <li><a href="#">Invite Friends</a></li>
                                    <li><a href="#">Volunteer</a></li>
                                </ul>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->

                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->

    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> News Room</li>
                </ul>
            </div>
        </section>
    </div>

    <!-- News section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12"> <!-- Full width column for news articles -->
                <?php
                // Database connection
                $conn = new mysqli('localhost', 'root', '', 'test'); // Adjust as necessary
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch news data
                $sql = "SELECT Title, Post_Date, Description FROM newsroom ORDER BY Post_Date DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="card mb-4 news-card">'; // Card for each news item
                        echo '<div class="card-body">';
                        echo '<h5 class="news-title">' . htmlspecialchars($row['Title']) . '</h5>';
                        echo '<h6 class="news-date">Posted on ' . date('d M, Y', strtotime($row['Post_Date'])) . '</h6>';
                        echo '<p class="news-description">' . htmlspecialchars(substr($row['Description'], 0, 100)) . '...</p>'; // Truncated description
                        echo '<a href="news_detail.php?title=' . urlencode($row['Title']) . '" class="btn btn-primary">Read More</a>'; // Pass the title for fetching details
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No news found.</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
    <!--// News section -->

    <!-- footer -->
    

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
    <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <!-- Enlarged QR Code -->
                <img src="qrcode.jpeg" alt="Enlarged QR Code" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!--//courses-->
  <!-- footer -->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="navbar-brand" href="index.html">SVREC</a>
            </div>
            <p>To produce Competent Engineering Graduates with a strong base of Technical Knowledge and the Complementary Skills needed to be Successful Professional Engineers. To fulfill the vision by imparting Quality Technical Education to the Aspiring Students, by creating Effective Teaching/Learning Environment and providing State – of the – Art Infrastructure and Resources.</p>
            <div class="main-social-footer-29 mt-4">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="members.html">Members</a></li>
              <li><a href="newsroom.html"> NewsRoom</a></li>
              <li><a href="events.html"> Events</a></li>
              <li><a href="gallery.html"> Gallery</a></li>
              <li><a href="alumni fund.html">Alumni Fund</a></li>
              <li><a href="alumni assist.html">Alumni Assist</a></li>
              <li><a href="contact.html">Contact Us</a></li>            </ul>
          </div>
          
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Contact Info </h6>
            <p><strong>Address :</strong> SVR Engineering College, Ayyaluru, Nandyal, AP.</p>
            <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 23456799">08514-220301</a></p>
            <p><strong>Email :</strong> <a href="mailto:info@example.com">principal.am@jntua.ac.in

            </a></p>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //footer -->

  <!-- copyright -->
  <section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2021 SVREC. All rights reserved. Design by <a
          href="https://w3layouts.com/" target="_blank">
          SVREC Developers</a></p>

        <div class="col-lg-4 footer-list-29">
          <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
            <li><a href="#careers"> Careers</a></li>
            <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->

</body>

</html>
