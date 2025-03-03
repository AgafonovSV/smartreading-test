import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import { resolve } from 'path'

// https://vite.dev/config/
export default defineConfig({
  resolve: {
    alias: {
      '@': resolve(__dirname, './src'),
    },
  },
  plugins: [vue()],
  server: {
    host: true,
    port: 5173
  },
  preview: {
      host: true,
      port: 5173
  }
})
