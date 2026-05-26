<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Program Pelatihan', 'Daftar program J Global Academy lengkap dengan durasi, fasilitas, syarat, dan detail biaya.'); ?>
<?php render_navbar($site, $navItems, 'programs.php'); ?>

<main class="py-20">
    <div class="container">
        <?php section_header('PROGRAM PELATIHAN', 'Pilih program sesuai tujuan karier', 'Setiap program memiliki detail durasi, fasilitas, persyaratan, biaya, dan tombol daftar.'); ?>
        <div class="grid gap-8">
            <?php foreach ($programs as $program): render_program_card($program, $site['admin_whatsapp']); endforeach; ?>
        </div>
    </div>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
