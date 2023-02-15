<?php
    $pageTitle = "Student Login | CPS";

    // If submitted a form
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
                        <label for="student_id">Student ID (Ex. 2020-12345)</label>
                    </div>
                    <div>
                        <input type="text" name="student_id" id="student_id" size="50" maxlength="30" placeholder="Student ID" required>
                    </div>
                    
                    <div></div>

                    <button type="submit" name="submit" class="timein" value="Time In">Time In</button>
                    <button type="submit" name="submit" class="timeout" value="Time Out">Time Out</button>
                    
                    <div>
                        <p>Admin? <a href="admin.html">Login</a></p>
                    </div>
                </form>
            </span>
        </div>
        </div>
    </main>
</body>
</html>