<?php
function render_head(array $site, string $title, string $description = ''): void
{
    $description = $description ?: $site['description'];
    ?>
    <!DOCTYPE html>
    <html lang="id" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= e($title) ?> | <?= e($site['name']) ?></title>
        <meta name="description" content="<?= e($description) ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="assets/styles.css">
    </head>
    <body class="bg-[#fffdf7] text-slate-950 antialiased">
    <?php
}

function render_navbar(array $site, array $navItems, string $active = ''): void
{
    ?>
    <header class="sticky top-0 z-40 border-b border-slate-200/80 bg-white/90 shadow-sm backdrop-blur-xl">
        <div class="container flex min-h-20 items-center justify-between gap-6">
            <a href="index.php" class="flex items-center gap-3" aria-label="<?= e($site['name']) ?>">
                <img src="assets/img/logo.png" class="w-36 h-auto" alt="Logo <?= e($site['name']) ?>" loading="lazy">
            </a>
            <nav class="hidden items-center gap-7 text-sm font-bold lg:flex" aria-label="Navigasi utama">
                <?php foreach ($navItems as $item): ?>
                    <a class="<?= $active === $item['href'] ? 'text-brand' : 'hover:text-brand' ?>" href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
                <?php endforeach; ?>
            </nav>
            <a class="hidden rounded-full bg-slate-950 px-5 py-3 text-sm font-black text-white shadow-accent transition hover:-translate-y-1 lg:inline-flex" href="register.php">Daftar Sekarang</a>
            <button id="menuToggle" class="grid size-11 place-items-center rounded-lg bg-slate-100 text-xl font-black lg:hidden" type="button" aria-label="Buka menu">=</button>
        </div>
        <nav id="mobileMenu" class="container hidden pb-5 text-sm font-bold lg:hidden">
            <div class="grid gap-2 rounded-xl border border-slate-200 bg-white p-3 shadow-lg">
                <?php foreach ($navItems as $item): ?>
                    <a class="rounded-lg px-4 py-3 hover:bg-[#fff3cf] hover:text-brand" href="<?= e($item['href']) ?>"><?= e($item['label']) ?></a>
                <?php endforeach; ?>
                <a class="rounded-lg bg-slate-950 px-4 py-3 text-center text-white" href="register.php">Daftar Sekarang</a>
            </div>
        </nav>
    </header>
    <?php
}

function render_footer(array $site, array $programs): void
{
    ?>
    <footer class="border-t border-slate-200 bg-white py-14">
        <div class="container grid gap-8 md:grid-cols-2 lg:grid-cols-[1.3fr_1fr_1fr_1fr]">
            <div>
                <strong class="text-xl font-black text-brand"><?= e($site['name']) ?></strong>
                <p class="mt-4 leading-8 text-slate-600"><?= e($site['description']) ?></p>
                <p class="mt-4 text-sm text-slate-500">&copy; 2026 <?= e($site['name']) ?>. All Rights Reserved.</p>
            </div>
            <div>
                <h3 class="font-black">Alamat</h3>
                <p class="mt-4 leading-8 text-slate-600"><?= e($site['address']) ?></p>
            </div>
            <div>
                <h3 class="font-black">Kontak</h3>
                <p class="mt-4 leading-8 text-slate-600">WhatsApp: +<?= e($site['admin_whatsapp']) ?><br>Email: <?= e($site['email']) ?></p>
            </div>
            <div>
                <h3 class="font-black">Program</h3>
                <p class="mt-4 leading-8 text-slate-600"><?= e($programs[0]['name']) ?><br><?= e($programs[1]['name']) ?></p>
            </div>
        </div>
    </footer>
    <?php
}

function render_whatsapp_button(array $site): void
{
    $message = 'Halo admin ' . $site['name'] . ', saya ingin konsultasi program pelatihan.';
    ?>
    <a class="pulse fixed bottom-6 right-6 z-50 grid size-16 place-items-center rounded-full bg-[#25d366] text-white shadow-2xl transition hover:scale-110" href="<?= e(wa_link($site['admin_whatsapp'], $message)) ?>" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
        <img class="size-8" src="assets/img/whatsapp.png" alt="" aria-hidden="true">
    </a>
    <?php
}

function render_scripts(): void
{
    ?>
    <script src="assets/app.js"></script>
    </body>
    </html>
    <?php
}

function section_header(string $label, string $title, string $text = ''): void
{
    ?>
    <div class="reveal slide-up mb-10 flex flex-wrap items-end justify-between gap-5">
        <div>
            <span class="rounded-md bg-[#fff3cf] px-4 py-2 text-xs font-black text-brand"><?= e($label) ?></span>
            <h2 class="mt-5 text-3xl font-black leading-tight sm:text-5xl"><?= e($title) ?></h2>
        </div>
        <?php if ($text): ?><p class="max-w-xl leading-8 text-slate-600"><?= e($text) ?></p><?php endif; ?>
    </div>
    <?php
}

function render_program_card(array $program, string $siteNumber): void
{
    $message = 'Halo admin, saya ingin daftar program ' . $program['name'] . '.';
    ?>
    <article id="<?= e($program['slug']) ?>" class="reveal slide-up overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg shadow-slate-950/5 transition hover:-translate-y-2 hover:shadow-soft">
        <img class="h-56 w-full object-cover" src="<?= e($program['image']) ?>" alt="<?= e($program['name']) ?>" loading="lazy">
        <div class="grid gap-5 p-6">
            <div>
                <h3 class="text-xl font-black text-slate-950"><?= e($program['name']) ?></h3>
                <p class="mt-3 leading-7 text-slate-600"><?= e($program['description']) ?></p>
            </div>
            <div class="grid gap-3 text-sm text-slate-700">
                <p><strong>Durasi:</strong> <?= e($program['duration']) ?></p>
                <p><strong>Biaya:</strong> <span class="font-black text-brand"><?= e($program['cost']) ?></span></p>
                <p><strong>Fasilitas:</strong> <?= e(implode(', ', $program['facilities'])) ?></p>
                <p><strong>Syarat:</strong> <?= e(implode(', ', $program['requirements'])) ?></p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a class="rounded-full bg-slate-950 px-5 py-3 text-sm font-black text-white" href="register.php?program=<?= e($program['slug']) ?>">Daftar Sekarang</a>
                <a class="rounded-full border border-slate-300 px-5 py-3 text-sm font-black hover:border-brand hover:text-brand" href="<?= e(wa_link($siteNumber, $message)) ?>" target="_blank" rel="noopener">Tanya Biaya</a>
            </div>
        </div>
    </article>
    <?php
}

function render_testimonial_card(array $item): void
{
    ?>
    <article class="reveal slide-up rounded-2xl border border-slate-200 bg-white p-6 shadow-lg shadow-slate-950/5">
        <div class="flex items-center gap-4">
            <img class="size-16 rounded-full object-cover" src="<?= e($item['photo']) ?>" alt="Foto <?= e($item['name']) ?>" loading="lazy">
            <div>
                <h3 class="font-black"><?= e($item['name']) ?></h3>
                <p class="text-sm text-slate-500"><?= e($item['program']) ?> - <?= e($item['year']) ?></p>
            </div>
        </div>
        <p class="mt-5 leading-8 text-slate-600">"<?= e($item['quote']) ?>"</p>
    </article>
    <?php
}

function render_job_card(array $job, string $siteNumber): void
{
    $message = 'Halo admin, saya ingin info lowongan ' . $job['position'] . ' di ' . $job['company'] . '.';
    ?>
    <article class="reveal slide-up rounded-2xl border border-slate-200 bg-white p-6 shadow-lg shadow-slate-950/5">
        <div class="flex flex-wrap items-start justify-between gap-3">
            <div>
                <h3 class="text-xl font-black"><?= e($job['position']) ?></h3>
                <p class="mt-1 font-semibold text-brand"><?= e($job['company']) ?></p>
            </div>
            <?php if ($job['partner']): ?><span class="rounded-full bg-[#fff3cf] px-3 py-1 text-xs font-black text-brand">Mitra Kerja Sama</span><?php endif; ?>
        </div>
        <div class="mt-5 grid gap-3 text-sm leading-7 text-slate-600">
            <p><strong>Lokasi:</strong> <?= e($job['location']) ?></p>
            <p><strong>Kualifikasi:</strong> <?= e($job['qualification']) ?></p>
            <p><?= e($job['description']) ?></p>
            <p class="text-slate-500">Diposting: <?= e($job['date']) ?></p>
        </div>
        <a class="mt-5 inline-flex rounded-full bg-accent px-5 py-3 text-sm font-black text-slate-950" href="<?= e(wa_link($siteNumber, $message)) ?>" target="_blank" rel="noopener">Lihat Detail</a>
    </article>
    <?php
}

function render_registration_form(array $programs, array $site): void
{
    $selected = $_GET['program'] ?? '';
    ?>
    <form id="registrationForm" class="grid gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-soft sm:p-8" data-wa="<?= e($site['admin_whatsapp']) ?>">
        <div class="grid gap-4 sm:grid-cols-2">
            <label class="grid gap-2 font-semibold">Nama lengkap<input required name="nama" class="input" type="text" placeholder="Nama sesuai KTP"></label>
            <label class="grid gap-2 font-semibold">Nomor WhatsApp<input required name="whatsapp" class="input" type="tel" placeholder="08xxxxxxxxxx"></label>
            <label class="grid gap-2 font-semibold">Email<input required name="email" class="input" type="email" placeholder="nama@email.com"></label>
            <label class="grid gap-2 font-semibold">Pendidikan terakhir<input required name="pendidikan" class="input" type="text" placeholder="SMA/SMK/D3/S1"></label>
        </div>
        <label class="grid gap-2 font-semibold">Alamat<textarea required name="alamat" class="input min-h-24" placeholder="Alamat domisili"></textarea></label>
        <label class="grid gap-2 font-semibold">Program yang dipilih
            <select required name="program" class="input">
                <option value="">Pilih program</option>
                <?php foreach ($programs as $program): ?>
                    <option value="<?= e($program['name']) ?>" <?= $selected === $program['slug'] ? 'selected' : '' ?>><?= e($program['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label class="grid gap-2 font-semibold">Pesan tambahan<textarea required name="pesan" class="input min-h-28" placeholder="Ceritakan kebutuhan atau jadwal yang diinginkan"></textarea></label>
        <button class="rounded-full bg-accent px-6 py-4 text-sm font-black text-slate-950 shadow-accent transition hover:-translate-y-1" type="submit">Kirim via WhatsApp</button>
        <p class="text-sm leading-7 text-slate-500">Data belum disimpan ke database. Setelah submit, pesan akan diarahkan ke WhatsApp admin dengan format rapi.</p>
    </form>
    <?php
}
