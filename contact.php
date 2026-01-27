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

      <!-- LEFT: Details -->
      <div>
        <h2 class="text-2xl font-bold text-slate-900 mb-2 flex items-center gap-2">
          <i class="fa-solid fa-headset text-slate-900"></i>
          Get in Touch
        </h2>
        <p class="text-slate-700 mb-6">
          Please contact us for any of your queries. If you want to contact us about any issue please call or send us an e-mail.
        </p>

        <div class="mb-6 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
          <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center gap-2">
            <i class="fa-solid fa-location-dot text-slate-700"></i>
            Office Address
          </h3>
          <p class="text-slate-700 leading-relaxed">
            Plot No-78, Shed No 24-711<br>Balangar, Hyderabad<br>India
          </p>
        </div>

        <div class="mb-6 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
          <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center gap-2">
            <i class="fa-solid fa-address-card text-slate-700"></i>
            Contact Information
          </h3>

          <ul class="space-y-2 text-slate-700">
            <li class="flex items-start gap-3">
              <i class="fa-solid fa-phone text-slate-500 mt-1"></i>
              <span><span class="font-semibold">Phone:</span> <a href="tel:+9104023075253" class="hover:underline">+91 040 23075253</a></span>
            </li>
            <li class="flex items-start gap-3">
              <i class="fa-solid fa-mobile-screen-button text-slate-500 mt-1"></i>
              <span><span class="font-semibold">Mobile:</span> <a href="tel:+919885287010" class="hover:underline">+91 9885287010</a></span>
            </li>
            <li class="flex items-start gap-3">
              <i class="fa-solid fa-envelope text-slate-500 mt-1"></i>
              <span><span class="font-semibold">Email:</span> <a href="mailto:info@topgrip.co.in" class="hover:underline">info@topgrip.co.in</a></span>
            </li>
            <li class="flex items-start gap-3">
              <i class="fa-regular fa-clock text-slate-500 mt-1"></i>
              <span><span class="font-semibold">Hours:</span> Mon-Sat, 9am until 6pm</span>
            </li>
            <li class="flex items-start gap-3">
              <i class="fa-solid fa-reply text-slate-500 mt-1"></i>
              <span><span class="font-semibold">Response Time:</span> We reply within 24 hours</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
          <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center gap-2">
            <i class="fa-solid fa-share-nodes text-slate-700"></i>
            Follow Us
          </h3>
          <a href="https://www.linkedin.com/company/topgrip" target="_blank" rel="noopener noreferrer"
             class="inline-flex items-center gap-2 text-blue-600 hover:underline font-semibold">
            <i class="fa-brands fa-linkedin text-xl"></i>
            LinkedIn
          </a>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div>
        <h2 class="text-2xl font-bold text-slate-900 mb-2 flex items-center gap-2">
          <i class="fa-solid fa-paper-plane text-slate-900"></i>
          Send us a Message
        </h2>

        <form id="contact-form" class="space-y-4 mt-4 bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">

          <div>
            <label for="name" class="block text-slate-700 font-semibold mb-1">Name *</label>
            <div class="relative">
              <i class="fa-regular fa-user absolute left-4 top-1/2 -translate-y-1/2 text-slate-500"></i>
              <input type="text" id="name" name="name" required
                     class="w-full rounded-xl pl-11 pr-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
          </div>

          <div>
            <label for="email" class="block text-slate-700 font-semibold mb-1">Email *</label>
            <div class="relative">
              <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-500"></i>
              <input type="email" id="email" name="email" required
                     class="w-full rounded-xl pl-11 pr-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
          </div>

          <div>
            <label for="phone" class="block text-slate-700 font-semibold mb-1">Phone</label>
            <div class="relative">
              <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-slate-500"></i>
              <input type="tel" id="phone" name="phone"
                     class="w-full rounded-xl pl-11 pr-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
          </div>

          <div>
            <label for="subject" class="block text-slate-700 font-semibold mb-1">Subject *</label>
            <div class="relative">
              <i class="fa-regular fa-rectangle-list absolute left-4 top-1/2 -translate-y-1/2 text-slate-500"></i>
              <input type="text" id="subject" name="subject" required
                     class="w-full rounded-xl pl-11 pr-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500">
            </div>
          </div>

          <div>
            <label for="message" class="block text-slate-700 font-semibold mb-1">Message *</label>
            <div class="relative">
              <i class="fa-regular fa-message absolute left-4 top-4 text-slate-500"></i>
              <textarea id="message" name="message" required
                        class="w-full rounded-xl pl-11 pr-4 py-2 text-slate-900 border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-500 min-h-[140px]"></textarea>
            </div>
          </div>

          <button type="submit"
                  class="rounded-xl bg-slate-900 text-white px-8 py-3 font-semibold hover:bg-slate-800 transition inline-flex items-center justify-center gap-2">
            <i class="fa-solid fa-paper-plane"></i>
            Send Message
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
