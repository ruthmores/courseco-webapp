<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  //  header("location: login.php");
    //exit;
//}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $new_password = $confirm_password = "";
$username_err=$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    } 
    else
    {
        $username = trim($_POST["username"]);
    }

    // Validate new password
    if(empty(trim($_POST["new_password"])))
    {
        $new_password_err = "Please enter the new password.";     
    }
    elseif(strlen(trim($_POST["new_password"])) < 6)
    {
        $new_password_err = "Password must have atleast 6 characters.";
    } 
    else
    {
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "Please confirm the password.";
    } 
    else
    {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password))
        {
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($username_err) && empty($confirm_password_err))
    {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_username);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                // Password updated successfully. Destroy the session, and redirect to login page
                // Store result
                mysqli_stmt_store_result($stmt);
                echo ('stored');
                
                // Check if username exists, if yes then verify password
                session_destroy();
                header("location: login.php");
                exit();
            }
            else
            {
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
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
                                            <h2 ><span>Reset Password</span></h2>
                                            <p>Please fill out this form to reset your password.</p>
                                            <hr>
                                            <br>
                                            </div>

                                   

                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        
                                        
                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-11">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <!-- <label><b>Username</b></label> -->
                                                            <input type="text"  placeholder="Username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                                        </div>
                                                      
                                                    </div> 
                                                </div>
                                               
                                            </div>


                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-11">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                             <!-- <label><b>New Password</b></label> -->
                                                            <input type="password" placeholder="New Password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                                                            <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                                                        </div>
                                                      
                                                    </div> 
                                                </div>
                                               
                                            </div>


                                            
                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-11">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                                                             <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                                        </div>
                                                      
                                                    </div> 
                                                </div>
                                               
                                            </div>


                                          

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <hr>
                                                            <input type="submit" class="btn-2  " value="Submit">
                                                            <a class="btn-2" href="login.php" style="text-decoration: none; background-color: #cad1f7; ">Cancel</a>
                                                        </div>   
                                                    </div>
                                                </div>
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


   
</body>

</html>


