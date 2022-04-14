<?php
// Initialize the session https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:default.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: default.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        
        .wrapper{ 
            
            border: 1px solid transparent;
            box-shadow: var(--shadow-black-100);
            border-radius: 10px;
            padding: 10px;
        }
    </style>
 
</head>
<body>

<?php include 'navbar.php'?>

<br>
<br>
<br>
<br>
<!-- #################################################################################################################################################### -->
<!-- ######################################################################################################################################################## -->

<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- <div class="section-title">
              <h2> <span>Login</span></h2>
            </div> -->
            <!-- <div class="app-download-item" style="background-color:#f7f7f7;" > -->
                <!-- <div class="container"> -->


                

                        <div class="col-md-12">
                            <!-- <div class="row "> -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="contact-form  wrapper">
                                            <div class="col-md-12">
                                            <br>
                                            <br>
                                            <h2>Login</h2>
                                            <p>Please fill in your credentials to login.</p>
                                            <hr>
                                            <br>
                                            </div>

                                        

                                    <?php 
                                        if(!empty($login_err)){
                                            echo '<div class="alert alert-danger">' . $login_err . '</div>';
                                        }        
                                    ?>

                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">         
                                        
                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-11">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <!-- <label><b>Username</b></label> -->
                                                            <input type="text"   placeholder="Username"name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                                        </div>
                                                      
                                                    </div> 
                                                </div>
                                               
                                            </div>


                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-11">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                        <input type="password"  placeholder="Password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                                        </div>
                                                      
                                                    </div> 
                                                </div>
                                               
                                            </div>


                                          

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                             <input type="submit" class="btn-2" value="Login">
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>

                                            <div class="col-md-12">
                                                <h6>Don't have an account? <a href="register.php" style="color:#7857fe;">Sign up now</a>.</h6>
                                                <h6>Forgot Password? <a href="reset.php" style="color:#7857fe;">Click here</a>.</h6>
                                            </div>
                                            

                                            
                                    </form>
                                </div>
                                    
                                </div>
                            <!-- </div> -->
                        </div>
               
                <!-- </div> -->
            </div>
        </div>
        </div>
    </div>
</section>


        

<!-- ###################################################################################################################################################### -->
<!-- ###################################################################################################################################################### -->

   

    <!-- ########################################################################################################################################################### -->
</body>
</html>

