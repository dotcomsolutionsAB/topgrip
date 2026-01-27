<?php include 'header.php'; ?>

        <!-- Breadcrumbs -->
        <nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
                <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
                <span class="text-slate-400">/</span>
                <a href="/#solutions" class="text-slate-600 hover:text-slate-900">Solutions</a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-800 font-semibold">Automotive</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 text-left">
                <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Automotive Solutions</h1>
                <p class="text-lg text-slate-600">Manufacturing & assembly of Automotive fixtures for BIW & Powertrain applications</p>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

            <!-- LEFT: Text -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">
                    Automotive Manufacturing Excellence
                </h2>
                <p class="text-slate-700 mb-2">We manufacture &amp; assemble Automotive fixtures. (BIW &amp; Powertrain).</p>
                <p class="text-slate-700 mb-2">
                    Topgrip Industries brings decades of manufacturing expertise to the automotive sector. Our specialized focus on
                    Body-in-White (BIW) and Powertrain fixtures ensures precision, quality, and reliability for automotive manufacturers.
                </p>
                <p class="text-slate-700">
                    Our state-of-the-art facilities are equipped with advanced machinery and operated by skilled professionals who
                    understand the critical requirements of the automotive industry.
                </p>

                <div class="mt-6">
                <h3 class="text-xl font-semibold text-slate-900 mb-3">Our Automotive Capabilities</h3>
                <ul class="divide-y divide-slate-200 bg-white rounded-2xl border border-slate-200 overflow-hidden">
                    <li class="py-3 px-4 text-slate-700"><span class="font-semibold">BIW Fixtures:</span> Precision fixtures for Body-in-White assembly</li>
                    <li class="py-3 px-4 text-slate-700"><span class="font-semibold">Powertrain Fixtures:</span> Specialized fixtures for engine and transmission assembly</li>
                    <li class="py-3 px-4 text-slate-700"><span class="font-semibold">Custom Solutions:</span> Tailored fixtures to meet specific manufacturing requirements</li>
                    <li class="py-3 px-4 text-slate-700"><span class="font-semibold">Quality Assurance:</span> ISO 9001:2015 certified processes</li>
                    <li class="py-3 px-4 text-slate-700"><span class="font-semibold">Assembly Services:</span> Complete assembly and testing capabilities</li>
                </ul>
                </div>
            </div>

            <!-- RIGHT: Image -->
            <div class="lg:sticky lg:top-24">
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm bg-white">
                <img
                    src="assets/images/auto-motive/auto_1.jpg"
                    alt="Automotive manufacturing facility"
                    class="w-full h-[260px] sm:h-[340px] lg:h-[460px] object-cover"
                />
                </div>

                <!-- Optional small caption -->
                <p class="mt-3 text-sm text-slate-500">
                Advanced fixtures and assembly solutions for BIW &amp; Powertrain applications.
                </p>
            </div>

            </div>
        </div>
        </section>

        <!-- ✅ Tabs + Content + Image Grid (Tailwind) | JSON-driven -->
        <section class="py-16 bg-white" id="tabGallery">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-left mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2">Powertrain Fixtures & BIW (Body-In-White)</h2>
                    <p class="text-slate-600">
                        We at Topgrip assist Tier One companies Globally and specifically in the United States to manufacture and assemble hand tools, BIW & Powertrain fixtures for the automotive sector.
                        <br>
                        Topgrip started exporting Automotive Fixtures, Standard NC components & build-to-print components in 2014.
                        <br>
                        We take up detailing / machining / fabrication and Assembly works for the Tier One Companies. Our CNC machine shop and Inspection facilities help us achieve top quality as expected from our customers.
                    </p>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4">
                <!-- Tabs -->
                <div id="tgTabs" class="flex flex-wrap gap-2 border-b border-slate-200"></div>

                <!-- Panel -->
                <div class="mt-6">
                <!-- Text -->
                <div class="max-w-5xl">
                    <p id="tgText" class="text-slate-600 leading-relaxed"></p>
                </div>

                <!-- Images -->
                <div id="tgGrid" class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"></div>
                </div>
            </div>
        </section>

        <script>
            // ✅ JSON data (Edit titles, text, and images)
            const TAB_GALLERY = [
                {
                    key: "powertrain",
                    label: "Powertrain",
                    text:
                        "When it comes to assembly of the powertrain, one of the most important aspects is something that tends to get far less attention is: fixturing. The fixturing that holds these components in place during assembly must not only provide precise manufacturing but they must be sufficiently robust to keep the components in line.We have worked with powertrain fixture manufacturers in the United States & Germany.",
                    images: [
                        { src: "assets/images/auto-motive/tab1/image1.jpg", alt: "Powertrain fixture" },
                        { src: "assets/images/auto-motive/tab1/image2.jpg", alt: "Powertrain components" },
                        { src: "assets/images/auto-motive/tab1/image3.jpg", alt: "Powertrain tooling" },
                        { src: "assets/images/auto-motive/tab1/image4.jpg", alt: "Machined part" },
                        { src: "assets/images/auto-motive/tab1/image5.jpg", alt: "Precision parts" },
                        { src: "assets/images/auto-motive/tab1/image6.jpg", alt: "Assembly jig" },
                        { src: "assets/images/auto-motive/tab1/image7.jpg", alt: "Automation cell" },
                        { src: "assets/images/auto-motive/tab1/image8.jpg", alt: "Fixture base" },
                        { src: "assets/images/auto-motive/tab1/image9.jpg", alt: "Powertrain assembly" },
                        { src: "assets/images/auto-motive/tab1/image10.jpg", alt: "Engine components" },
                        { src: "assets/images/auto-motive/tab1/image11.jpg", alt: "Transmission parts" },
                        { src: "assets/images/auto-motive/tab1/image12.jpg", alt: "Final inspection" },
                        { src: "assets/images/auto-motive/tab1/image13.jpg", alt: "CNC machining" },
                        { src: "assets/images/auto-motive/tab1/image14.jpg", alt: "Welded assembly" },
                        { src: "assets/images/auto-motive/tab1/image15.jpg", alt: "Quality check" },
                        { src: "assets/images/auto-motive/tab1/image16.jpg", alt: "Finished product" }
                    ]
                },
                {
                    key: "biw",
                    label: "Body-In-White",
                    text:
                        "Body in White (B.I.W.) refers to the welded sheet metal components which form the vehicles structure to which the other components will be married, i.e., engine, chassis, exterior and interior trim.Topgrip has detailed and manufactured NC Standard components, Geo fixtures, Re-spot fixtures, Geo grippers, Checking fixtures, Hood installation fixtures, General Assembly tooling",
                    images: [
                        { src: "assets/images/auto-motive/tab2/img1.jpg", alt: "BIW fixture" },
                        { src: "assets/images/auto-motive/tab2/img2.jpg", alt: "BIW clamp unit" },
                        { src: "assets/images/auto-motive/tab2/img3.jpg", alt: "BIW welding cell" },
                        { src: "assets/images/auto-motive/tab2/img4.jpg", alt: "BIW assembly tooling" },
                        { src: "assets/images/auto-motive/tab2/img5.jpg", alt: "BIW locating pins" },
                        { src: "assets/images/auto-motive/tab2/img6.jpg", alt: "BIW frame jig" },
                        { src: "assets/images/auto-motive/tab2/img7.jpg", alt: "BIW line setup" },
                        { src: "assets/images/auto-motive/tab2/img8.jpg", alt: "BIW inspection fixture" }
                    ]
                },
                {
                    key: "btp",
                    label: "Build-to-Print Services",
                    text:
                        "At Topgrip we also provide build to print services where the engineer shares us a drawing and we manufacture exactly as per specification. Our capabilities include welding,machining & fabrication.You have a sample to be manufactured or 3D printed ? We can do it..",
                    images: [
                        { src: "assets/images/auto-motive/tab3/img1.jpg", alt: "Build-to-print machining" },
                        { src: "assets/images/auto-motive/tab3/img2.jpg", alt: "Fabrication work" },
                        { src: "assets/images/auto-motive/tab3/img3.jpg", alt: "Assembly line" },
                        { src: "assets/images/auto-motive/tab3/img4.jpg", alt: "Inspection process" },
                        { src: "assets/images/auto-motive/tab3/img5.jpg", alt: "CNC component" },
                        { src: "assets/images/auto-motive/tab3/img6.jpg", alt: "Welded structure" }
                    ]
                }
            ];

            const tabsEl = document.getElementById("tgTabs");
            const textEl = document.getElementById("tgText");
            const gridEl = document.getElementById("tgGrid");

            let activeKey = TAB_GALLERY[0]?.key || null;

            function renderTabs() {
                tabsEl.innerHTML = TAB_GALLERY.map((t) => {
                const active = t.key === activeKey;
                return `
                    <button
                    type="button"
                    data-key="${t.key}"
                    class="
                        relative -mb-px px-5 py-3 text-sm font-semibold rounded-t-xl border
                        ${active
                        ? "bg-white text-slate-900 border-slate-200 border-b-white"
                        : "bg-slate-50 text-slate-600 border-transparent hover:text-slate-900 hover:bg-white hover:border-slate-200"}
                    "
                    >
                    ${t.label}
                    </button>
                `;
                }).join("");

                tabsEl.querySelectorAll("button").forEach((btn) => {
                btn.addEventListener("click", () => {
                    activeKey = btn.dataset.key;
                    render();
                });
                });
            }

            function renderPanel() {
                const tab = TAB_GALLERY.find((t) => t.key === activeKey) || TAB_GALLERY[0];
                textEl.textContent = tab.text;

                gridEl.innerHTML = tab.images.map((img) => `
                <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="aspect-[4/3] w-full overflow-hidden bg-slate-100">
                    <img
                        src="${img.src}"
                        alt="${img.alt}"
                        class="h-full w-full object-cover hover:scale-105 transition-transform duration-300"
                        loading="lazy"
                    />
                    </div>
                </div>
                `).join("");
            }

            function render() {
                renderTabs();
                renderPanel();
            }

            render();
        </script>


        <!-- Features Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Choose Topgrip for Automotive Solutions</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">🔧</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Precision Engineering</h4>
                        <p class="text-slate-700">Our fixtures are engineered to exact specifications, ensuring perfect fit and function in your manufacturing process.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">⚡</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Fast Turnaround</h4>
                        <p class="text-slate-700">Efficient production processes and experienced team ensure timely delivery without compromising quality.</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl shadow p-8 flex flex-col items-center text-center">
                        <div class="text-4xl mb-2">✅</div>
                        <h4 class="text-lg font-semibold mb-1 text-slate-900">Quality Certified</h4>
                        <p class="text-slate-700">ISO 9001:2015 certified quality management system ensures consistent, high-quality products.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-slate-900">
            <div class="max-w-2xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Ready to Discuss Your Automotive Project?</h2>
                <p class="text-lg text-slate-200 mb-6">Contact us today to learn how we can support your automotive manufacturing needs.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
                    <a href="../get-quote" class="inline-block px-8 py-3 rounded-xl bg-white text-slate-900 font-semibold hover:bg-slate-200 transition">Get a Quote</a>
                    <a href="../contact" class="inline-block px-8 py-3 rounded-xl border border-white text-white font-semibold hover:bg-white hover:text-slate-900 transition">Contact Us</a>
                </div>
            </div>
        </section>

<?php include 'footer.php'; ?>
