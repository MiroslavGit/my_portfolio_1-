<?php

include_once '../../server/php/database.php';

?>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="Hire Professional Front End Developer. Building animations and interactive experiences, hi-end solutions, website maintenance.">



    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="../../server/css/vertical_header.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../server/css/style_index.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../server/css/contact.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../server/css/transition.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../../server/css/media_query_mobile.css?<?php echo time(); ?>">




    <title>M | Front End Developer</title>
</head>

<body>
    <header>
        <div class="logo_part">
            <a href="../../../index.php"> <img src="../../server/images/favpng_logo-drawing-m-02csf-brand.png"
                    alt="logo" title="logo"> </a>
            <h1>Miroslav</h1>
            <h3>Web Developer</h3>
        </div>
        <nav>
            <a class="link" href="about.html">About</a>
            <a class="link" href="my_skills.html">My Skills</a>
            <a class="link" href="my_work.html">My Work</a>
            <a class="link" href="contact.php">Contact</a>
        </nav>
        <div class="social">
            <a href="https://www.linkedin.com/in/miroslav-hanisko-b1abb8223/" target="_blank" alt="linkedin"> <i
                    class="fa fa-linkedin"></i></a>
            <a href="https://github.com/MiroslavGit" target="_blank"><i class="fa fa-github" alt="github"></i> </a>
            <a href="https://www.facebook.com/miroslav.hanisko/" target="_blank" alt="instagram"><i
                    class="fa fa-instagram"></i></a>
            <a href="https://www.instagram.com/ten_mirek_/" target="_blank" alt="facebook"> <i
                    class="fa fa-facebook"></i></a>

        </div>
    </header>

    <div class="mobile_menu_moja_uprava">
        <div class="menu-button">
            <div class="menu-button-line"></div>
            <div class="menu-button-line"></div>
            <div class="menu-button-line"></div>
        </div>
        <nav class="menu">
            <div class="menu-branding"></div>
            <ul class="menu-nav">
                <li class="nav-item">
                    <a class="secondery-color" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a href="my_skills.html">My Skills</a>
                </li>
                <li class="nav-item">
                    <a href="my_work.html">My Work</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="main">
        <div class="contact ">
            <div class="popis_form ">

                <div class="popis ">
                    <div class="druhy_riadok">
                        <span class="pismeno ">C</span>
                        <span class="pismeno ">o</span>
                        <span class="pismeno ">n</span>
                        <span class="pismeno ">t</span>
                        <span class="pismeno ">a</span>
                        <span class="pismeno ">c</span>
                        <span class="pismeno " style="color: white; ">t</span>
                        <span class="pismeno medzera " style="margin-left: 30px; "></span>
                        <span class="pismeno ">m</span>
                        <span class="pismeno ">e</span>
                    </div>
                </div>

                <p class="popis_contact ">
                    I’m interested in freelance opportunities – especially ambitious or large projects. However, if you
                    have other request or question, don’t hesitate to use the form.
                </p>

                <!--Ak chcem odosielať na email tak zmenim action="https://formsubmit.co/miroslav2022@gmail.com"  -->
                <form action="https://formsubmit.co/miroslav2022@gmail.com" method="POST">
                    <input type="hidden" name="_template" value="box">
                    <div class="name_email ">
                        <input class="name " type="text " id="name " name="name " placeholder="Name "><br>
                        <input class="email " type="email " id="email " name="email " placeholder="Email "><br>
                    </div>
                    <input class="subject" type="text " id="subject " name="subject " placeholder="subject "><br>
                    <textarea class="message" class="input " type="text " name="message "
                        placeholder="Message "></textarea>

                    <input type="hidden" name="_next" value="http://miroslav.great-site.net/client/pages/contact.php">
                    <input type="hidden" name="_captcha" value="false">
                    <div class="button_div ">
                        <button class="button_submit" name="btn" type="submit">Odoslať</button>
                    </div>
                </form>
            </div>

            <?php
            /*  Send data to database*/
            $name = "";
            $email = "";
            $subject = "";
            $message = "";

            if (isset($_POST['btn'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
            }

            $sql = "INSERT INTO contacts (name, email, subject, message, razitko) 
            VALUES ('$name', '$email' , '$subject' , '$message', NOW())";

            if (!isset($_POST['name'])) {
                echo "";
            } else {
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);
            }

            ?>

            <div class="map_contact ">
                <div class="mapouter ">
                    <div class="gmap_canvas "><iframe width="800 " height="800 " id="gmap_canvas "
                            src="https://maps.google.com/maps?q=J%C3%A1novce%20pri%20Poprade&t=&z=11&ie=UTF8&iwloc=&output=embed "
                            frameborder="0 " scrolling="no " marginheight="0
                            " marginwidth="0 "></iframe><br>
                        <style>
                        .mapouter {
                            position: relative;
                            text-align: left;
                            height: 1000px;
                            width: 1000px;
                        }
                        </style>
                        <a href="https://www.embedgooglemap.net "></a>
                        <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 900px;
                            width: 1000px;
                        }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script defer src="../../server/js/script.js?<?php echo time(); ?>"></script>
</body>

</html>