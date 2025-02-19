const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addComponents, theme }) {
    addComponents({
        ':root': {
            '.fc': {
                '--fc-border-color': 'rgba(0,0,0, 0.10)',
                '--fc-button-bg-color': theme('colors.purple'),
                '--fc-button-border-color': theme('colors.purple'),
                '--fc-button-hover-bg-color': theme('colors.purple'),
                '--fc-button-hover-border-color': theme('colors.purple'),
                '--fc-button-active-bg-color': theme('colors.purple'),
                '--fc-button-active-border-color': theme('colors.purple'),
            }
        },
        '.fc-h-event .fc-event-main': {
            color: 'currentcolor'
        },
        '.fc-daygrid-event-dot' : {
            '@apply hidden': {},
        },
        '.fc .fc-toolbar': {
            '@apply flex-wrap gap-4': {},
        },
        ':is(:root .dark )': {
            '.fc': {
                '--fc-border-color': theme('colors.darkborder'),
            }
        }
    })
})