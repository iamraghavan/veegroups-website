import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@assets': path.resolve(__dirname, 'public/assets'),
        },
    },
    server: {
        fs: {
            allow: [
                path.resolve(__dirname, 'public/assets'),
            ],
        },
    },
});
