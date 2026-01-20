<?php
session_start();
$themeClass = "";
if(isset($_SESSION['theme']) && $_SESSION['theme'] === 'light') {
    $themeClass = "light_mode";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RTugeau | Contact</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <style>
        body {
            background-color: rgb(32,32,32);
            color: white;
        }

        .light_mode, body.light_mode p {
            background-color: white;
            color: black;
        }

        .light_mode #container {
            color: black;
        }

        .light_mode #contact_container,
        .light_mode #contact_container p, 
        .light_mode #contact_container h2, 
        .light_mode #contact_container h3 {
            color: black;
        }

        .light_mode button {
            background-color: white;
            color: black;
        }

        .header-button h1 {
            color: inherit;
        }

        body, button {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        </style>
    </head>
    <body class="<?php echo $themeClass; ?>">
        <div id="container">
            <button class="header-button" onclick="window.location.href='home.php';"><h1>[Riley Tugeau]<h1></button>
            <button class="button-60" role="button" id="projects" onclick="window.location.href='projects.php';">Projects</button>
            <button class="button-60" role="button" id="about" onclick="window.location.href='about.php';">About</button>
            <button class="button-60" role="button" id="resume" onclick="window.location.href='resume.php';">Resume</button>
            <button class="button-60" role="button" id="contact" onclick="window.location.href='contact.php';">Contact</button>
            <button class="button-60" role="button" onclick="dark_light_mode()">&#127769</button>
        </div>
        <div id="contact_container">
            <h2>Contact Me!</h2>
            <p>Let's get in touch! Find my contact info below.</p>
            <img id="icons" src="images/envelope icon.png">
            <h3>rtugeau@gmail.com</h3>
            <img id="icons" src="images/phone icon.png">
            <h3>(757)-298-1001</h3>
            <img id="icons" src="images/linkedin icon.png">
            <h3><a href="https://www.linkedin.com/in/riley-tugeau-34891222b/">https://www.linkedin.com/in/riley-tugeau-34891222b/</a></h3>
            <img id="icons" src="images/instagram icon.png">
            <h3><a href="https://www.instagram.com/rtugeau/">https://www.instagram.com/rtugeau/</a></h3>
            <img id="icons" src="images/facebook icon.png">
            <h3><a href="https://www.facebook.com/riley.tugeau">https://www.facebook.com/riley.tugeau</a></h3>
        </div>
        <script>
            function dark_light_mode() {
                const body = document.body;
                body.classList.toggle("light_mode");

                const theme = body.classList.contains("light_mode") ? "light" : "dark";

                fetch("theme.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "theme=" + theme
                });
            }
        </script>
        <p>Icon Attributes <a href="attributes.php">here</a></p>
    </body>
</html>