import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: 'public',
        manifest: true,
        emptyOutDir: false,
        rollupOptions: {
            input: ['resources/js/main.js', 'resources/css/app.css'],
        },
    },
    optimizeDeps: {
        include: ['resources/**/*.{js,css}'],
    },
});
