<?php
    $pageTitle = "Admin Login | CPS";

    // If submitted a form
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Connect to the Database
        require_once("dconnection.php");

        $username = $_POST['student_id'];
        $password = $_POST['student_pw'];

        // Check if account exists
        $query = "SELECT * FROM table WHERE id = '$username' AND password = '$password';";
        $result = mysqli_query($con, $query);

        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // Include a head template
        include "head-login-template.php";
    ?>
</head>
<body> 
    <main>
        <div class="psd">

            <video autoplay loop muted play-inline class="layer-video">
                <source src="./video/lpu.mp4" type="video/mp4">
            </video>
    
        <div class="formlayout">
            <img src="./video/lpulogos2.gif" alt="login photo" class="login_photo">
            <span class="form">
                <form method="post" autocomplete="off">
                    <div>
                        <header>Log In<header>
                    </div>
                    <div>
                        <label for="student_id">Username</label>
                    </div>
                    <div>
                        <input type="text" name="student_id" id="student_id" size="50" maxlength="30" placeholder="Username" required>
                    </div>
                    <div>
                        <label for="student_id">Password</label>
                    </div>
                    <div>
                        <input type="password" name="student_pw" id="student_pw" size="50" maxlength="30" placeholder="Password" required>
                    </div>
                    
                    <div></div>

                    <button type="submit" name="submit" class="loginbutton" value="Log In">Log In</button>
                    
                    <div>
                        <p>Student? <a href="login.html">Login</a></p>
                    </div>
                </form>
            </span>
        </div>
        </div>
    </main>
</body>
</html>