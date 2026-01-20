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
        <title>RTugeau | Home</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <style>
        body {
            background-color: rgb(32,32,32);
            color: white;
        }

        .light_mode {
            background-color: white;
            color: black;
        }

        .light_mode #container {
            color: black;
        }

        .light_mode #container2, 
        .light_mode #container2 p {
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
            <button class="header-button" onclick="window.location.href='home.php';"><h1>[Riley Tugeau]</h1></button>
            <button class="button-60" role="button" id="projects" onclick="window.location.href='projects.php';">Projects</button>
            <button class="button-60" role="button" id="about" onclick="window.location.href='about.php';">About</button>
            <button class="button-60" role="button" id="resume" onclick="window.location.href='resume.php';">Resume</button>
            <button class="button-60" role="button" id="contact" onclick="window.location.href='contact.php';">Contact</button>
            <button class="button-60" role="button" onclick="dark_light_mode()">&#127769</button>
        </div>
        <div id="container2">
            <h2> Hello World! </h2>
            <?php
            echo "<p>Happy " . date("l") . "!</p>";
            ?>
            <p>As a recent graduate of the University of Mary Washington in Computer Science, I seek to learn my identity in todays tech-driven world and help find answers to tomorrows questions.
            <button class="button-59" role="button" id="projects" onclick="window.location.href='about.php';">Learn More</button>
            <img class="rt" src="images/RT.jpg" style="width:19vw; height:19vw;" >
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
    </body>
</html>