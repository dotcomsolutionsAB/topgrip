<?php include 'header.php'; ?>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <span>/</span>
            <span>Contact</span>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're always ready to take up new challenges big or small</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2">
                <div>
                    <h2>Get in Touch</h2>
                    <p>Please contact us for any of your queries. If you want to contact us about any issue please call or send us an e-mail.</p>
                    
                    <div style="margin-top: var(--spacing-lg);">
                        <h3>Office Address</h3>
                        <p>Plot No-78, Shed No 24-711<br>
                        Balangar, Hyderabad<br>
                        India</p>
                    </div>

                    <div style="margin-top: var(--spacing-md);">
                        <h3>Contact Information</h3>
                        <p><strong>Phone:</strong> <a href="tel:+9104023075253">+91 040 23075253</a></p>
                        <p><strong>Mobile:</strong> <a href="tel:+919885287010">+91 9885287010</a></p>
                        <p><strong>Email:</strong> <a href="mailto:info@topgrip.co.in">info@topgrip.co.in</a></p>
                        <p><strong>Hours:</strong> Mon-Sat, 9am until 6pm</p>
                        <p><strong>Response Time:</strong> We reply within 24 hours</p>
                    </div>

                    <div style="margin-top: var(--spacing-md);">
                        <h3>Follow Us</h3>
                        <p><a href="https://www.linkedin.com/company/topgrip" target="_blank" rel="noopener noreferrer">LinkedIn</a></p>
                    </div>
                </div>

                <div>
                    <h2>Send us a Message</h2>
                    <form id="contact-form" style="margin-top: var(--spacing-md);">
                        <div class="form-group">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" id="phone" name="phone" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" id="subject" name="subject" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-textarea" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>