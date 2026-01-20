<?php
    session_start();
    $themeClass = "";
    if(isset($_SESSION["theme"]) && $_SESSION["theme"] === 'light') {
        $themeClass = "light_mode";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RTugeau | About</title>
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

        .light_mode #about_container,
        .light_mode #about_container p, 
        .light_mode #about_container h2 {
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
        <div id="about_container">
            <h2>About Me</h2>
            <p>My name is Riley Tugeau (Last name pronounced "2-Go"), and I'm a 26-year old computer scientist from Williamsburg, Virginia. I'm hard-working, motivated, and always try my best to have a smile on my face, and keep a smile on the faces of those around me. I have an identical twin brother (Christopher), and a younger brother (Coady). I love baseball and all things baseball, including my Baltimore Orioles. My hobbies include collecting baseball cards, playing baseball, and coding.</p>
            <h2>My Computer Science Story</h2>
            <p>Everyone in computer science has a story of how they got into the great big technological world of computer science, and here's mine. Coming out of high school, I was faced with uncertainty, but knew I wanted to go to college, and had the resources and people surrounding me to be able to do so. I attended Thomas Nelson (now Virginia Peninsula) Community College and received an Associates Degree in Social Sciences. I was accepted to the University of Mary Washington during the summer of 2020, but didn't attend until 2021 due to the COVID-19 pandemic. Again, I headed into another institution uncertain of my future and went in undeclared. My love for baseball statistics led me to take Calculus during my first semester to see if a math major might be right for me. I also took Intro to Computer Science to complete the digital intensive course required as part of my general education classes. After managing a C in online Calculus, and acing the Computer Science intro course, my mind was made up. Three years later, I recieved my Bachelor's degree in Computer Science, and I couldn't be happier with the decision I made, and the amazing people I met along the way.</p>
        </div>
        <script>
            function dark_light_mode() {
                const body = document.body;
                body.classList.toggle("light_mode");

                const theme = body.classList.contains("light_mode") ? "light" : "dark";

                fetch("theme.php", {
                    method: "POST",
                    headers: {
                        "Content-Type" : "application/x-www-form-urlencoded"
                    },
                    body: "theme=" + theme
                });
            }
        </script>
    </body>
</html>