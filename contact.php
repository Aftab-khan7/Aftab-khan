<?php

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];

$mailheader = "From :".$name."<".$email.">""<".$number.">\r\n";

$recipient = "keliparkhan@gmail.com";

mail($recipient, $message, $mailheader) or die("errer");

echo "

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Portfolio</title>

    <link rel="stylesheet" href="../Aftab-khan/css/style.css">
    <link rel="stylesheet" href="../Aftab-khan/css/responsive.css">

    <!--Box Icon Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--Remix icon link-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>
<body>
    
    <header>
        <a href="index.html" class="logo">Aftab Khan</a>
        <ul class="navlist">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutme.html">About Me !</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="skills.html">Skills</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

        <div class="nav-right">
            <a href="#" class="nav-btn">Hire Me!</a>
            <div class="bx-menu bx" id="menu-icon"></div>
        </div>
    </header>

    <section class="contact-section">
        <div class="back-page">
            <h1>Thanks for connecting me.<br> I will get back to you as soon as possible.</h1>
            <br>
            <p class="backpage-para">Go back to the <a href="index.html">Home Page</a></p>
           
        </div>
   

    </section>










    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
    <script type="text/javascript">
   
        let menu = document.querySelector('#menu-icon');
        let navlist = document.querySelector('.navlist');

        menu.onclick =()=>{
            menu.classList.toggle('bx-x');
            navlist.classList.toggle('open')
        }

    </script>


</body>
</html>

"

?>
