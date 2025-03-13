import { defineConfig } from 'vite';

import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

// noinspection JSUnusedGlobalSymbols
export default defineConfig({
    css: {
        preprocessorOptions: {
            scss: {
                api: 'modern-compiler'
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/email.scss',
                'resources/sass/errors.scss',
                'resources/sass/themes/ask.scss',
                'resources/sass/themes/bestof.scss',
                'resources/sass/themes/fanfare.scss',
                'resources/sass/themes/irl.scss',
                'resources/sass/themes/jobs.scss',
                'resources/sass/themes/metafilter.scss',
                'resources/sass/themes/metatalk.scss',
                'resources/sass/themes/music.scss',
                'resources/sass/themes/projects.scss',
                'resources/css/filament/admin/theme.css',
                'resources/js/app.js',
            ],
            refresh: [
                'app/Livewire/**',
            ],
            publicDirectory: 'public_html',
            build: {
                outDir: 'public_html/build',
            },
        })
    ],
    resolve: {
        alias: {
            $fonts: resolve('./public_html/fonts')
        }
    }
});
