<?php
$team = [
    [
        'name' => 'Zakir Hussain',
        'role' => 'CEO',
        'img' => 'assets/images/teams/ceo.jpg',
    ],
    [
        'name' => 'Abdul Kader Kagalwala',
        'role' => 'Head of Operations',
        'img' => 'assets/images/teams/operation.jpg',
    ],
    [
        'name' => 'Yusuf Habib',
        'role' => 'Engineering',
        'img' => 'assets/images/teams/engineering.jpg',
    ],
    [
        'name' => 'Mufaddal Zakirhusain',
        'role' => 'Manufacturing & Innovation',
        'img' => 'assets/images/teams/maf_innovation.jpg',
    ],
];
?>
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our Team</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <?php foreach ($team as $member): ?>
                <div class="flex flex-col items-center">
                    <div class="w-48 h-48 rounded-full bg-slate-100 flex items-center justify-center border-4 border-slate-200 mb-4 overflow-hidden">
                        <img src="<?= htmlspecialchars($member['img']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="w-full h-full object-cover rounded-full" onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'text-6xl\'>👤</span>';">
                    </div>
                    <h4 class="text-lg font-semibold text-slate-900"><?= htmlspecialchars($member['name']) ?></h4>
                    <p class="text-slate-500"><?= htmlspecialchars($member['role']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>