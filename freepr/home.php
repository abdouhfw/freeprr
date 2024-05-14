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
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com">
    <link rel="shortcut icon" type="x-icon" href="freepe.png">
    <script src="https://kit.fontawesome.com/eecc189c91.js" crossorigin="anonymous"></script>
    <title>FreePr</title>
<head>

</head>
<body>
    <section class="bb">
        <div class="babay">
            <img src="khra.png" alt="FreePr">
        </div>

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
    <div class="content">
        <div class="text">
            <h5>#1 The number one site</h5>
            <p>Download all Windows, Android and Mac programs and systems with cracks with direct and fast linksM<br>
            and support completion with the ability to download cracks separately for all programs.</p>
                <a class="princ" href="#">Explore programms</a>
                <a href="#" class="cta"><i class="fa-brands fa-searchengin"></i> Search for a specific programme</a>
        </div>
    </div>
</div>
</section>

</body>


</html>