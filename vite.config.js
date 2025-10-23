import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/sass/app.css',
                'resources/sass/app.sass', 
                'resources/sass/reset.sass', 
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@use "resources/scss/variables" as *;`
            }
        }
    }
});

