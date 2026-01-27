<section id="heroSlider" class="relative w-full overflow-hidden min-h-[520px] sm:min-h-[560px]">
  <!-- Slides will be injected here -->
  <div id="heroSlides" class="absolute inset-0 z-0"></div>

  <!-- Controls -->
    <!-- Centered Arrows and Dots -->
    <div class="pointer-events-none absolute inset-0 z-50 flex items-center justify-between px-4">
      <!-- Prev -->
      <button id="heroPrev" aria-label="Previous slide"
        class="pointer-events-auto absolute left-4 top-1/2 -translate-y-1/2 inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/30 bg-black/30 text-white text-2xl backdrop-blur hover:bg-black/40 active:scale-95 transition">
        ‹
      </button>
      <!-- Next -->
      <button id="heroNext" aria-label="Next slide"
        class="pointer-events-auto absolute right-4 top-1/2 -translate-y-1/2 inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/30 bg-black/30 text-white text-2xl backdrop-blur hover:bg-black/40 active:scale-95 transition">
        ›
      </button>
      <!-- Dots at bottom center -->
      <div class="pointer-events-auto absolute left-1/2 -translate-x-1/2 bottom-6 sm:bottom-7 flex items-center justify-center gap-2" id="heroDots"></div>
    </div>
</section>


<script>
  // ✅ JSON slides data (edit as needed)
  const HERO_SLIDES = [
    {
      title: "We help make your vision tangible",
      text: "We build the bridge between the world of ideas and the delivery of products.",
      buttonText: "Know more about what we do",
      buttonLink: "about",
      image: "assets/images/slider1.jpg"
    },
    {
      title: "Engineering solutions that scale",
      text: "From concept to execution, we deliver with precision and reliability.",
      buttonText: "Explore our capabilities",
      buttonLink: "capabilities",
      image: "assets/images/slider2.jpg"
    },
    {
      title: "Built for industry standards",
      text: "Automotive, Railways, and Oil & Gas solutions with quality at the core.",
      buttonText: "View solutions",
      buttonLink: "automotive",
      image: "assets/images/slider3.jpg"
    }
  ];

  const sliderEl = document.getElementById("heroSlider");
  const slidesEl = document.getElementById("heroSlides");
  const dotsEl = document.getElementById("heroDots");
  const prevBtn = document.getElementById("heroPrev");
  const nextBtn = document.getElementById("heroNext");

  let current = 0;
  let timer = null;
  const AUTO_MS = 5000;

    function renderSlider() {
    slidesEl.innerHTML = HERO_SLIDES.map((s, i) => `
        <div
        class="absolute inset-0 z-10 bg-cover bg-center transition-all duration-700 ${i === current ? "opacity-100 scale-100" : "opacity-0 scale-[1.02]"}"
        style="background-image:url('${s.image}')"
        >
        <!-- Overlay -->
        <div class="absolute inset-0 pointer-events-none bg-gradient-to-b from-black/70 via-black/45 to-black/25 md:bg-gradient-to-r md:from-black/70 md:via-black/40 md:to-black/10"></div>

        <!-- Content: left bottom -->
        <div class="absolute left-10 bottom-0 z-20 w-full max-w-2xl px-8 pb-12 sm:pb-16 text-left">
          <div class="text-white">
            <h1 class="text-[32px] sm:text-[40px] md:text-[56px] font-extrabold leading-[1.08] tracking-tight mb-3">
              ${s.title}
            </h1>
            <p class="mb-6 text-[15px] sm:text-[16px] md:text-[18px] leading-relaxed text-white/95 max-w-[60ch]">
              ${s.text}
            </p>
            <a href="${s.buttonLink}"
              class="inline-flex items-center justify-center rounded-xl border border-white/40 px-6 py-3 text-white font-semibold hover:bg-white hover:text-black transition">
              ${s.buttonText}
            </a>
          </div>
        </div>
        </div>
    `).join("");

    // Dots
    dotsEl.innerHTML = HERO_SLIDES.map((_, i) => `
        <button
        class="h-2.5 w-2.5 rounded-full transition ${i === current ? "bg-white scale-110" : "bg-white/40 hover:bg-white/70"}"
        aria-label="Go to slide ${i + 1}"
        data-index="${i}"
        ></button>
    `).join("");

    dotsEl.querySelectorAll("button").forEach(dot => {
        dot.addEventListener("click", () => {
        current = Number(dot.dataset.index);
        renderSlider();
        restartAuto();
        });
    });
    }

  function next() {
    current = (current + 1) % HERO_SLIDES.length;
    renderSlider();
  }

  function prev() {
    current = (current - 1 + HERO_SLIDES.length) % HERO_SLIDES.length;
    renderSlider();
  }

  function startAuto() {
    timer = setInterval(next, AUTO_MS);
  }

  function stopAuto() {
    if (timer) clearInterval(timer);
    timer = null;
  }

  function restartAuto() {
    stopAuto();
    startAuto();
  }

  prevBtn.addEventListener("click", () => { prev(); restartAuto(); });
  nextBtn.addEventListener("click", () => { next(); restartAuto(); });

  // Pause on hover (optional)
  sliderEl.addEventListener("mouseenter", stopAuto);
  sliderEl.addEventListener("mouseleave", startAuto);

  // Init
  renderSlider();
  startAuto();
</script>

