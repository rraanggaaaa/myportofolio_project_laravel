<script>
        // Mengambil elemen-elemen yang diperlukan
        const toggleButton = document.getElementById('toggle');
        const body = document.body;

        // Mengatur tema awal saat halaman dimuat
        const currentTheme = localStorage.getItem('theme');
        if (currentTheme === 'dark') {
            body.classList.add('dark-mode');
            toggleButton.checked = true;
        }

        // Mengubah tema saat tombol di klik
        toggleButton.addEventListener('change', function() {
            if (this.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
<footer>
    <p>&copy; 2023 Portofolio Saya. All rights reserved.</p>
</footer>