<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Profile', 'Tentang J Global Academy, visi misi, legalitas, keunggulan, dan struktur tim.'); ?>
<?php render_navbar($site, $navItems, 'profile.php'); ?>

<main>
    <section class="bg-white py-20">
        <div class="container">
            <?php section_header('PROFILE', 'Tentang ' . $site['name'], 'Profil academy dan komunitas digital marketing dengan data placeholder yang siap diganti.'); ?>
            <div class="grid gap-8 lg:grid-cols-[1fr_1fr]">
                <div class="reveal slide-left rounded-2xl bg-slate-50 p-8">
                    <h2 class="text-2xl font-black">Tentang Academy</h2>
                    <p class="mt-4 leading-8 text-slate-600"><?= e($site['name']) ?> adalah komunitas dan lembaga training digital marketing yang menyediakan program berbasis praktik untuk membantu peserta mengembangkan brand, konten, iklan, dan funnel bisnis.</p>
                </div>
                <div class="reveal slide-right rounded-2xl bg-slate-50 p-8">
                    <h2 class="text-2xl font-black">Legalitas / Izin Lembaga</h2>
                    <p class="mt-4 leading-8 text-slate-600">Data legalitas/registrasi belum tersedia - gunakan placeholder ini sampai data resmi dimasukkan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container grid gap-6 md:grid-cols-2">
            <article class="reveal slide-left rounded-2xl border border-slate-200 bg-white p-8 shadow-lg shadow-slate-950/5">
                <h2 class="text-2xl font-black text-brand">Visi</h2>
                <p class="mt-4 leading-8 text-slate-600">Menjadi komunitas digital marketing terpercaya yang membantu peserta membangun bisnis dan personal brand secara praktikal.</p>
            </article>
            <article class="reveal slide-right rounded-2xl border border-slate-200 bg-white p-8 shadow-lg shadow-slate-950/5">
                <h2 class="text-2xl font-black text-brand">Misi</h2>
                <ul class="mt-4 grid gap-3 leading-8 text-slate-600">
                    <li>Menyediakan training praktis sesuai kebutuhan pemasaran digital.</li>
                    <li>Mendampingi peserta dalam strategi konten, ads, funnel, dan konsultasi bisnis.</li>
                    <li>Membangun jaringan komunitas dan mitra kolaborasi yang relevan.</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container">
            <?php section_header('TIM', 'Struktur dan tim', 'Gunakan placeholder ini sampai data tim resmi tersedia.'); ?>
            <div class="grid gap-5 md:grid-cols-3">
                <?php foreach ($team as $person): ?>
                    <article class="reveal slide-up rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-lg shadow-slate-950/5">
                        <div class="mx-auto grid size-20 place-items-center rounded-full bg-[#fff3cf] text-xl font-black text-brand"><?= e(substr($person['name'], 0, 1)) ?></div>
                        <h3 class="mt-5 font-black"><?= e($person['name']) ?></h3>
                        <p class="mt-2 text-sm text-slate-500"><?= e($person['role']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
