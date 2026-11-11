
<?php
$pageTitle = "Projects | Nare Tlabela";
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/style.css">
<main class="projects-page">

    <section class="page-heading">
        <p class="intro">MY WORK & DEVELOPMENT</p>
        <h1>Featured <span>Projects</span></h1>
        <p>
            A selection of projects where I apply my technical skills
            to build practical software solutions.
        </p>
    </section>

    <section class="projects-grid">

        <!-- Lingua-SA -->
        <article class="project-card">
            <div class="project-number">01</div>

            <div class="project-icon">
                <i class="fas fa-language"></i>
            </div>

            <span class="project-type">AI & Web Application</span>

            <h2>Lingua-SA</h2>

            <p class="project-description">
                A multilingual translation system designed to support
                selected South African languages. The system uses an
                AI-powered translation model to translate text and
                documents while aiming to preserve their original meaning.
            </p>

            <div class="project-features">
                <span>Text Translation</span>
                <span>Document Translation</span>
                <span>Speech-to-Text</span>
                <span>BLEU Evaluation</span>
            </div>

            <div class="project-technologies">
                <p>Technologies</p>
                <span>PHP</span>
                <span>Python</span>
                <span>Flask</span>
                <span>MySQL</span>
                <span>NLLB</span>
            </div>

            <a href="https://github.com/admin-napstar/MultilingualTranslationSystem"
               target="_blank"
               rel="noopener noreferrer"
               class="project-link">
                View on GitHub <i class="fas fa-arrow-right"></i>
            </a>
        </article>

        <!-- Taxi Profit Dashboard -->
        <article class="project-card">
            <div class="project-number">02</div>

            <div class="project-icon">
                <i class="fas fa-chart-line"></i>
            </div>

            <span class="project-type">Business & Data Dashboard</span>

            <h2>Taxi Profit Dashboard</h2>

            <p class="project-description">
                A web-based dashboard developed to help manage taxi
                business finances. It provides tools for tracking
                income, expenses, profit and driver performance.
            </p>

            <div class="project-features">
                <span>Income Tracking</span>
                <span>Expense Management</span>
                <span>Driver Performance</span>
                <span>Monthly Reports</span>
            </div>

            <div class="project-technologies">
                <p>Technologies</p>
                <span>Python</span>
                <span>Flask</span>
                <span>SQLite</span>
            </div>

            <a href="https://github.com/NareT91/Taxi-Profit-Dashboard"
               target="_blank"
               rel="noopener noreferrer"
               class="project-link">
                View on GitHub <i class="fas fa-arrow-right"></i>
            </a>
        </article>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
