<?php include 'header.php'; ?>

        <!-- Breadcrumbs -->
        <nav class="bg-slate-50 py-3 text-sm" aria-label="Breadcrumb">
            <div class="max-w-7xl mx-auto px-4 flex items-center space-x-2">
                <a href="/" class="text-slate-600 hover:text-slate-900">Home</a>
                <span class="text-slate-400">/</span>
                <span class="text-slate-800 font-semibold">News</span>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 text-left">
                <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-2">Latest News</h1>
                <p class="text-lg text-slate-600">Stay updated with Topgrip Industries</p>
            </div>
        </section>

        <!-- News Section -->
        <section class="py-16 bg-slate-50">
            <div class="max-w-5xl mx-auto px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">News & Updates</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-3xl mx-auto">
                    <div class="bg-white rounded-2xl shadow p-8">
                        <h3 class="text-xl font-semibold mb-2 text-slate-900">Coming soon</h3>
                        <p class="text-slate-500 text-sm mb-2">August 11, 2022</p>
                        <p class="text-slate-700">We're working on exciting updates. Stay tuned for more information.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-8">
                        <h3 class="text-xl font-semibold mb-2 text-slate-900">Coming soon</h3>
                        <p class="text-slate-500 text-sm mb-2">August 5, 2022</p>
                        <p class="text-slate-700">We're working on exciting updates. Stay tuned for more information.</p>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-8">
                        <h3 class="text-xl font-semibold mb-2 text-slate-900">Coming soon</h3>
                        <p class="text-slate-500 text-sm mb-2">July 6, 2022</p>
                        <p class="text-slate-700">We're working on exciting updates. Stay tuned for more information.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-slate-900">
            <div class="max-w-2xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Stay Connected</h2>
                <p class="text-lg text-slate-200 mb-6">Subscribe to our newsletter to receive the latest news and updates.</p>
                <form id="newsletter-form" class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto mt-4">
                    <input type="email" placeholder="Email address" required class="rounded-xl px-4 py-2 text-slate-900 flex-1 focus:outline-none focus:ring-2 focus:ring-slate-500">
                    <button type="submit" class="rounded-xl bg-slate-800 text-white px-5 py-2 font-semibold hover:bg-slate-700 transition">Subscribe</button>
                </form>
            </div>
        </section>

<?php include 'footer.php'; ?>
