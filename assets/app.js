document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('#menuToggle');
    const mobileMenu = document.querySelector('#mobileMenu');

    menuToggle?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');
    });

    mobileMenu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
    });

    const revealItems = [...document.querySelectorAll('.reveal')];
    const show = (item) => item.classList.add('is-visible');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    show(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -8% 0px' });

        setTimeout(() => revealItems.forEach((item, index) => {
            item.style.animationDelay = `${Math.min(index * 70, 300)}ms`;
            item.getBoundingClientRect().top < window.innerHeight * .94
                ? setTimeout(() => show(item), Math.min(index * 70, 300))
                : observer.observe(item);
        }), 120);
    } else {
        revealItems.forEach(show);
    }

    const form = document.querySelector('#registrationForm');
    form?.addEventListener('submit', (event) => {
        event.preventDefault();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const data = new FormData(form);
        const message = [
            'Halo admin, saya ingin daftar online.',
            '',
            `Nama: ${data.get('nama')}`,
            `WhatsApp: ${data.get('whatsapp')}`,
            `Email: ${data.get('email')}`,
            `Alamat: ${data.get('alamat')}`,
            `Program: ${data.get('program')}`,
            `Pendidikan terakhir: ${data.get('pendidikan')}`,
            `Pesan: ${data.get('pesan')}`,
        ].join('\n');

        const number = String(form.dataset.wa || '').replace(/\D/g, '');
        window.open(`https://wa.me/${number}?text=${encodeURIComponent(message)}`, '_blank', 'noopener');
    });
});
