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
        </section>
                

        <!-- Main Content -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-left mb-10">
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
                ["img" => "assets/images/capabilities/capabilities1.jpg", "alt" => "Factory"],
                ["img" => "assets/images/capabilities/capabilities2.jpg", "alt" => "Machinery"],
                ["img" => "assets/images/capabilities/capabilities3.jpg", "alt" => "Workshop"],
                ["img" => "assets/images/capabilities/capabilities4.jpg", "alt" => "Automation"],
                ["img" => "assets/images/capabilities/capabilities5.jpg", "alt" => "Quality Inspection"],
                ["img" => "assets/images/capabilities/capabilities6.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities7.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities8.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities9.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities10.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities11.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities12.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities13.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities14.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities15.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities16.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities17.jpg", "alt" => "Assembly Line"],
                ["img" => "assets/images/capabilities/capabilities18.jpg", "alt" => "Assembly Line"],
            ];
        ?>
        <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-left mb-10">
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
        <section class="py-16 bg-white" id="offerGrid">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What We Offer</h2>
                </div>

                <div id="offerCards" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
            </div>
        </section>
        <script>
        // ✅ JSON with Font Awesome icon classes
        const OFFERS = [
            {
            iconClass: "fa-solid fa-industry",
            title: "Manufacturing",
            desc: "Wide variety of products for Railways, Automotive and Oil & Gas sectors manufactured to exact specifications."
            },
            {
            iconClass: "fa-solid fa-screwdriver-wrench",
            title: "Assembly",
            desc: "Complete assembly services including Automotive fixtures for BIW & Powertrain applications."
            },
            {
            iconClass: "fa-solid fa-shield-halved",
            title: "Quality Assurance",
            desc: "ISO 9001:2015 certified quality management system ensuring consistent quality in every product."
            },
            {
            iconClass: "fa-solid fa-users-gear",
            title: "Skilled Personnel",
            desc: "Competent and skilled personnel handling advanced machineries and equipment."
            },
            {
            iconClass: "fa-solid fa-magnifying-glass",
            title: "Quality Control",
            desc: "Materials sourced from tried and trusted suppliers meeting our exacting standards of quality control."
            },
            {
            iconClass: "fa-solid fa-rocket",
            title: "Custom Solutions",
            desc: "Most up-to-date, sustainable custom manufacturing solutions tailored to customer needs."
            }
        ];

        const offerCards = document.getElementById("offerCards");

        offerCards.innerHTML = OFFERS.map(item => `
            <div class="group bg-slate-50 rounded-2xl border border-slate-200 p-8 shadow-sm hover:shadow-md transition">
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-white border border-slate-200 text-slate-900 group-hover:scale-105 transition">
                <i class="${item.iconClass} text-[20px]"></i>
            </div>
            <h4 class="mt-4 text-lg font-semibold text-slate-900">${item.title}</h4>
            <p class="mt-2 text-slate-700 leading-relaxed">${item.desc}</p>
            </div>
        `).join("");
        </script>

        <!-- Certifications Section -->
        <?php include 'inc/certificate_and_standard.php'; ?>

        <!-- Certificate Slider Section -->
        <?php
            $certificate_slides = [
                ["img" => "assets/images/cirtificate/cirtf_of registration.jpg", "alt" => "Certificate 1"],
                ["img" => "assets/images/cirtificate/D-U-N-S-Topgrip-Industries.jpg", "alt" => "Certificate 2"],
                ["img" => "assets/images/cirtificate/IEC-.jpg", "alt" => "Certificate 3"],
                ["img" => "assets/images/cirtificate/ISOCertificateQMS.jpg", "alt" => "Certificate 4"],
            ];
        ?>
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

                <!-- Left -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-3">Our Certificates</h2>
                    <p class="text-lg text-slate-600">Recognized for quality and standards</p>
                </div>

                <!-- Right Slider -->
                <div class="relative">
                    <!-- Frame -->
                    <div id="cert-slider"
                        class="relative overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 shadow-sm">

                    <!-- Track -->
                    <div id="cert-slider-track"
                        class="flex transition-transform duration-700 ease-in-out"
                        style="will-change: transform;">
                        <?php foreach ($certificate_slides as $slide): ?>
                        <div class="w-full shrink-0">
                            <div class="p-5 sm:p-7">
                            <div
                                class="cert-slide-img rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-center
                                    h-[320px] sm:h-[380px] lg:h-[420px]">
                                <img src="<?= htmlspecialchars($slide['img']) ?>"
                                    alt="<?= htmlspecialchars($slide['alt']) ?>"
                                    class="max-h-full max-w-full object-contain p-2" />
                            </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Arrows -->
                    <button type="button" id="cert-prev"
                            class="absolute left-3 top-1/2 -translate-y-1/2 h-10 w-10 rounded-full bg-black/50 text-white
                                    flex items-center justify-center hover:bg-black/60 transition">
                        ‹
                    </button>
                    <button type="button" id="cert-next"
                            class="absolute right-3 top-1/2 -translate-y-1/2 h-10 w-10 rounded-full bg-black/50 text-white
                                    flex items-center justify-center hover:bg-black/60 transition">
                        ›
                    </button>

                    <!-- Dots -->
                    <div class="absolute inset-x-0 bottom-4 flex justify-center gap-2" id="cert-slider-dots">
                        <?php foreach ($certificate_slides as $i => $slide): ?>
                        <button type="button"
                                class="w-2.5 h-2.5 rounded-full bg-slate-300 transition"
                                data-cert-dot="<?= $i ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
        <style>
            .cert-slide-img.active {
                box-shadow: 0 0 0 6px rgb(15 23 42), 0 0 24px 6px rgb(15 23 42);
                animation: cert-glow 1.5s infinite alternate;
            }
            @keyframes cert-glow {
                from { box-shadow: 0 0 0 6px rgb(15 23 42), 0 0 12px 6px rgb(15 23 42); }
                to { box-shadow: 0 0 0 12px rgb(15 23 42), 0 0 32px 12px rgb(15 23 42); }
            }
        </style>
        <script>
            (function() {
            const slider = document.getElementById('cert-slider');
            const track = document.getElementById('cert-slider-track');
            const slides = Array.from(track.children);
            const dots = Array.from(document.querySelectorAll('#cert-slider-dots button'));
            const prev = document.getElementById('cert-prev');
            const next = document.getElementById('cert-next');

            let idx = 0;
            let interval = null;
            let paused = false;

            function slideWidth() {
                return slider.getBoundingClientRect().width;
            }

            function goTo(i) {
                idx = (i + slides.length) % slides.length;
                const x = idx * slideWidth();
                track.style.transform = `translateX(-${x}px)`;

                // Active styles
                slides.forEach((s, j) => {
                const box = s.querySelector('.cert-slide-img');
                if (!box) return;
                box.classList.toggle('active', j === idx);
                });

                dots.forEach((d, j) => {
                d.classList.toggle('bg-yellow-400', j === idx);
                d.classList.toggle('bg-slate-300', j !== idx);
                });
            }

            function nextSlide() { goTo(idx + 1); }
            function prevSlide() { goTo(idx - 1); }

            function start() {
                if (interval) clearInterval(interval);
                interval = setInterval(() => { if (!paused) nextSlide(); }, 3000);
            }

            // Dots
            dots.forEach((dot, i) => dot.addEventListener('click', () => { goTo(i); }));

            // Arrows
            next.addEventListener('click', () => { nextSlide(); start(); });
            prev.addEventListener('click', () => { prevSlide(); start(); });

            // Pause hover
            slider.addEventListener('mouseenter', () => paused = true);
            slider.addEventListener('mouseleave', () => paused = false);

            // Resize fix
            window.addEventListener('resize', () => goTo(idx));

            goTo(0);
            start();
            })();
        </script>
        
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
