import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/styles.min.css', // Tambahkan ini jika belum ada
                'resources/js/app.js',         // File JS utama
            ],
            refresh: true,
        }),
    ],
});
