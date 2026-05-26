<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Kontak dan Lokasi', 'Alamat J Global Academy, WhatsApp, email, Google Maps, dan form kontak sederhana.'); ?>
<?php render_navbar($site, $navItems, 'contact.php'); ?>

<main>
    <section class="py-20">
        <div class="container grid gap-8 lg:grid-cols-[.8fr_1.2fr]">
            <div class="reveal slide-left rounded-2xl bg-white p-8 shadow-soft">
                <span class="rounded-md bg-[#fff3cf] px-4 py-2 text-xs font-black text-brand">KONTAK</span>
                <h1 class="mt-5 text-4xl font-black">Hubungi admin J Global Academy</h1>
                <p class="mt-5 leading-8 text-slate-600"><?= e($site['address']) ?></p>
                <div class="mt-6 grid gap-3 text-slate-700">
                    <p><strong>WhatsApp:</strong> +<?= e($site['admin_whatsapp']) ?></p>
                    <p><strong>Email:</strong> <?= e($site['email']) ?></p>
                </div>
                <a class="mt-7 inline-flex rounded-full bg-accent px-6 py-4 text-sm font-black text-slate-950" href="<?= e(wa_link($site['admin_whatsapp'], 'Halo admin, saya ingin bertanya tentang J Global Academy.')) ?>" target="_blank" rel="noopener">Chat WhatsApp</a>
            </div>
            <form class="reveal slide-right grid gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-soft">
                <h2 class="text-2xl font-black">Form kontak sederhana</h2>
                <input class="input" required type="text" placeholder="Nama">
                <input class="input" required type="email" placeholder="Email">
                <textarea class="input min-h-32" required placeholder="Pesan"></textarea>
                <button class="rounded-full bg-brand px-6 py-4 text-sm font-black text-white" type="submit">Kirim Pesan</button>
                <p class="text-sm text-slate-500">Placeholder frontend. Integrasi backend/email dapat ditambahkan nanti.</p>
            </form>
        </div>
    </section>

    <section aria-label="Lokasi J Global Academy">
        <iframe class="h-96 w-full border-0" title="Peta lokasi J Global Academy" src="<?= e($site['maps_embed']) ?>" loading="lazy"></iframe>
    </section>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
