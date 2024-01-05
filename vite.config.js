import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: 'public',
        manifest: true,
        emptyOutDir: false,
        rollupOptions: {
            input: ['assets/js/main.js', 'assets/css/app.css'],
        },
    },
    optimizeDeps: {
        include: ['assets/**/*.{js,css}'],
    },
});
