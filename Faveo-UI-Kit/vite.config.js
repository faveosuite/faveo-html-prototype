import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import { resolve } from 'path'

export default defineConfig({
  plugins: [
    tailwindcss(),
  ],
  base: '/sakthi/faveo-html-prototype/Faveo-UI-Kit/',
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        starter: resolve(__dirname, 'starter.html'),
      },
    },
  },
})
