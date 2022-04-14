<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'navbar.php'?>
<body>


  <!-- App Download Section Start -->
  <section class="app-download section-padding" data-scroll-index="3">
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Specialization Tracks <span></span></h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-bottom: 30px;">
        <div class="col-lg-6 col-md-6">
          <div class="app-download-item">
            <img style="border-radius: .4rem;" src="img/dev.jpg" alt="">
            <h3>Web and Mobile Development</h3><hr>
            <p style="text-align: justify;">This specialization track offers a high-level overview of the infinite possibilities available to creatives who seek to use the web as their medium of choice.</p>
            <a href="webdev.php" class="btn btn-2">read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="app-download-item">
           
            <img style="border-radius: .4rem;" src="img/design.jpg" alt="">
            <h3>Animation and Motion Design</h3><hr>
            <p style="text-align: justify;">This specialization track introduces basic principles of digital drawing, perspective, and sketching techniques using various media, to depict a variety of subjects.</p>
            <a href="animation.php" class="btn btn-2">read more</a>
          </div>
        </div>
        
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
          <div class="app-download-item">
          <img style="border-radius: .4rem;" src="img/smp.jpg" alt="">
            <h3>Service Management Program</h3><hr>
            <p style="text-align: justify;"> The specialization trackbuilds the students’ understanding of, and basic competencies in, effective communication in the workplace.
                 It introduces students to key concepts of business communication.</p>
            <a href="smp.php" class="btn btn-2">read more</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="app-download-item">
          <img style="border-radius: .4rem;" src="img/ai.jpg" alt="">
            <h3>Intelligent System</h3><hr>
            <p style="text-align: justify;">This specialization track introduces students to the area of artificial intelligence (AI) his course offers a high-level overview of the infinite possibilities available to creatives who seek to use the web as their medium of choice.</p>
            <a href="intelligent.php" class="btn btn-2">read more</a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- Section End -->


<!-- footer -->
<?php include 'footer.php'?>
    
</body>
</html>