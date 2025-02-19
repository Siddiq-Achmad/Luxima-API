import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import fs from 'fs-extra';

const folder = {
    src: "resources/", // source files
    src_assets: "resources/", // source assets files
    dist: "public/", // build files
    dist_assets: "public/build/" //build assets files
};


export default defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: folder.dist_assets,
        cssCodeSplit: true,
        rollupOptions: {
            // input: {
            //     main: "resources/views/welcome.blade.php", // Sesuaikan dengan struktur proyek Anda
            // },
            output: {
                assetFileNames: (css) => {
                    if (css.name.split('.').pop() == 'css') {
                        return 'css/' + `[name]` + '.css';
                    } else {
                        return 'icons/' + css.name;
                    }
                },
                entryFileNames: 'js/' + `[name]` + `.js`,
            },
        },
    },
    resolve: {
        alias: {
            '@fonts': '/resources/fonts',
        }
    },
    optimizeDeps: {
        include: ["axios"], // Sesuaikan dengan proyek Anda
    },
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/fancybox.css',
                'resources/css/remixicon.css',
                'resources/css/swiper-bundle.min.css',
            ],
            refresh: true,
        }),
        {
            name: 'copy-assets',
            async writeBundle() {
                try {
                    // Copy images, json, fonts, and js
                    await Promise.all([
                        fs.copy(folder.src_assets + 'images', folder.dist_assets + 'images'),
                        fs.copy(folder.src_assets + 'fonts', folder.dist_assets + 'fonts'),
                        fs.copy(folder.src_assets + 'js', folder.dist_assets + 'js'),
                    ]);

                } catch (error) {
                    console.error('Error copying assets:', error);
                }
            },
        },
    ],
});
