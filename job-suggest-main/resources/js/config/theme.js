import { extendTheme } from '@chakra-ui/react';

export const theme = extendTheme({
  colors: {
    primary: '#F54E0C',
    primaryDark: '#DC4408',
    warning: '#FFF193',

    sky: '#07AAC1',
    skySoft: '#CFF6FF',

    red: '#E60B74',
    redSoft: '#FFE7F3',
  },

  components: {
    Text: {
      baseStyle: {
        margin: 0,
      },
    },

    FormLabel: {
      baseStyle: {
        fontSize: 'small',
        fontWeight: 'normal',
        opacity: 0.8,
      },
    },

    Input: {
      variants: {
        filled: {
          field: {
            fontSize: '16px',
            padding: '20px',
            borderRadius: '2px',
            background: 'white',
            borderColor: '#D1D1D1',
            borderWidth: '0.5px',
            _placeholder: {
              color: 'gray.500', // Placeholder color
            },
          },
        },
      },
    },

    Button: {
      variants: {
        primary: {
          bg: 'primary',
          color: 'white',
          borderRadius: '2.5px',
          borderWidth: '1px',
          borderColor: 'primary',
          _hover: {
            background: 'primaryDark',
          },
        },

        outline: {
          bg: 'transparent',
          color: 'primary',
          borderWidth: '1px',
          borderColor: 'primary',
          borderRadius: '2.5px',
        },

        secondary: {
          bg: '#F5F5F5',
          color: '#5B5B5B',
          borderRadius: '2.5px',
          _hover: {
            background: '#EEEEEE',
          },
        },
        skyCircle: {
          bg: 'skySoft',
          color: 'sky',
          borderRadius: '100%',
        },
        redCircle: {
          bg: 'redSoft',
          color: 'red',
          borderRadius: '100%',
        },
      },
    },

    Badge: {
      variants: {
        warning: {
          bg: 'warning',
          color: 'black',
          textTransform: 'none',
          fontWeight: '500',
          padding: '5px 10px',
          borderRadius: '2.5px',
        },
      },
    },
  },
});
