<?php include 'header.php'; ?>

<!-- Breadcrumbs -->
<nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
  <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
    <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
    <span class="text-slate-400">/</span>
    <a href="/#solutions" class="text-slate-600 hover:text-slate-900">Solutions</a>
    <span class="text-slate-400">/</span>
    <span class="text-slate-800 font-semibold">Oil &amp; Gas</span>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 text-left">
    <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Oil &amp; Gas Solutions</h1>
    <p class="text-lg text-slate-600">Bringing proven manufacturing expertise to the Oil &amp; Gas industry</p>
  </div>
</section>

<!-- Main Content (Left: content, Right: image) -->
<section class="py-16 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

      <!-- LEFT -->
      <div>
        <h2 class="text-2xl font-bold text-slate-900 mb-2 flex items-center gap-2">
          <i class="fa-solid fa-oil-well text-slate-900"></i>
          Expanding into Oil &amp; Gas
        </h2>

        <p class="text-slate-700 mb-2">
          Having vast experience in the manufacturing industry in Railways &amp; Automotive. Topgrip is now venturing into the Oil &amp; Gas market.
        </p>
        <p class="text-slate-700 mb-2">
          With decades of proven expertise in manufacturing for Railways and Automotive sectors, Topgrip Industries is now bringing our commitment to quality, precision, and reliability to the Oil &amp; Gas industry.
        </p>
        <p class="text-slate-700 mb-2">
          Our extensive manufacturing experience, combined with our ISO 9001:2015 certified quality management system, positions us as an ideal partner for Oil &amp; Gas projects that demand the highest standards of quality and reliability.
        </p>
        <p class="text-slate-700">
          We understand the critical nature of Oil &amp; Gas operations and are committed to delivering solutions that meet the stringent requirements of this industry.
        </p>

        <!-- Capabilities list in card -->
        <div class="mt-7 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
          <h3 class="text-xl font-semibold text-slate-900 mb-4 flex items-center gap-2">
            <i class="fa-solid fa-clipboard-check text-slate-700"></i>
            Our Oil &amp; Gas Capabilities
          </h3>

          <ul class="divide-y divide-slate-200">
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-award text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Proven Expertise:</span> Decades of manufacturing experience in critical industries</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-shield-halved text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Quality Systems:</span> ISO 9001:2015 certified processes</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-industry text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Advanced Facilities:</span> Well-equipped manufacturing facilities</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-users-gear text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Skilled Team:</span> Competent and experienced personnel</span>
            </li>
            <li class="py-3 flex gap-3">
              <i class="fa-solid fa-gear text-slate-500 mt-1"></i>
              <span class="text-slate-700"><span class="font-semibold">Custom Solutions:</span> Tailored manufacturing for Oil &amp; Gas requirements</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- RIGHT: Image (sample for now) -->
      <div class="lg:sticky lg:top-24">
        <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-sm bg-white">
          <img
            src="assets/images/oil_gas/OilandGasPage.jpg"
            alt="Oil & Gas manufacturing"
            class="w-full h-[260px] sm:h-[360px] lg:h-[520px] object-cover"
          />
        </div>
        <p class="mt-3 text-sm text-slate-500">
          Reliable manufacturing support for Oil &amp; Gas-grade requirements.
        </p>
      </div>

    </div>
  </div>
</section>
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Tabs Header -->
    <div class="flex flex-wrap gap-2 border-b border-slate-200 mb-6" id="tabs"></div>

    <!-- Tab Content -->
    <div id="tabContent"></div>

  </div>
</section>
<script>
const TAB_DATA = [
  {
    id: "carriage",
    title: "Oil & Gas",
    description:
      "We manufacture engineering components for the Oil & Gas at our multiple machine shops throughout India.",
    images: [
      "assets/images/oil_gas/tab1/image1.jpg",
      "assets/images/oil_gas/tab1/image2.jpg"
    ]
  }
];

const tabsEl = document.getElementById("tabs");
const contentEl = document.getElementById("tabContent");

// Render Tabs
tabsEl.innerHTML = TAB_DATA.map((tab, i) => `
  <button
    class="tab-btn px-5 py-2 rounded-t-xl border border-b-0 text-sm font-semibold transition
           ${i === 0 ? 'bg-white border-slate-200 text-slate-900'
                    : 'bg-slate-50 text-slate-500 hover:text-slate-800'}"
    data-tab="${tab.id}">
    ${tab.title}
  </button>
`).join("");

// Render Content
function renderTab(tabId) {
  const tab = TAB_DATA.find(t => t.id === tabId);

  contentEl.innerHTML = `
    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200">
      <p class="text-slate-700 mb-6 max-w-3xl">
        ${tab.description}
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        ${tab.images.map(img => `
          <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <img src="${img}"
                 class="w-full h-48 object-cover hover:scale-105 transition duration-300"
                 alt="Product image">
          </div>
        `).join("")}
      </div>
    </div>
  `;

  // Update active tab
  document.querySelectorAll(".tab-btn").forEach(btn => {
    btn.classList.toggle("bg-white", btn.dataset.tab === tabId);
    btn.classList.toggle("border-slate-200", btn.dataset.tab === tabId);
    btn.classList.toggle("text-slate-900", btn.dataset.tab === tabId);
    btn.classList.toggle("bg-slate-50", btn.dataset.tab !== tabId);
    btn.classList.toggle("text-slate-500", btn.dataset.tab !== tabId);
  });
}

// Click handlers
document.querySelectorAll(".tab-btn").forEach(btn => {
  btn.addEventListener("click", () => renderTab(btn.dataset.tab));
});

// Init
renderTab(TAB_DATA[0].id);
</script>

<!-- Features Section (Icons instead of emojis) -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="text-center mb-10">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Why Choose Topgrip for Oil &amp; Gas</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <div class="bg-slate-50 rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="mb-4 h-12 w-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center">
          <i class="fa-solid fa-industry text-slate-900 text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold mb-1 text-slate-900">Industry Experience</h4>
        <p class="text-slate-700">
          Proven track record in Railways and Automotive sectors provides a strong foundation for Oil &amp; Gas projects.
        </p>
      </div>

      <div class="bg-slate-50 rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="mb-4 h-12 w-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center">
          <i class="fa-solid fa-shield-halved text-slate-900 text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold mb-1 text-slate-900">Quality Assurance</h4>
        <p class="text-slate-700">
          ISO 9001:2015 certification ensures consistent quality that meets the demanding standards of the Oil &amp; Gas industry.
        </p>
      </div>

      <div class="bg-slate-50 rounded-2xl border border-slate-200 shadow-sm p-8 flex flex-col items-center text-center hover:shadow-md transition">
        <div class="mb-4 h-12 w-12 rounded-2xl bg-white border border-slate-200 flex items-center justify-center">
          <i class="fa-solid fa-rocket text-slate-900 text-xl"></i>
        </div>
        <h4 class="text-lg font-semibold mb-1 text-slate-900">Innovation</h4>
        <p class="text-slate-700">
          Continuous improvement and innovation to meet the evolving needs of the Oil &amp; Gas sector.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-slate-900">
  <div class="max-w-2xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Partner with Topgrip for Your Oil &amp; Gas Projects</h2>
    <p class="text-lg text-slate-200 mb-6">Experience the quality and reliability that has served Railways and Automotive industries for decades.</p>

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
