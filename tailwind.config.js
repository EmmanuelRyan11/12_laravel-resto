/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["public/index.html"],
  theme: {
    extend: {
      colors:{
        "ungu" : "#5267DF",
        "merah" : "#FA5959",
        "biru" : "#2A2A45",
        "abu-abu" : "#91949A2",
        "putih" : "#f7f7f7"
      },

      fontFamily:{
        Poppins : ["Poppins, sans-serif"]
          },
      
      container:{
        center:true,
        padding:"1rem",
        screens:{
          lg:"1124px",
          xl:"1124px",
          "2xl": "1124px",
        },
      }
    },
  },
  plugins: [],
}