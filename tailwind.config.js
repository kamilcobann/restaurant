/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {
      backgroundImage:{
        // 'main-asset': "url(https://media-cdn.tripadvisor.com/media/photo-s/1d/7b/d7/d7/sisko-restoran.jpg)"
        'main-asset' : "url('/resources/assets/asset-bcg.jpg')",
        'logo' : "url('/resources/assets/logo.png')"
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

