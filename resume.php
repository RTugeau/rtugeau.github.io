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
        <title>RTugeau | Resume</title>
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

        .light_mode #resume_container,
        .light_mode #resume_container p, 
        .light_mode #resume_container h2, 
        .light_mode #resume_container h3, 
        .light_mode #resume_container ul, 
        .light_mode #resume_container div {
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
        <div id="resume_container">
            <p>A downloadable version of my resume is available <a href="Resume Riley Tugeau.pdf" download>here</a>.</p>
            <div class="divider">Computer Science Skills</div>
            <ul>
                <li>Java</li>
                <li>Python</li>
                <li>C</li>
                <li>Web Development (HTML/PHP)</li>
                <li>Database Management</li>
            </ul>
            <div class="divider">Education</div>
            <h2>University of Mary Washington - Fredericksburg, Virginia</h2>
            <h3>JAN 2021 - DEC 2023</h3>
            <ul>
                <li>B.S. in Computer Science</li>
                <li>Magna Cum Laude</li>
                <li>President's List (Spring 2022, Fall 2023)</li>
            </ul>
            <h2>Virginia Peninsula Community College - Williamsburg, Virginia</h2>
            <h3>AUG 2017 - MAY 2020</h3>
            <ul>
                <li>A.S. in Social Science</li>
                <li>Magna Cum Laude</li>
            </ul>
            <h2>Jamestown High School - Williamsburg, Virginia</h2>
            <h3>SEP 2013 - JUN 2017</h3>
            <ul>
                <li>Gold Card for A-B Honor Roll</li>
                <li>Academic Awards: Geometry, Algebra</li>
            </ul>
            <div class="divider">Work Experience</div>
            <h2>Customer Service Associate - Food Lion, Williamsburg, Virginia</h2>
            <h3>2018 - Present</h3>
            <p>Current employer, where I began as cashier, and was quickly promoted to customer service where I handle accounting duties and supervise front-end customers and associates.</p>
            <h2>Lemonade Stand Operator - Ben & Jerry's, Willaimsburg, Virginia</h2>
            <h3>2013 - 2015, 2021 - 2023</h3>
            <p>My first job, where I ran a cart in the Premium Outlet Mall (Willaimsburg, VA) for Ben & Jerry's selling lemonade to passing shoppers. Worked carts at bi-yearly craft shows starting in 2021.</p>
            <h2>Busser/Dishwasher - Five Forks Cafe, Williamsburg, Virginia</h2>
            <h3>2013 - 2017</h3>
            <p>Earned position here through owner of Ben & Jerry's. Bussed tables and washed dishes through my high school years.</p>
            <div class="divider">Recreational Activities</div>
            <h2>President - UMW Club Baseball</h2>
            <h3>2021 - 2023</h3>
            <p>Joined the club at the University of Mary Washington in 2021, and took over role as club president later that year. Helped rebuild the club after being disbanded in 2020 due to lack of participants. Taught fundamentals to new players and recruited players with baseball backgrounds to help grow club.</p>
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