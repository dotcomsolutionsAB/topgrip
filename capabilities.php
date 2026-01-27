<?php include 'header.php'; ?>

        <!-- Breadcrumbs -->
        <nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
                <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-800 font-semibold">Capabilities</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 text-left">
                <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Our Capabilities</h1>
                <p class="text-lg text-slate-600">State-of-the-art manufacturing facilities and expertise</p>
            </div>

                

        <!-- Main Content -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2">Manufacturing Excellence</h2>
                    <p class="text-lg text-slate-600">Three facilities in India with Kolkata as our head office</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-slate-900">Our Facilities</h3>
                        <p class="text-slate-700 mb-2">We have three facilities in India with Kolkata being our head office. Our factories are well equipped with machineries and equipment's being handled by competent and skilled personnel.</p>
                        <p class="text-slate-700">Each facility is strategically located and equipped to handle different aspects of our manufacturing operations, ensuring efficient production and timely delivery to our customers.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2 text-slate-900">Quality Management</h3>
                        <p class="text-slate-700 mb-2">We are committed to enhancing customer satisfaction by understanding customer needs and meeting or exceeding their expectations. We will achieve this by meeting process and product requirements and continually improving the quality management system.</p>
                        <p class="text-slate-700">Our ISO 9001:2015 certification demonstrates our commitment to maintaining the highest quality standards in all our operations.</p>
                    </div>
                </div>
            </div>
                </section>

                <!-- Capabilities Gallery Section (moved below Quality Management) -->
                <?php
                $capabilities_gallery = [
                    ["img" => "https://source.unsplash.com/600x400/?factory,industry", "alt" => "Factory"],
                    ["img" => "https://source.unsplash.com/600x400/?machinery,manufacturing", "alt" => "Machinery"],
                    ["img" => "https://source.unsplash.com/600x400/?workshop,production", "alt" => "Workshop"],
                    ["img" => "https://source.unsplash.com/600x400/?automation,robotics", "alt" => "Automation"],
                    ["img" => "https://source.unsplash.com/600x400/?quality,inspection", "alt" => "Quality Inspection"],
                    ["img" => "https://source.unsplash.com/600x400/?assembly,line", "alt" => "Assembly Line"],
                ];
                ?>
                <section class="py-16 bg-slate-50">
                    <div class="max-w-7xl mx-auto px-4">
                        <div class="text-center mb-10">
                            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2">Capabilities Gallery</h2>
                            <p class="text-lg text-slate-600">A glimpse into our advanced facilities and operations</p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                            <?php foreach ($capabilities_gallery as $item): ?>
                                <div class="overflow-hidden rounded-2xl shadow bg-white">
                                    <img src="<?= htmlspecialchars($item['img']) ?>" alt="<?= htmlspecialchars($item['alt']) ?>" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

        <!-- Capabilities Grid -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What We Offer</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">🏭</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Manufacturing</h4>
                        <p class="text-slate-700">Wide variety of products for Railways, Automotive and Oil & Gas sectors manufactured to exact specifications.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">🔧</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Assembly</h4>
                        <p class="text-slate-700">Complete assembly services including Automotive fixtures for BIW & Powertrain applications.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">✅</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Quality Assurance</h4>
                        <p class="text-slate-700">ISO 9001:2015 certified quality management system ensuring consistent quality in every product.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">👥</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Skilled Personnel</h4>
                        <p class="text-slate-700">Competent and skilled personnel handling advanced machineries and equipment.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">🔍</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Quality Control</h4>
                        <p class="text-slate-700">Materials sourced from tried and trusted suppliers meeting our exacting standards of quality control.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">🚀</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Custom Solutions</h4>
                        <p class="text-slate-700">Most up-to-date, sustainable custom manufacturing solutions tailored to customer needs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications Section -->
        <?php include 'inc/certificate_and_standard.php'; ?>
        
        <!-- CTA Section -->
        <section class="py-16 bg-slate-900">
            <div class="max-w-2xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Ready to Work with Us?</h2>
                <p class="text-lg text-slate-200 mb-6">Discover how our capabilities can support your manufacturing needs.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
                    <a href="get-quote" class="inline-block px-8 py-3 rounded-xl bg-white text-slate-900 font-semibold hover:bg-slate-200 transition">Get a Quote</a>
                    <a href="contact" class="inline-block px-8 py-3 rounded-xl border border-white text-white font-semibold hover:bg-white hover:text-slate-900 transition">Contact Us</a>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
