import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/js/jquery.js',
                'public/js/toastr.css',
                'public/js/toastr.js',
                'public/js/sweet-alert.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
        },
    },
});
