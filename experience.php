
<?php
$pageTitle = "Experience | Nare Tlabela";
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

<main class="experience-page">

    <section class="page-heading">
        <p class="intro">MY PROFESSIONAL JOURNEY</p>
        <h1>Work <span>Experience</span></h1>
        <p>My professional experience, responsibilities and development.</p>
    </section>

    <section class="experience-timeline">

        <article class="experience-card">
            <div class="experience-date">September 2024 – Present</div>

            <div class="experience-details">
                <h2>Administrative Assistant</h2>
                <h3>Pablo Pearson</h3>

                <p>
                    Supporting daily administrative operations and helping
                    maintain organised and efficient office processes.
                </p>

                <ul>
                    <li>Assist with administrative and office tasks.</li>
                    <li>Maintain records and organise documentation.</li>
                    <li>Support communication and day-to-day operations.</li>
                </ul>

                <span class="experience-category">Administration</span>
            </div>
        </article>

        <article class="experience-card">
            <div class="experience-date">October 2022 – May 2024</div>

            <div class="experience-details">
                <h2>Front-End Developer Intern</h2>
                <h3>Softtechz Technology</h3>

                <p>
                    Gained practical experience in developing and improving
                    web interfaces while working with development teams.
                </p>

                <ul>
                    <li>Developed web interfaces using HTML, CSS and JavaScript.</li>
                    <li>Worked with Bootstrap to create responsive layouts.</li>
                    <li>Performed cross-browser testing and debugging.</li>
                    <li>Collaborated on UI/UX improvements and dashboards.</li>
                    <li>Prepared test cases and supported quality assurance.</li>
                </ul>

                <span class="experience-category">Software Development</span>
            </div>
        </article>

        <article class="experience-card">
            <div class="experience-date">March 2019 – February 2020</div>

            <div class="experience-details">
                <h2>Computer Systems Engineering In-Service Trainee</h2>
                <h3>E-BITZ Engineering Solutions</h3>

                <p>
                    Gained workplace exposure in computer systems
                    engineering and technical support.
                </p>

                <ul>
                    <li>Assisted with computer systems and technical support.</li>
                    <li>Gained practical exposure to hardware and networking.</li>
                    <li>Developed troubleshooting and problem-solving skills.</li>
                </ul>

                <span class="experience-category">Engineering</span>
            </div>
        </article>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
