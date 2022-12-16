import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/admin.scss',
                'resources/js/script.js',
                'resources/js/app.js',
                // 'resources/js/users.js',
                // 'resources/js/categories.js',
                // 'resources/js/services.js',
                // 'resources/js/delete.js',
                // 'resources/js/doctors.js',
                // 'resources/js/terms.js',


            ],
            refresh: true,
        }),
    ],
});
