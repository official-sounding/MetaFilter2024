import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy'

import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';

// noinspection JSUnusedGlobalSymbols
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/themes/ask.scss',
                'resources/sass/themes/bestof.scss',
                'resources/sass/themes/fanfare.scss',
                'resources/sass/themes/irl.scss',
                'resources/sass/themes/jobs.scss',
                'resources/sass/themes/metafilter.scss',
                'resources/sass/themes/metatalk.scss',
                'resources/sass/themes/music.scss',
                'resources/sass/themes/projects.scss',
//                'resources/css/filament/admin/theme.css',
                'resources/js/app.js'
            ],
            publicDirectory: 'public_html',
            refresh: true
        })
    ],
    resolve: {
        alias: {
            $fonts: resolve('./public_html/fonts')
        }
    }
});
