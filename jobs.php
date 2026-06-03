<?php require __DIR__ . '/content.php'; require __DIR__ . '/components/components.php'; ?>
<?php render_head($site, 'Lowongan dan Kolaborasi Mitra', 'Daftar lowongan dan peluang kolaborasi dari mitra J Global Academy.'); ?>
<?php render_navbar($site, $navItems, 'jobs.php'); ?>

<main class="py-20">
    <div class="container">
        <?php section_header('LOWONGAN KERJA', 'Informasi lowongan dari mitra', 'Data lowongan siap diganti dengan informasi kerja sama perusahaan yang valid.'); ?>
        <div class="grid gap-6 lg:grid-cols-2">
            <?php foreach ($jobs as $job): render_job_card($job, $site['admin_whatsapp']); endforeach; ?>
        </div>
    </div>
</main>

<?php render_footer($site, $programs); render_whatsapp_button($site); render_scripts(); ?>
