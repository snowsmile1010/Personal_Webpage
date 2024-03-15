<?php
    $error = "";

    $sucessMessage = "";

    if($_POST) {
        if(!$_POST['email']) {
            $error .= "An email address is required so I can contact you. ";
        }

        if(!$_POST['subject']) {
            $error .= "Please enter a subject. ";
        }

        if(!$_POST['msg']) {
            $error .= "You haven't submitted a message. ";
        }
           

        if ($error !="") {
            echo '<script type="text/javascript">alert("Error: ' . $error . '");</script>'; 
           
        } else {
            $emailTo = "ccggcoding2024@gmail.com";
            $subject = "Portfolio site query from " . $_POST['name'] . ": " . $_POST['subject'];
            $content = $_POST['msg'];
            $headers = "From: " . $_POST['email'];

            if (mail($emailTo, $subject, $content, $headers)) {

                echo '<script type="text/javascript">alert("Thank you for submitting your message. I will get reply as soon as possible.");</script>';
            } else {
                echo '<script type="text/javascript">alert("Current Website does not allow sending emails.Please contact me at ccggcoding2024@gmail.com. Thanks!");</script>';
            }

        } // belongs to first if statement
     } // belongs to if $_POST

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sarah's Portfolio Site</title>

    <link href="normalize.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>

    <nav>
        <ul>
            <li><a href="#aboutme">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contactme">Contact Me</a></li>

        </ul>
    </nav>

    <!-- <section class="hero"> 
        <div class="container">
            <img src="images/File_Photo.png">
            <h1>Hi! I'm Sarah! </h1>
        </div>
    </section>  -->

    <section id="aboutme" class="aboutme">
        <!-- <h2>About me</h2> -->
        <div class="aboutme-section">
            <div class="img">
                <div class="aboutme-image"></div>
            </div>
            <div class="aboutme-text">
                <h1>Hi, I'm Sarah. I'm a BIG fun of web development.</h1>
                <p>Almost a decade ago I was busy teaching math to teenagers at three schools in London and Cambridge.
                    Since I’m a bit of a coding geek, I also built websites on the side for friends and family.
                    I soon learned that web development was a very lucrative career choice, so I gave up my successful
                    (and sometimes stressful) job as a teacher to build websites. Today, I couldn’t be happier with that
                    decision.</p>

                <p>After building websites for about seven years, I noticed a lot of people struggling to learn how to
                    code. I wanted others to have the same freedoms that I enjoyed, so I started teaching web
                    development</p>

                <p>I'm familiar with HTML5, CSS3, JavaScript, PHP7 and MySQL. Checkout some of the projects I've done
                    below.</p>

            </div>
        </div>
    </section>

    <section id="projects">
        <div class="project">
            <h2>Projects</h2>
            <div class="projects">

                <div class="earth-project">
                    <div class="text">
                        <h3 class="project-name">Earth Facts</h3>
                        <div class="content">
                            <p>A HTML project about some facts about the earth.</p>
                        </div>

                        <a class="button" href="../1-html/htmlproject.html" target="_bank">View Project</a>
                    </div>

                </div>

                <div class="bbc-project">
                    <div class="text">
                        <h3 class="project-name">BBC News Clone</h3>
                        <div class="content">
                            <p>This project is a clone of the BBC news website from the Web Dev 2.0 Course.</p>
                        </div>

                        <a class="button" href="https://eco-cdn.co.uk/webdeveloper2.0/content/2-css/bbc.html"
                            target="_bank">View Project</a>
                    </div>

                </div>

                <div class="earth-project">
                    <div class="text">
                        <h3 class="project-name">Earth Facts</h3>
                        <div class="content">
                            <p>A HTML project about some facts about the earth.</p>
                        </div>

                        <a class="button" href="../1-html/htmlproject.html" target="_bank">View Project</a>
                    </div>

                </div>

                <div class="earth-project">
                    <div class="text">
                        <h3 class="project-name">Earth Facts</h3>
                        <div class="content">
                            <p>A HTML project about some facts about the earth.</p>
                        </div>

                        <a class="button" href="../1-html/htmlproject.html" target="_bank">View Project</a>
                    </div>

                </div>



            </div>
        </div>
    </section>


    <section id="contactme" class="contact">
        <h2>Contact</h2>
        <p>Use this form to get in touch. I would love to hear from you!</p>
        <?php $error = "";$successMessage = ""; ?>
        <div id="error">
            <?php echo $error . $successMessage; ?>
        </div>

        <form class="contact-form" method='post'>

            <div class="contact-details">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Yourname">

                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Reason for your message">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your email address">

            </div>


            <div class="message">
                <label for="msg">Message</label>
                <textarea id="msg" name="msg" rows="15"></textarea>
                <button type="submit">Submit</button>
            </div>

        </form>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
            </script>

        <script type="text/javascript">
            $("form").submit(function (e) {
                let error = "";

                if ($("#name").val() == "") {
                    error += "Please enter a preferred name.<br>";
                }

                if ($("#subject").val() == "") {
                    error += "Please enter a subject.<br>";
                }

                if ($("#email").val() == "") {
                    error += "An email address is required so I can contact you.<br>";
                }

                if ($("#msg").val() == "") {
                    error += "You haven't submitted a message.<br>";
                }


                //test if there was an error or not

                if (error != "") {
                    $("#error").html('<div class="alert"' +
                        'role="alert">' + error + '</div>');

                    return false;
                }
                else {  //no errors!
                    return true;
                }//end if-else

            });
        </script>





    </section>

    <footer>
        <div class="container">
            <div class="copyright">
                This site &copy; 2024 Sarah Guo
            </div>
            <!-- <div class="social-media">

                <a href="https://www.facebook.com"><i class="fa fa-facebook-official"></i></a>

                <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>

            </div> -->

        </div>

    </footer>

</body>

</html>