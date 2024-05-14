<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta name="Description" content="تحميل برنامج فوتوشوب بكل اصداراته مجانا و مفعل ">
    <meta name="keywords" content="photoshop , adobe , free , فوتوشوب ">
    <meta name="author" content="Hafsaoui Abderrahmen">
    <link rel="stylesheet" href="loginstyle2.css">
    <link href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="x-icon" href="freepe.png">
    <script src="https://kit.fontawesome.com/eecc189c91.js" crossorigin="anonymous"></script>
    <title>FreePr | Account</title>
<head>

</head>
<body>
    <section class="bb">
        <div class="main-width">
    <header>
        <div class="logo">
            <h2><a href="home.php">FreePr</a></h2>
        </div>

        <nav>
            <ul>
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="#">Windows</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Linux</a></li>
                <li><a href="#">Contact</a></li>
                <?php
                if (isset($_SESSION["useruid"])){
                    echo "<li class='btn'><a href='login.php'> <i class='fa-solid fa-user'></i> Your Account</a></li>";
                }

                else {
                    echo "<li class='btn'><a href='login.php'> <i class='fa-solid fa-user'></i> Your Account</a></li>";
                }
                
                ?>
            </ul>
        </nav>
    </header>



    <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="">
        <h2>Sign-in</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Email or Username</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
      <form action="">
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button type="submit">Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>  
    </div>
  </div>


</section>
<script src="lscript.js"></script>
  <!-- code by helpme_coder -->
</body>


</html>