<?php include 'header.php'; ?>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <span>/</span>
            <span>Get a Quote</span>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Request a Quote</h1>
            <p>We work on the forefront of innovation and technology to take products from an idea all the way to the end consumer</p>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section class="section">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="section-title">
                    <h2>Get Your Quote</h2>
                    <p class="section-subtitle">Fill out the form below and we'll get back to you with a detailed quote</p>
                </div>
                
                <form id="quote-form" style="margin-top: var(--spacing-lg);">
                    <div class="grid grid-2">
                        <div class="form-group">
                            <label for="quote-name" class="form-label">Full Name *</label>
                            <input type="text" id="quote-name" name="name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="quote-company" class="form-label">Company Name *</label>
                            <input type="text" id="quote-company" name="company" class="form-input" required>
                        </div>
                    </div>
                    
                    <div class="grid grid-2">
                        <div class="form-group">
                            <label for="quote-email" class="form-label">Email Address *</label>
                            <input type="email" id="quote-email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="quote-phone" class="form-label">Phone Number *</label>
                            <input type="tel" id="quote-phone" name="phone" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="quote-service" class="form-label">Product/Service Interest *</label>
                        <select id="quote-service" name="service" class="form-select" required>
                            <option value="">Select a service</option>
                            <option value="automotive">Automotive (BIW & Powertrain)</option>
                            <option value="railways">Railways</option>
                            <option value="oil-gas">Oil & Gas</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="quote-product" class="form-label">Product/Service Details *</label>
                        <textarea id="quote-product" name="product" class="form-textarea" placeholder="Please describe your product or service requirements in detail..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="quote-quantity" class="form-label">Estimated Quantity</label>
                        <input type="text" id="quote-quantity" name="quantity" class="form-input" placeholder="e.g., 100 units, 500 pieces">
                    </div>

                    <div class="form-group">
                        <label for="quote-timeline" class="form-label">Required Timeline</label>
                        <input type="text" id="quote-timeline" name="timeline" class="form-input" placeholder="e.g., 4 weeks, 3 months">
                    </div>

                    <div class="form-group">
                        <label for="quote-message" class="form-label">Additional Information</label>
                        <textarea id="quote-message" name="message" class="form-textarea" placeholder="Any additional details, specifications, or requirements..."></textarea>
                    </div>

                    <div style="margin-top: var(--spacing-md);">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Quote Request</button>
                    </div>
                </form>

                <div style="margin-top: var(--spacing-lg); padding: var(--spacing-md); background-color: var(--bg-light); border-radius: 8px;">
                    <h3>What Happens Next?</h3>
                    <ol style="padding-left: var(--spacing-md); margin-top: var(--spacing-sm);">
                        <li style="margin-bottom: var(--spacing-xs);">We'll review your request within 24 hours</li>
                        <li style="margin-bottom: var(--spacing-xs);">Our team will contact you to discuss your requirements</li>
                        <li style="margin-bottom: var(--spacing-xs);">We'll provide a detailed quote tailored to your needs</li>
                        <li>You can ask questions and we'll work together to finalize the details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="section feature-section">
        <div class="container">
            <div class="section-title">
                <h2>Prefer to Talk?</h2>
            </div>
            <div class="grid grid-3" style="max-width: 900px; margin: 0 auto;">
                <div class="card text-center">
                    <h4>Call Us</h4>
                    <p><a href="tel:+9104023075253">+91 040 23075253</a></p>
                    <p style="font-size: 0.875rem; color: var(--text-light);">Mon-Sat, 9am until 6pm</p>
                </div>
                <div class="card text-center">
                    <h4>Email Us</h4>
                    <p><a href="mailto:info@topgrip.co.in">info@topgrip.co.in</a></p>
                    <p style="font-size: 0.875rem; color: var(--text-light);">We reply within 24 hours</p>
                </div>
                <div class="card text-center">
                    <h4>Visit Us</h4>
                    <p style="font-size: 0.875rem;">Plot No-78, Shed No 24-711<br>Balangar, Hyderabad</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
