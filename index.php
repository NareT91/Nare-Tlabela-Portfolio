
<?php
$pageTitle = "Nare Tlabela | Software Developer";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Nare Tlabela's professional portfolio. Software Developer and Computer Systems Engineer.">

    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation -->
    <header class="navbar">

        <a href="index.php" class="logo">NT<span>.</span></a>

        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="education.php">Education</a>
            <a href="experience.php">Experience</a>
            <a href="projects.php">Projects</a>
            <a href="skills.php">Skills</a>
            <a href="contact.php" class="hire-btn">Contact Me</a>
        </nav>

    </header>

    <!-- Home Page -->
    <main>

        <section class="hero" id="home">

            <div class="hero-content">

                <p class="intro">HELLO, I'M</p>

                <h1>Nare <span>Tlabela</span></h1>

                <h2 class="animated-title">
                    <span id="typing-text"></span>
                    <span class="cursor">|</span>
                </h2>

                <p class="hero-description">
                    I build practical digital solutions through technology,
                    creativity and problem-solving.

                    Passionate about software development, creating
                    meaningful user experiences and continuously
                    improving my technical skills.
                </p>

                <div class="hero-buttons">

                    <a href="projects.php" class="primary-btn">
                        Explore My Work
                    </a>

                    <a href="documents/Nare-Tlabela-CV.pdf"
                       class="secondary-btn" download>
                        Download CV
                    </a>

                </div>

                <div class="social-links">

                    <a href="https://github.com/NareT91"
                       target="_blank" rel="noopener noreferrer">
                        GitHub
                    </a>

                    <a href="https://www.linkedin.com/"
                       target="_blank" rel="noopener noreferrer">
                        LinkedIn
                    </a>

                </div>

            </div>

            <div class="hero-image">

                    <img src="/images/profile.jpg" alt="Portrait of Nare Tlabela">

                <span class="floating-dot dot-one"></span>
                <span class="floating-dot dot-two"></span>

            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <p>
            &copy; <?php echo date("Y"); ?>
            Nare Tlabela. All rights reserved.
        </p>
    </footer>

    <script src="js/script.js"></script>

</body>
</html>
