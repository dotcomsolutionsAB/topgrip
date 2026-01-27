<?php include 'header.php'; ?>

<!-- Breadcrumbs -->
<nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
  <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
    <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
    <span class="text-slate-400">/</span>
    <a href="/#solutions" class="text-slate-600 hover:text-slate-900">Solutions</a>
    <span class="text-slate-400">/</span>
    <span class="text-slate-800 font-semibold">Railways</span>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 text-left">
    <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Railways Solutions</h1>
    <p class="text-lg text-slate-600">45 years of dedicated service to Indian Railways</p>
  </div>
</section>

<!-- Main Content (Left: content, Right: image) -->
<section class="py-16 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

      <!-- LEFT -->
      <div>
        <h2 class="text-2xl font-bold text-slate-900 mb-2 flex items-center gap-2">
          <i class="fa-solid fa-train text-slate-900"></i>
          Our Railway Heritage
        </h2>

        <p class="text-slate-700 mb-2">Topgrip has been working with Indian Railways since past 45 years.</p>
        <p class="text-slate-700 mb-2">
          For nearly half a century, Topgrip Industries has been a trusted partner of Indian Railways, providing
          high-quality manufacturing solutions that keep the nation's railway network running smoothly and efficiently.
        </p>
        <p class="text-slate-700 mb-2">
          Our deep understanding of railway requirements, combined with our commitment to quality and reliability, has
          made us a preferred supplier for various railway projects across India.
        </p>
        <p class="text-slate-700">
          From critical components to specialized fixtures, we manufacture a wide variety of products that meet the
          stringent standards required by the railway industry.
        </p>

        <div class="mt-7 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
          <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center gap-2">
            <i class="fa-solid fa-clipboard-check text-slate-700"></i>
            Our Railway Expertise
          </h3>

          <ul class="divide-y divide-slate-200">
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-award text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">45 Years Experience:</span> Decades of proven track record with Indian Railways</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-shield-halved text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Quality Standards:</span> Meeting and exceeding railway industry requirements</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-cubes text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Diverse Products:</span> Wide range of railway components and fixtures</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-truck-fast text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Reliable Delivery:</span> Consistent on-time delivery for critical railway projects</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-arrow-trend-up text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Continuous Improvement:</span> Always evolving to meet changing railway needs</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- RIGHT: Image -->
      <div class="lg:sticky lg:top-24">
        <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm bg-white">
          <img src="assets/images/rail/Indianrailwayspage.jpg"
            alt="Railways manufacturing" class="w-full h-[260px] sm:h-[360px] lg:h-[520px] object-cover"
          />
        </div>
        <p class="mt-3 text-sm text-slate-500">
          Manufacturing solutions aligned with railway-grade standards.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Railways Tabs + Gallery Section -->
<section class="py-16 bg-white" id="railwaysTabs">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Tabs -->
    <div class="flex items-end gap-2 border-b border-slate-200">
      <div id="railTabButtons" class="flex gap-2"></div>
      <div class="flex-1 border-b border-slate-200"></div>
    </div>

    <!-- Content Panel -->
    <div class="mt-6 rounded-2xl bg-slate-50 border border-slate-200 p-6 sm:p-8">
      <p id="railTabText" class="text-slate-700 leading-relaxed max-w-4xl"></p>

      <!-- Images Grid -->
      <div id="railTabGrid" class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
    </div>

  </div>
</section>

<script>
  // ✅ JSON (edit images + captions)
  const RAIL_TABS = [
    {
      key: "carriage_wagon",
      title: "Carriage & Wagon",
      text: "We have been manufacturing and supplying many locomotive items to the Indian Railways from different types of braking valves to digital display systems.",
      images: [
        { src: "assets/images/rail/tab1/image1.jpg", alt: "Emergency Brake Valve", caption: "Emergency Brake Valve" },
        { src: "assets/images/rail/tab1/image2.jpg", alt: "Control Unit", caption: "FIBA" },
        { src: "assets/images/rail/tab1/image3.jpg", alt: "Display System", caption: "Fiba in Field" },
        // add more if you want (it will auto wrap into new rows)
      ]
    },
    {
      key: "electrical_diesel",
      title: "Electrical & Diesel Locomotive Parts",
      text: "Topgrip has been manufacturing different types of check valves, brake valves , sensors for the Indian Railways",
      images: [
        // { src: "assets/images/railways/e1.jpg", alt: "Electrical Panel", caption: "Electrical Panel" },
        // { src: "assets/images/railways/e2.jpg", alt: "Diesel Component", caption: "Diesel Component" },
        // { src: "assets/images/railways/e3.jpg", alt: "Controller Unit", caption: "Controller Unit" }
      ]
    }
  ];

  const railTabButtons = document.getElementById("railTabButtons");
  const railTabText = document.getElementById("railTabText");
  const railTabGrid = document.getElementById("railTabGrid");

  let activeRailTab = 0;

  function renderRailTabs() {
    // Buttons
    railTabButtons.innerHTML = RAIL_TABS.map((t, i) => `
      <button
        type="button"
        data-idx="${i}"
        class="
          px-5 py-3 text-sm sm:text-base font-medium rounded-t-xl
          border border-b-0
          ${i === activeRailTab
            ? "bg-white text-slate-900 border-slate-200"
            : "bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200"}
        ">
        ${t.title}
      </button>
    `).join("");

    // Content
    const tab = RAIL_TABS[activeRailTab];
    railTabText.textContent = tab.text;

    // Grid
    railTabGrid.innerHTML = tab.images.map(img => `
      <div class="group overflow-hidden rounded-xl bg-white border border-slate-200 shadow-sm">
        <div class="relative">
          <img src="${img.src}" alt="${img.alt}"
               class="w-full h-56 sm:h-60 object-cover transition-transform duration-300 group-hover:scale-105" />
          ${img.caption ? `
            <div class="absolute left-0 right-0 bottom-0 bg-black/55 text-white text-sm font-semibold px-4 py-2">
              ${img.caption}
            </div>
          ` : ""}
        </div>
      </div>
    `).join("");

    // click events
    railTabButtons.querySelectorAll("button").forEach(btn => {
      btn.addEventListener("click", () => {
        activeRailTab = Number(btn.dataset.idx);
        renderRailTabs();
      });
    });
  }

  renderRailTabs();
</script>

<!-- Features Section (Icons instead of emoji) -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-10">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Railways Trust Topgrip</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <div class="bg-slate-50 rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="mb-4 h-12 w-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center">
          <i class="fa-solid fa-medal text-slate-900 text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold mb-1 text-slate-900">45 Years of Service</h4>
        <p class="text-slate-700">
          Nearly five decades of continuous partnership with Indian Railways demonstrates our reliability and commitment.
        </p>
      </div>

      <div class="bg-slate-50 rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="mb-4 h-12 w-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center">
          <i class="fa-solid fa-bullseye text-slate-900 text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold mb-1 text-slate-900">Railway Expertise</h4>
        <p class="text-slate-700">
          Deep understanding of railway requirements and standards ensures products that meet exact specifications.
        </p>
      </div>

      <div class="bg-slate-50 rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="mb-4 h-12 w-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center">
          <i class="fa-solid fa-gears text-slate-900 text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold mb-1 text-slate-900">Quality Manufacturing</h4>
        <p class="text-slate-700">
          ISO 9001:2015 certified processes ensure consistent quality in every product we deliver.
        </p>
      </div>

    </div>
  </div>
</section>
<!-- CTA Section -->
<section class="py-16 bg-slate-900">
  <div class="max-w-2xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Partner with Topgrip for Your Railway Projects</h2>
    <p class="text-lg text-slate-200 mb-6">Experience the reliability and quality that has served Indian Railways for 45 years.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center mt-4">
      <a href="../get-quote" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl bg-white text-slate-900 font-semibold hover:bg-slate-200 transition">
        <i class="fa-solid fa-file-signature"></i> Get a Quote
      </a>
      <a href="../contact" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-xl border border-white text-white font-semibold hover:bg-white hover:text-slate-900 transition">
        <i class="fa-solid fa-envelope"></i> Contact Us
      </a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
