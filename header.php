<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Topgrip Industries - Leading provider of industrial solutions for Automotive, Railways, and Oil & Gas sectors. ISO 9001:2015 certified.">
    <meta name="keywords" content="Topgrip Industries, industrial solutions, automotive fixtures, railways manufacturing, oil and gas, ISO 9001:2015, manufacturing India">
    <meta name="author" content="Topgrip Industries">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://topgrip.co.in/">
    <link rel="icon" href="assets/images/fav.png" type="image/x-icon">
    <title>Topgrip Industries - Industrial Solutions Provider</title>
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/responsive.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Topgrip Industries",
      "url": "https://topgrip.co.in",
      "logo": "https://topgrip.co.in/assets/images/logo/topgrip-logo.png",
      "description": "Leading provider of industrial solutions for Automotive, Railways, and Oil & Gas sectors. ISO 9001:2015 certified.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Plot No-78, Shed No 24-711, Balangar",
        "addressLocality": "Hyderabad",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-040-23075253",
        "contactType": "Customer Service",
        "email": "info@topgrip.co.in",
        "areaServed": "IN",
        "availableLanguage": ["en", "hi"]
      },
      "sameAs": [
        "https://www.linkedin.com/company/topgrip-industries/?viewAsMember=true"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "4"
      }
    }
    </script>
</head>
<!-- Tailwind CSS is used for all styling. No custom CSS needed. -->
<body>
    <!-- Header -->
    <header class="sticky top-0 z-[9999] bg-white/90 backdrop-blur border-b border-black/10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="h-20 flex items-center justify-between gap-4">
                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="assets/images/logo.png" alt="Topgrip Industries" class="h-10 w-auto">
                </a>
                <!-- Desktop Nav -->
                <nav class="hidden lg:flex items-center gap-2">
                    <a href="index" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-800 hover:bg-slate-100">Home</a>

                    <!-- Dropdown -->
                    <div class="relative group">
                    <a href="#" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-800 hover:bg-slate-100 inline-flex items-center gap-2">
                        Solutions <span class="text-xs">▼</span>
                    </a>

                    <div class="absolute left-0 top-full pt-2 opacity-0 translate-y-1 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition">
                        <div class="w-56 rounded-2xl bg-white shadow-xl border border-black/10 overflow-hidden">
                        <a href="automotive" class="block px-4 py-3 text-sm text-slate-800 hover:bg-slate-50">Automotive</a>
                        <a href="railways" class="block px-4 py-3 text-sm text-slate-800 hover:bg-slate-50">Railways</a>
                        <a href="oil-gas" class="block px-4 py-3 text-sm text-slate-800 hover:bg-slate-50">Oil &amp; Gas</a>
                        </div>
                    </div>
                    </div>

                    <a href="capabilities" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-800 hover:bg-slate-100">Capabilities</a>
                    <a href="news" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-800 hover:bg-slate-100">News</a>
                    <a href="about" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-800 hover:bg-slate-100">About</a>
                    <a href="contact" class="px-4 py-2 rounded-xl text-sm font-semibold text-slate-800 hover:bg-slate-100">Contact</a>

                    <a href="get-quote"
                    class="ml-2 inline-flex items-center justify-center rounded-xl bg-slate-900 text-white px-5 py-2.5 text-sm font-semibold hover:bg-slate-800 transition">
                    Get a Quote
                    </a>
                </nav>

                <!-- Mobile Toggle -->
                <button id="menuBtn"
                        class="lg:hidden inline-flex items-center justify-center h-11 w-11 rounded-xl border border-black/10 hover:bg-slate-100 transition"
                        aria-label="Toggle menu">
                    <!-- simple hamburger -->
                    <span class="block w-5 h-[2px] bg-slate-900 relative">
                    <span class="absolute -top-2 left-0 w-5 h-[2px] bg-slate-900"></span>
                    <span class="absolute top-2 left-0 w-5 h-[2px] bg-slate-900"></span>
                    </span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="lg:hidden hidden pb-5">
                <div class="mt-2 rounded-2xl border border-black/10 bg-white shadow-sm overflow-hidden">
                    <a href="index" class="block px-4 py-3 text-sm font-semibold text-slate-800 hover:bg-slate-50">Home</a>

                    <!-- Mobile dropdown -->
                    <details class="group border-t border-black/10">
                        <summary class="cursor-pointer px-4 py-3 text-sm font-semibold text-slate-800 hover:bg-slate-50 flex items-center justify-between">
                            <span>Solutions</span>
                            <span class="text-xs group-open:rotate-180 transition">▼</span>
                        </summary>
                        <div class="pb-2">
                            <a href="automotive" class="block px-6 py-2 text-sm text-slate-700 hover:bg-slate-50">Automotive</a>
                            <a href="railways" class="block px-6 py-2 text-sm text-slate-700 hover:bg-slate-50">Railways</a>
                            <a href="oil-gas" class="block px-6 py-2 text-sm text-slate-700 hover:bg-slate-50">Oil &amp; Gas</a>
                        </div>
                    </details>

                    <a href="capabilities" class="block px-4 py-3 text-sm font-semibold text-slate-800 hover:bg-slate-50 border-t border-black/10">Capabilities</a>
                    <a href="news" class="block px-4 py-3 text-sm font-semibold text-slate-800 hover:bg-slate-50 border-t border-black/10">News</a>
                    <a href="about" class="block px-4 py-3 text-sm font-semibold text-slate-800 hover:bg-slate-50 border-t border-black/10">About</a>
                    <a href="contact" class="block px-4 py-3 text-sm font-semibold text-slate-800 hover:bg-slate-50 border-t border-black/10">Contact</a>

                    <div class="p-4 border-t border-black/10">
                    <a href="get-quote"
                        class="w-full inline-flex items-center justify-center rounded-xl bg-slate-900 text-white px-5 py-3 text-sm font-semibold hover:bg-slate-800 transition">
                        Get a Quote
                    </a>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <script>
        const menuBtn = document.getElementById("menuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>
