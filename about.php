<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course.Co</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- owl carousel css -->
  <!-- <link rel="stylesheet" href="css/owl.carousel.min.css" /> -->
  <!-- font awesome icons -->
  <!-- <link rel="stylesheet" href="css/font-awesome.css" /> -->
  <!-- bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- dropdown css -->
  <!-- <link rel="stylesheet" href="css/dropdown.css" /> -->
</head>

<?php include 'navbar.php'?>

  <br>
  <br>
  <br>
  <br>
  <br>

 <!-- ########################################################################################## -->
 
 <?php
					// Check if the user is logged in, if not then redirect him to login page
					if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
				?>
 
  <!--  Section End -->

  <section class="features section-padding " id="features" data-scroll-index="1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>welcome To <span>course.co</span></h2>

            <br>
            <br>
            <div class="col-lg-12 col-md-7">
              <p style="text-align: center;">Course.Co is one stop destination in helping you recommend  specialization track and providing all the resources in the process.</p>

            </div>

            
          </div>
        </div>
      </div>

     

     
      <div class="row">
        <div class="owl-carousel features-carousel">
          <div class="feature-item">
            
            <div class="icon"><i class="fas fa-search"></i></div>
            
              <?php
                  // Check if the user is logged in, if not then redirect him to login page
                  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
                    <a href="login.php" style="font-size: 20px; font-weight: bold; color:black; text-decoration: none; "> Specialization Track Prediction</a>
                    
                  <?php else: ?>
                    <a style="font-size: 20px; font-weight: bold; color:black; text-decoration: none; " href="https://specializationtrackpredictor.herokuapp.com/"><h4>Specialization Track Prediction</h4></a>
                  <?php endif ?>

              <p><br>
                Take the test to find which specialization track in Information Technology Education fits in your interest.

              </p>
            </div>

            <div class="feature-item">
              <div class="icon"><i class="fas fa-search"></i></div>
              <a style="font-size: 20px; font-weight: bold; color:black; text-decoration: none;" href="description.php">Explore Specializations</a>
              <p><br>
                Explore more about the specialization track. Gain knowledge of what the track has to offer
              </p>
            </div>
            
            <div class="feature-item">
              <div class="icon"><i class="fas fa-search"></i></div>
              <a  style="font-size: 20px; font-weight: bold; color:black; text-decoration: none;" href="courses.php">Online Courses</a>
              <p><br>
                Learn from a different of sources, including useful educational links and study tools.
              </p>
            </div>
          
        </div>
      </div>

      
    </div>
  </section>


  
<!--  Section Start -->
<section class="faq section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2> About <span>Course.Co</span></h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="">
          <div id="accordion">
            <div class="accordion-item">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse-01">
                <h3>What is Course.Co</h3>
              </div>
              <div class="collapse show" id="collapse-01" data-parent="#accordion">
                <div class="accordion-body">
                  
                  <p>Course.Co is a web-based system designed for ITE students who are currently in the third-year college level. It is a recommendation system for major courses based on your interests and preferences. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse-02">
                <h3>What is the Purpose of Course.Co</h3>
              </div>
              <div class="collapse" id="collapse-02" data-parent="#accordion">
                <div class="accordion-body">
                  <p>  
            This recommender system is intended to assist students in identifying appropriate specialization track for them on Information Technology Education  There are also some features of this website where you can learn new skills
            and knowledge by using our services taking Online Courses and Exploring Specialization Services.</p>
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
      </div>
    </div>
                <br>
                <br>
                <br>
  </section>
  <!--  Section End -->
  
<!-- footer -->
<?php include 'footer.php'?>


  <!--  Section End -->






  <?php else: ?>
  <!--  Section End -->

   <section class="features section-padding " id="features" data-scroll-index="1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>welcome To <span>course.co</span></h2>

            <br>
            <br>
            <div class="col-lg-12 col-md-7">
              <p style="text-align: center;">Course.Co is one stop destination in helping you understand the specialization track for you and providing all the resources in the process.</p>

            </div>

            
          </div>
        </div>
      </div>

     
      <div class="row">
        <div class="owl-carousel features-carousel">
          <div class="feature-item">
            <div class="icon"><i class="fas fa-search"></i></div>
            <a style="font-size: 20px; font-weight: bold; color:black; text-decoration: none;" href="https://specializationtrackpredictor.herokuapp.com/"> Career Prediction</a>
            <p>
              Take the test to find which specialization track in Information Technology Education fits in your interest.

            </p>
          </div>
          <div class="feature-item">
            <div class="icon"><i class="fas fa-search"></i></div>
            <a style="font-size: 20px; font-weight: bold; color:black; text-decoration: none;" href="#">Explore Specializations</a>
            <p>
              Explore more about the specialization track. Gain knowledge of what the track has to offer
            </p>
          </div>
          <div class="feature-item">
            <div class="icon"><i class="fas fa-search"></i></div>
            <a  style="font-size: 20px; font-weight: bold; color:black; text-decoration: none;" href="#">Online Courses</a>
            <p>
              Learn from a different of sources, including useful educational links and study tools.
            </p>
          </div>
          
        </div>
      </div>

      
    </div>
  </section>
  <!-- Features Section End -->

<!-- Section Start -->
<section class="app-download section-padding" data-scroll-index="3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
        
          <div class="row ">
              
                <div class="col-lg-12 col-md-12">
                  <div class="app-download-item">
                  <i class="fas fa-user"></i>
                  <br>
                  <br>
                    <h4>Hi, <span style="font-weight: bold;"> <?php echo htmlspecialchars($_SESSION["username"]); ?>  </span>!</h4>
                    <h3><h6>Discover yourself!</h6></h3>
                  
                    Take the test to find which Specialization Track in <br>Information Technology Education fits in your interest.</p>
                    
                    <a href="https://specializationtrackpredictor.herokuapp.com/" class="btn btn-2">Get Started</a>
                  </div>
              </div>
          </div>

         
        </div>
        </div>


      
        
      </div>
     
    </div>
  </section>
  <!-- Section End -->




<!--  Section Start -->
<section class="faq section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2> About <span>Course.Co</span></h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="">
          <div id="accordion">
            <div class="accordion-item">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse-01">
                <h3>What is Course.Co</h3>
              </div>
              <div class="collapse show" id="collapse-01" data-parent="#accordion">
                <div class="accordion-body">
                  
                  <p>Course.Co is a web-based system designed for ITE students who are currently in the third-year college level. It is a recommendation system for major courses based on your interests and preferences. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header" data-toggle="collapse" data-target="#collapse-02">
                <h3>What is the Purpose of Course.Co</h3>
              </div>
              <div class="collapse" id="collapse-02" data-parent="#accordion">
                <div class="accordion-body">
                  <p>  
            This recommender system is intended to assist students in identifying appropriate specialization track for them on Information Technology Education  There are also some features of this website where you can learn new skills
            and knowledge by using our services taking Online Courses and Exploring Specialization Services.</p>
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
      </div>
    </div>
                <br>
                <br>
                <br>
  </section>
  <!--  Section End -->


                <br>
                <br>
                <br>


                
  <?php include 'footer.php'?>

 

        

		

  <?php endif ?>

	</body>
</html>
