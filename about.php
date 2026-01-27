<?php include 'header.php'; ?>

        <!-- Breadcrumbs -->
        <nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
                <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-800 font-semibold">About</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 text-left">
                <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">About Topgrip Industries</h1>
                <p class="text-lg text-slate-600">45 years of excellence in industrial manufacturing</p>
            </div>
        </section>

        <!-- About Content -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our Story</h2>
                </div>
                <?php
                    $about_images = [
                        ["img" => "assets/images/about/about1.jpg", "alt" => "Topgrip Facility 1"],
                        ["img" => "assets/images/about/about2.jpg", "alt" => "Topgrip Facility 2"],
                        ["img" => "assets/images/about/about3.jpg", "alt" => "Topgrip Facility 3"],
                    ];
                ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 mb-6">We started with a simple idea.</h3>
                        <p class="text-slate-700 mb-4">Topgrip is a family owned business run and operated by the family. We have served the Indian Railways since past 45 years and have stepped into the Automotive and Oil & Gas business too. We love what we do and that is the key to Topgrips' success over these years. We manufacture a wide variety products for the Railways, Automotive and Oil & Gas sector.</p>
                        <p class="text-slate-700 mb-4">We have three facilities in India with Kolkata being our head office. Our factories are well equipped with machineries and equipment's being handled by competent and skilled personnel.</p>
                        <h4 class="text-xl font-semibold mb-2 text-slate-900">Our Commitment</h4>
                        <p class="text-slate-700 mb-2">We are committed to enhancing customer satisfaction by understanding customer needs and meeting or exceeding their expectations. We will achieve this by meeting process and product requirements and continually improving the quality management system.</p>
                        <p class="text-slate-700">Our team offers the most up-to-date, sustainable custom manufacturing solutions. We only source materials from tried and trusted suppliers that meet our exacting standards of quality control.</p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <!-- Top large image -->
                        <div class="w-full h-80 rounded-2xl overflow-hidden shadow bg-white flex items-center justify-center">
                            <img src="<?= htmlspecialchars($about_images[0]['img']) ?>" alt="<?= htmlspecialchars($about_images[0]['alt']) ?>" class="w-full h-full object-cover">
                        </div>
                        <!-- Bottom two images side by side -->
                        <div class="flex gap-6">
                            <div class="w-1/2 h-48 rounded-2xl overflow-hidden shadow bg-white flex items-center justify-center">
                                <img src="<?= htmlspecialchars($about_images[1]['img']) ?>" alt="<?= htmlspecialchars($about_images[1]['alt']) ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="w-1/2 h-48 rounded-2xl overflow-hidden shadow bg-white flex items-center justify-center">
                                <img src="<?= htmlspecialchars($about_images[2]['img']) ?>" alt="<?= htmlspecialchars($about_images[2]['alt']) ?>" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications Section -->
        <?php include 'inc/certificate_and_standard.php'; ?>

        <!-- Team Section -->
        <?php include 'inc/teams.php'; ?>

        <!-- Testimonials Section -->
        <?php include 'inc/testimonials.php'; ?>

        <!-- Quote Section -->
        <section class="py-12 bg-slate-900">
            <div class="max-w-2xl mx-auto px-4 text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">"Don't find fault, find a remedy; anybody can complain"</h3>
                <p class="text-slate-300 italic">— Henry Ford</p>
            </div>
        </section>

<?php include 'footer.php'; ?>
