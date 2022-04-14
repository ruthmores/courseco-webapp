<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  

<?php include 'navbar.php'?>



<!-- ########################################################################################### -->


 <!-- ########################################################################################## -->
  <!-- Home Section Start -->
  <section class="home d-flex align-items-center" id="home" data-scroll-index="0">
  
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <div class="home-text">
            <h1>SPECIALIZATION TRACK RECOMMENDATION SYSTEM</h1>
            <?php
				// Check if the user is logged in, if not then redirect him to login page
				if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
                    <p> Discover yourself <br> Take the test to find which specialization track in Information Technology Education fits in your interest.</p>
                    <div class="home-btn"> <a href="login.php"  class="btn btn-1">Get Started</a></div>
               
                 <?php else: ?>
					<p class="lead white-text" style="margin-left: 5px;" >Hi, <b style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["username"]); ?></b> !<br>Discover yourself,<br><br>
					<i>Take the test to find which specialization track in Information Technology Education fits in your interest.</i></p>
					<a class="home-btn btn btn-1" href=" https://specializationtrackpredictor.herokuapp.com/">Get Started!</a>
            <?php endif ?>     
          </div>
        </div>
        <div class="col-md-5 text-center">
          <!-- <div class="home-img">
            <div class="circle"></div>
            <img src="img/app-screenshots/1.png" alt="shala app" /> 
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Home Section End -->


  
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
  <!--  Section End -->





<!-- footer -->
<?php include 'footer.php'?>








 <!-- ########################################################################################## -->

 <!-- ########################################################################################## -->
 <!-- ########################################################################################## -->
  <!-- ##############################################
 <a href='https://www.freepik.com/vectors/creative'>Creative vector created by pikisuperstar - www.freepik.com</a> 
  ############################################ -->

        

		



	</body>
</html>
