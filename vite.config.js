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
                'resources/js/faq.js',
                'resources/js/login.js',
                'resources/js/offer.js',
                'resources/js/password.js',
                'resources/js/profile.js',
                'resources/js/register.js',
                'resources/js/reset.js',
                'resources/js/team.js',
                'resources/js/visit.js',


            ],
            refresh: true,
        }),
    ],
});
