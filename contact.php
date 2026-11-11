
<?php
$pageTitle = "Contact Me | Nare Tlabela";
include 'includes/header.php';
?>

<main class="contact-page">

    <section class="page-heading">
        <p class="intro">LET'S CONNECT</p>
        <h1>Get In <span>Touch</span></h1>
        <p>
            Have an opportunity, project or question?
            I'd love to hear from you.
        </p>
    </section>

    <section class="contact-container">

        <!-- Contact information -->
        <div class="contact-info">

            <h2>Let's talk</h2>

            <p class="contact-description">
                I'm always open to discussing software development,
                career opportunities, collaborations and new ideas.
            </p>

            <div class="contact-detail">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <h3>Email</h3>
                    <a href="mailto:Narefikamva@gmail.com">
                        Narefikamva@gmail.com
                    </a>
                </div>
            </div>

            <div class="contact-detail">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div>
                    <h3>Phone</h3>
                    <a href="tel:+27726150957">
                        +27 72 615 0957
                    </a>
                </div>
            </div>

            <div class="contact-detail">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <h3>Location</h3>
                    <p>Pretoria, Gauteng, South Africa</p>
                </div>
            </div>

            <div class="contact-socials">
                <a href="https://github.com/NareT91"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="GitHub">
                    <i class="fab fa-github"></i>
                </a>

                <a href="https://www.linkedin.com/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>

        </div>

        <!-- Contact form -->
        <div class="contact-form-card">

            <h2>Send Me a Message</h2>
            <p>Fill in the form below to get in touch.</p>

            <form action="mailto:Narefikamva@gmail.com"
                  method="post"
                  enctype="text/plain">

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text"
                           id="name"
                           name="Name"
                           placeholder="Enter your name"
                           required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email"
                           id="email"
                           name="Email"
                           placeholder="Enter your email"
                           required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text"
                           id="subject"
                           name="Subject"
                           placeholder="What is this about?"
                           required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message"
                              name="Message"
                              rows="5"
                              placeholder="Write your message..."
                              required></textarea>
                </div>

                <button type="submit" class="contact-submit">
                    Send Message
                    <i class="fas fa-paper-plane"></i>
                </button>

            </form>

        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>
