module.exports = {
  content: [
    "./*.{html,php}"
  ],
  theme: {
    extend: {
      colors: {
        bg: '#0b0b0e',
        card: '#0f1115',
        accent: { DEFAULT: '#8B5CF6', light: '#A78BFA', glow: '#C7B9FF' }
      },
      fontFamily: {
        display: ['Poppins', 'Inter', 'sans-serif'],
        body: ['Inter', 'sans-serif']
      },
      boxShadow: {
        'neon': '0 6px 30px rgba(139,92,246,0.18), 0 0 40px rgba(139,92,246,0.12)'
      },
      animation: {
        marquee: 'marquee 50s linear infinite',
      },
      keyframes: {
        marquee: {
          '0%': { transform: 'translateX(0%)' },
          '100%': { transform: 'translateX(-50%)' },
        }
      }
    }
  },
  plugins: [],
}