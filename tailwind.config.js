/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
        'Poppins': ['Poppins', 'sans-serif']
    },
    extend: {
        keyframes: {
            ShowContentCarousel: {
                '0%': {
                    transform: 'translateY(20px)',
                    opacity: '0',
                    filter: 'blur(2px)',
                },
                '100%': {
                    transform: 'translateY(0px)',
                    opacity: '1',
                    filter: 'blur(0px)',
                }
            },
            ShowImageCarousel: {
                '0%': {
                    opacity: '0',
                    filter: 'blur(20px)',
                },
                '100%': {
                    opacity: '1',
                    filter: 'blur(0px)',
                }
            },
            ShowFirstSlide: {
                '0%': {
                    right: '256px',
                    opacity: '2',
                    transform: 'scale(110%, 110%)',
                },
                '100%': {
                    right: '320px',
                    opacity: '1',
                    transform: 'scale(1.8, 1.8)',
                }
            },
        },
        animation: {
            ShowContentCarousel: 'ShowContentCarousel 2s ease-in-out forwards',
            ShowImageCarousel: 'ShowImageCarousel 1.5s ease-in-out forwards',
            ShowFirstSlide: 'ShowFirstSlide 0.5s ease-in forwards',
        },
        boxShadow: {
            'BoxLandingPage': '-5px 7px 5px rgba(0, 0, 0, 0.25)',
        },
        colors: {
            'FFFEFE': '#FFFEFE',
            'E8E8E8': '#E8E8E8',
            'E2DFDF': '#E2DFDF',
            '3A3838': '#3A3838',
            'B1B1B1': '#B1B1B1',
            'ECECEC': '#ECECEC',
            '315BC9': '#315BC9',
        },
    },
  },
  plugins: [],
}

