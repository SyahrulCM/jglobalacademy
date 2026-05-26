<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Pendaftaran Online', 'Form daftar online J Global Academy yang mengarahkan data pendaftar ke WhatsApp admin.'); ?>
<?php render_navbar($site, $navItems, 'register.php'); ?>

<main class="py-20">
    <div class="container grid gap-10 lg:grid-cols-[.75fr_1.25fr] lg:items-start">
        <aside class="reveal slide-left rounded-2xl bg-brand p-8 text-white shadow-brand">
            <span class="text-sm font-black text-[#fff3cf]">DAFTAR ONLINE</span>
            <h1 class="mt-4 text-4xl font-black leading-tight">Isi data diri, lanjutkan via WhatsApp.</h1>
            <p class="mt-5 leading-8 text-white/85">Form ini untuk pendaftaran program J Global Academy. Setelah dikirim, WhatsApp akan terbuka dengan format pesan rapi untuk admin.</p>
        </aside>
        <div class="reveal slide-right">
            <?php render_registration_form($programs, $site); ?>
        </div>
    </div>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
