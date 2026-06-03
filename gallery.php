<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Galeri Foto dan Alumni', 'Galeri kegiatan training, foto alumni, dan testimoni J Global Academy.'); ?>
<?php render_navbar($site, $navItems, 'gallery.php'); ?>

<main>
    <section class="py-20">
        <div class="container">
            <?php section_header('GALERI', 'Kegiatan training dan alumni', 'Dokumentasi yang bisa diganti dengan foto kegiatan asli J Global Academy.'); ?>
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($gallery as $item): ?>
                    <figure class="reveal slide-up overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg shadow-slate-950/5">
                        <img class="aspect-[4/3] w-full object-cover" src="<?= e($item['image']) ?>" alt="<?= e($item['title']) ?>" loading="lazy">
                        <figcaption class="p-5 font-black"><?= e($item['title']) ?></figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="container">
            <?php section_header('ALUMNI', 'Testimoni alumni', 'Cerita alumni setelah mengikuti program pelatihan.'); ?>
            <div class="grid gap-6 md:grid-cols-3">
                <?php foreach ($testimonials as $item): render_testimonial_card($item); endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
