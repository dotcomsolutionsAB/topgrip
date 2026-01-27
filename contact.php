<?php include 'header.php'; ?>

        <!-- Breadcrumbs -->
        <nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
                <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-800 font-semibold">Contact</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 text-left">
                <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Contact Us</h1>
                <p class="text-lg text-slate-600">We're always ready to take up new challenges big or small</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Get in Touch</h2>
                        <p class="text-slate-700 mb-6">Please contact us for any of your queries. If you want to contact us about any issue please call or send us an e-mail.</p>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-1">Office Address</h3>
                            <p class="text-slate-700">Plot No-78, Shed No 24-711<br>Balangar, Hyderabad<br>India</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-slate-900 mb-1">Contact Information</h3>
                            <p class="text-slate-700"><span class="font-semibold">Phone:</span> <a href="tel:+9104023075253" class="hover:underline">+91 040 23075253</a></p>
                            <p class="text-slate-700"><span class="font-semibold">Mobile:</span> <a href="tel:+919885287010" class="hover:underline">+91 9885287010</a></p>
                            <p class="text-slate-700"><span class="font-semibold">Email:</span> <a href="mailto:info@topgrip.co.in" class="hover:underline">info@topgrip.co.in</a></p>
                            <p class="text-slate-700"><span class="font-semibold">Hours:</span> Mon-Sat, 9am until 6pm</p>
                            <p class="text-slate-700"><span class="font-semibold">Response Time:</span> We reply within 24 hours</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 mb-1">Follow Us</h3>
                            <p><a href="https://www.linkedin.com/company/topgrip" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">LinkedIn</a></p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Send us a Message</h2>
                        <form id="contact-form" class="space-y-4 mt-4">
                            <div>
                                <label for="name" class="block text-slate-700 font-semibold mb-1">Name *</label>
                                <input type="text" id="name" name="name" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                            </div>
                            <div>
                                <label for="email" class="block text-slate-700 font-semibold mb-1">Email *</label>
                                <input type="email" id="email" name="email" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                            </div>
                            <div>
                                <label for="phone" class="block text-slate-700 font-semibold mb-1">Phone</label>
                                <input type="tel" id="phone" name="phone" class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                            </div>
                            <div>
                                <label for="subject" class="block text-slate-700 font-semibold mb-1">Subject *</label>
                                <input type="text" id="subject" name="subject" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
                            </div>
                            <div>
                                <label for="message" class="block text-slate-700 font-semibold mb-1">Message *</label>
                                <textarea id="message" name="message" required class="w-full rounded-xl px-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500 min-h-[120px]"></textarea>
                            </div>
                            <button type="submit" class="rounded-xl bg-slate-900 text-white px-8 py-3 font-semibold hover:bg-slate-800 transition">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>