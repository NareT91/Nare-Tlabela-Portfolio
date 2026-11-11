
<?php
$pageTitle = "About Me | Nare Tlabela";
include 'includes/header.php';
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
<main class="about-page">

    <section class="page-heading">
        <p class="intro">GET TO KNOW ME</p>
        <h1>About <span>Me</span></h1>
        <p>A little about my background, journey and passion for technology.</p>
    </section>

    <section class="about-container">

        <div class="about-image">
            <img src="images/profile.jpg" alt="Nare Tlabela">
        </div>

        <div class="about-content">
            <h2>I'm a Software Developer</h2>

            <p>
                I am a Computer Systems Engineering graduate with a passion
                for software development and technology. I enjoy creating
                practical digital solutions that solve real-world problems.
            </p>

            <p>
                My experience includes front-end development, web
                technologies, system support and software development.
                I enjoy learning new technologies and improving my skills
                through practical projects.
            </p>

            <p>
                I believe in continuous learning, problem-solving and
                building technology that creates meaningful experiences
                for people.
            </p>

            <a href="projects.php" class="primary-btn">Explore My Projects</a>
        </div>

    </section>

    <section class="about-interests">
        <h2>What Drives Me</h2>

        <div class="interest-grid">
            <article class="interest-card">
                <h3>Software Development</h3>
                <p>Building useful applications and digital solutions.</p>
            </article>

            <article class="interest-card">
                <h3>Continuous Learning</h3>
                <p>Exploring new technologies and expanding my skills.</p>
            </article>

            <article class="interest-card">
                <h3>Problem Solving</h3>
                <p>Using technology to address practical challenges.</p>
            </article>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
