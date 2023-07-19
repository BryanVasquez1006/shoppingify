/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
   
    
  ],
  theme: {
    extend: {
      width: {
        'modal-w': "430px",
        'list-modal-w': "1425px"
      }
    },
  },
  plugins: [
 
  ],
}