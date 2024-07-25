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
            publicDirectory: 'public',
            refresh: true
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/sass/vendor/fontello/animation.css',
                    dest: '../css/vendor/fontello'
                },
                {
                    src: 'resources/sass/vendor/fontello/metafilter-fontello.css',
                    dest: '../css/vendor/fontello'
                }
            ]
        })
    ],
    resolve: {
        alias: {
            $fonts: resolve('./public/fonts')
        }
    }
});
