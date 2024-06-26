import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: 'http://localhost:8091',
        },
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname),
            '@resources': path.resolve(__dirname, 'resources'),
        }
    }
});
