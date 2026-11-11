
<?php
$pageTitle = "Education | Nare Tlabela";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="navbar">
    <a href="index.php" class="logo">NT<span>.</span></a>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="education.php" class="active">Education</a>
        <a href="experience.php">Experience</a>
        <a href="projects.php">Projects</a>
        <a href="skills.php">Skills</a>
        <a href="contact.php" class="hire-btn">Contact Me</a>
    </nav>
</header>

<main class="education-page">
    <section class="page-heading">
        <p class="intro">MY ACADEMIC BACKGROUND</p>
        <h1>Education & <span>Qualifications</span></h1>
        <p>My academic journey in Computer Systems Engineering.</p>
    </section>

    <section class="education-container">

        <article class="education-card">
            <span class="education-year">2025 – 2026</span>
            <h2>Advanced Diploma in Computer Systems Engineering</h2>
            <h3>Tshwane University of Technology</h3>
            <p>
                Completed academic requirements for the Advanced Diploma
                in Computer Systems Engineering. Awaiting official results.
            </p>
            <span class="education-status">Completed academically</span>
        </article>

        <article class="education-card">
            <span class="education-year">2020</span>
            <h2>National Diploma in Computer Systems Engineering</h2>
            <h3>Tshwane University of Technology</h3>
            <p>
                Developed a foundation in computer systems, programming,
                electronics, networking and technical problem-solving.
            </p>
            <span class="education-status">Completed</span>
        </article>

    </section>
</main>


<?php include 'includes/footer.php'; ?>


<script src="js/script.js"></script>
</body>
</html>
