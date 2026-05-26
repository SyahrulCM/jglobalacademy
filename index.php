<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Home', 'Company profile J Global Academy dengan program digital marketing, testimoni, kolaborasi, dan pendaftaran online.'); ?>
<?php render_navbar($site, $navItems, 'index.php'); ?>

<main>
    <section class="hero-pattern overflow-hidden py-20 lg:py-28">
        <div class="container grid items-center gap-12 lg:grid-cols-[1.05fr_.95fr]">
            <div class="reveal slide-left">
                <span class="rounded-full bg-white px-4 py-2 text-sm font-black text-brand shadow-sm">Community Digital Marketing Training</span>
                <h1 class="mt-7 max-w-3xl text-5xl font-black leading-[.95] tracking-tight sm:text-7xl">Bangun brand, konten, dan strategi digital yang lebih matang.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600"><?= e($site['description']) ?></p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a class="rounded-full bg-slate-950 px-6 py-4 text-sm font-black text-white shadow-accent transition hover:-translate-y-1" href="register.php">Daftar Sekarang</a>
                    <a class="rounded-full bg-accent px-6 py-4 text-sm font-black text-slate-950 shadow-brand transition hover:-translate-y-1" href="<?= e(wa_link($site['admin_whatsapp'], 'Halo admin, saya ingin konsultasi program J Global Academy.')) ?>" target="_blank" rel="noopener">Konsultasi WhatsApp</a>
                </div>
            </div>
            <div class="reveal slide-right rounded-3xl bg-white p-4 shadow-soft">
                <img class="aspect-[4/3] w-full rounded-2xl object-cover" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1000&q=80" alt="Peserta pelatihan kerja berdiskusi" loading="lazy">
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container grid gap-10 lg:grid-cols-[.9fr_1.1fr] lg:items-center">
            <div class="reveal slide-left">
                <span class="rounded-md bg-[#fff3cf] px-4 py-2 text-xs font-black text-brand">PROFIL ACADEMY</span>
                <h2 class="mt-5 text-4xl font-black leading-tight">Komunitas training yang fokus pada pertumbuhan digital.</h2>
            </div>
            <p class="reveal slide-right leading-8 text-slate-600">Kami menyediakan workshop, konsultasi privat, materi pemasaran digital, informasi kolaborasi, dan pendampingan agar peserta lebih siap mengembangkan brand atau bisnisnya.</p>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container">
            <?php section_header('PROGRAM', 'Program pelatihan unggulan', 'Ringkasan program dengan durasi, fasilitas, syarat, biaya, dan tombol daftar.'); ?>
            <div class="grid gap-6 md:grid-cols-3">
                <?php foreach ($programs as $program): render_program_card($program, $site['admin_whatsapp']); endforeach; ?>
            </div>
            <div class="mt-8 text-center"><a class="font-black text-brand" href="programs.php">Lihat semua detail program</a></div>
        </div>
    </section>

    <section class="py-20">
        <div class="container">
            <?php section_header('KEUNGGULAN', 'Kenapa memilih J Global Academy?', 'Didesain agar peserta mudah belajar, siap praktik, dan punya arahan pemasaran yang jelas.'); ?>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($advantages as $i => $advantage): ?>
                    <div class="reveal slide-up rounded-2xl border border-slate-200 bg-white p-6 shadow-lg shadow-slate-950/5">
                        <span class="grid size-12 place-items-center rounded-full bg-[#fff3cf] font-black text-brand">0<?= $i + 1 ?></span>
                        <p class="mt-5 leading-8 text-slate-700"><?= e($advantage) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container">
            <?php section_header('TESTIMONI', 'Cerita singkat alumni', 'Pengalaman peserta setelah mengikuti pelatihan.'); ?>
            <div class="grid gap-6 md:grid-cols-3">
                <?php foreach (array_slice($testimonials, 0, 3) as $item): render_testimonial_card($item); endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container rounded-3xl bg-slate-950 p-8 text-white shadow-brand md:p-12">
            <div class="reveal slide-up grid gap-8 md:grid-cols-[1fr_auto] md:items-center">
                <div>
                    <h2 class="text-3xl font-black sm:text-5xl">Siap ikut program?</h2>
                    <p class="mt-4 max-w-2xl leading-8 text-white/80">Isi formulir online, lalu data akan dikirim ke WhatsApp admin J Global Academy untuk tindak lanjut.</p>
                </div>
                <a class="rounded-full bg-accent px-6 py-4 text-sm font-black text-slate-950" href="register.php">Isi Form Daftar</a>
            </div>
        </div>
    </section>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
