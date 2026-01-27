<?php include 'header.php'; ?>

        <!-- Breadcrumbs -->
        <nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
                <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-800 font-semibold">Get a Quote</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="py-12 bg-white">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Request a Quote</h1>
                <p class="text-lg text-slate-600">We work on the forefront of innovation and technology to take products from an idea all the way to the end consumer</p>
            </div>
        </section>

        <!-- Quote Form Section -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-3xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2">Get Your Quote</h2>
                    <p class="text-lg text-slate-600">Fill out the form below and we'll get back to you with a detailed quote</p>
                </div>
                <form id="quote-form" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="quote-name" class="block text-slate-700 font-semibold mb-1">Full Name *</label>
                            <input type="text" id="quote-name" name="name" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                        </div>
                        <div>
                            <label for="quote-company" class="block text-slate-700 font-semibold mb-1">Company Name *</label>
                            <input type="text" id="quote-company" name="company" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="quote-email" class="block text-slate-700 font-semibold mb-1">Email Address *</label>
                            <input type="email" id="quote-email" name="email" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                        </div>
                        <div>
                            <label for="quote-phone" class="block text-slate-700 font-semibold mb-1">Phone Number *</label>
                            <input type="tel" id="quote-phone" name="phone" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                        </div>
                    </div>
                    <div>
                        <label for="quote-service" class="block text-slate-700 font-semibold mb-1">Product/Service Interest *</label>
                        <select id="quote-service" name="service" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                            <option value="">Select a service</option>
                            <option value="automotive">Automotive (BIW & Powertrain)</option>
                            <option value="railways">Railways</option>
                            <option value="oil-gas">Oil & Gas</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="quote-product" class="block text-slate-700 font-semibold mb-1">Product/Service Details *</label>
                        <textarea id="quote-product" name="product" required placeholder="Please describe your product or service requirements in detail..." class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500 min-h-[100px]"></textarea>
                    </div>
                    <div>
                        <label for="quote-quantity" class="block text-slate-700 font-semibold mb-1">Estimated Quantity</label>
                        <input type="text" id="quote-quantity" name="quantity" placeholder="e.g., 100 units, 500 pieces" class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                    </div>
                    <div>
                        <label for="quote-timeline" class="block text-slate-700 font-semibold mb-1">Required Timeline</label>
                        <input type="text" id="quote-timeline" name="timeline" placeholder="e.g., 4 weeks, 3 months" class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                    </div>
                    <div>
                        <label for="quote-message" class="block text-slate-700 font-semibold mb-1">Additional Information</label>
                        <textarea id="quote-message" name="message" placeholder="Any additional details, specifications, or requirements..." class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500 min-h-[80px]"></textarea>
                    </div>
                    <button type="submit" class="w-full rounded-xl bg-slate-900 text-white px-8 py-3 font-semibold hover:bg-slate-800 transition">Submit Quote Request</button>
                </form>
                <div class="mt-10 p-6 bg-slate-100 rounded-xl">
                    <h3 class="text-xl font-semibold mb-2 text-slate-900">What Happens Next?</h3>
                    <ol class="list-decimal pl-6 text-slate-700 space-y-1">
                        <li>We'll review your request within 24 hours</li>
                        <li>Our team will contact you to discuss your requirements</li>
                        <li>We'll provide a detailed quote tailored to your needs</li>
                        <li>You can ask questions and we'll work together to finalize the details</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Contact Info Section -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Prefer to Talk?</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                    <div class="bg-slate-50 rounded-2xl shadow p-8 text-center">
                        <h4 class="text-lg font-semibold mb-2 text-slate-900">Call Us</h4>
                        <p><a href="tel:+9104023075253" class="text-blue-600 hover:underline">+91 040 23075253</a></p>
                        <p class="text-slate-500 text-sm mt-2">Mon-Sat, 9am until 6pm</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 text-center">
                        <h4 class="text-lg font-semibold mb-2 text-slate-900">Email Us</h4>
                        <p><a href="mailto:info@topgrip.co.in" class="text-blue-600 hover:underline">info@topgrip.co.in</a></p>
                        <p class="text-slate-500 text-sm mt-2">We reply within 24 hours</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 text-center">
                        <h4 class="text-lg font-semibold mb-2 text-slate-900">Visit Us</h4>
                        <p class="text-slate-700 text-sm">Plot No-78, Shed No 24-711<br>Balangar, Hyderabad</p>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
