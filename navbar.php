
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Course.Co</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- owl carousel css -->
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <!-- font awesome icons -->
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/dropdown.css" />
  <!-- courses css -->
   <link rel="stylesheet" href="css/course.css" />
</head>

<body>




  <!-- Navbar Start -->
  <header>
    <a href="default.php" class="logo">Course.Co</a>
    <div class="navigation">
      <ul class="menu">
       
        <div class="close-btn navbar-toggler"> </div>

        <?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>
        <li class="menu-item active"><a class="menu-link"   href="default.php">Home</a></li>
        
        <li class="menu-item"><a  class=" menu-link"  href="about.php">About</a></li>
        <li class="menu-item"><a href="register.php">Register</a></li>
        <li class="menu-item"><a href="login.php">Login</a></li>

        <?php else: ?>
          <li class="menu-item active"><a class="menu-link"  href="default.php">Home</a></li>
          <li class="menu-item"><a  class=" menu-link"  href="about.php">About</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#">Services <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu ">
              <li class="sub-item"><a href="https://specializationtrackpredictor.herokuapp.com/" >Specilization Track Prediction</a></li>
              <li class="sub-item"><a href="courses.php" >Online Courses</a></li>
              <li class="sub-item"><a href="description.php" >Explore Specilization</a></li>
            </ul>
          </li>
          <li class="menu-item"><a href="logout.php">Log out</a></li>
          

        
          <!-- <div class="navigation">
              <ul class="menu">
                <li class="menu-item active"><a class="menu-link"  data-scroll-nav="0" href="default.php">Home</a></li>
                <li class="menu-item"><a  class=" menu-link" data-scroll-nav="1" href="about.php">About</a></li>
                <li class="menu-item">
                  <a class="sub-btn" href="#">Services <i class="fas fa-angle-down"></i></a>
                  <ul class="sub-menu ">
                    <li class="sub-item"><a href="#">Specilization Track Prediction</a></li>
                    <li class="sub-item"><a href="#">Online Courses</a></li>
                    <li class="sub-item"><a href="#">Explore Specilization</a></li>
                  </ul>
                </li>
                
                <li class="menu-item"><a href="logout.php">Log out</a></li>
              </ul>
          </div> -->
          <?php endif ?>
       
        
      
        
      </ul>
    </div>
    <div class="menu-btn">
       <!-- Toggler/collapsibe Button -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </header>


  

  <!-- jquery js -->
  <script src="js/jquery.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- owl carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- ScrollIt js -->
  <script src="js/scrollIt.min.js"></script>
  <!-- main js -->
  <script src="js/main.js"></script>
    

</body>

</html>