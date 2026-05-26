# Website Company Profile J Global Academy

Website frontend PHP ringan untuk J Global Academy. Struktur fitur tetap lengkap: profile, program, galeri/alumni, lowongan atau kolaborasi mitra, kontak, maps, floating WhatsApp, dan form pendaftaran online.

## Struktur Folder

- `index.php` - Homepage.
- `profile.php` - Profile academy, visi misi, legalitas placeholder, tim.
- `programs.php` - Daftar program, durasi, fasilitas, syarat, biaya.
- `gallery.php` - Galeri kegiatan dan testimoni alumni.
- `jobs.php` - Lowongan/kolaborasi mitra.
- `register.php` - Form daftar online.
- `contact.php` - Kontak, form kontak sederhana, dan Google Maps.
- `content.php` - Semua data dummy/placeholder.
- `components/components.php` - Komponen reusable.
- `assets/styles.css` - CSS custom ringan.
- `assets/app.js` - Hamburger menu, animasi, dan submit form ke WhatsApp.

## Cara Menjalankan

```powershell
php -S 127.0.0.1:8000 -t .
```

Buka `http://127.0.0.1:8000/index.php`.

## Tempat Mengganti Data

Edit `content.php`.

- Nomor WhatsApp admin: `$site['admin_whatsapp']`
- Alamat: `$site['address']`
- Link Google Maps embed: `$site['maps_embed']`
- Data program dan biaya: array `$programs`
- Testimoni alumni: array `$testimonials`
- Lowongan/kolaborasi mitra: array `$jobs`
- Galeri foto: array `$gallery`
