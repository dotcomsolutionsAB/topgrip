<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Our Solutions</h2>
            <p class="text-lg text-slate-600">Expert industrial solutions across multiple sectors</p>
        </div>
        <?php
        $services = [
            [
                'title' => 'Automotive',
                'desc' => 'We manufacture & assemble Automotive fixtures. (BIW & Powertrain).',
                'img' => 'assets/images/home_about_1.jpg',
                'alt' => 'Automotive',
                'link' => 'solutions/automotive',
            ],
            [
                'title' => 'Railways',
                'desc' => 'Topgrip has been working with Indian Railways since past 45 years.',
                'img' => 'assets/images/home_about_2.jpg',
                'alt' => 'Railways',
                'link' => 'solutions/railways',
            ],
            [
                'title' => 'Oil & Gas',
                'desc' => 'Having vast experience in the manufacturing industry in Railways & Automotive. Topgrip is now venturing into the Oil & Gas market.',
                'img' => 'assets/images/home_about_3.jpg',
                'alt' => 'Oil & Gas',
                'link' => 'solutions/oil-gas',
            ],
        ];
        ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($services as $service): ?>
                <div class="bg-slate-50 rounded-2xl shadow p-2 flex flex-col items-center text-center">
                    <img src="<?= htmlspecialchars($service['img']) ?>" alt="<?= htmlspecialchars($service['alt']) ?>" class="w-full h-48 object-cover rounded-xl mb-6">
                    <h3 class="text-2xl font-semibold mb-2 text-slate-900"><?= htmlspecialchars($service['title']) ?></h3>
                    <p class="mb-4 text-slate-700"><?= htmlspecialchars($service['desc']) ?></p>
                    <div class="w-full flex justify-start">
                        <a href="<?= htmlspecialchars($service['link']) ?>" class="px-6 py-2 rounded-xl bg-slate-100 text-slate-800 font-semibold hover:bg-slate-200 transition">Learn More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>