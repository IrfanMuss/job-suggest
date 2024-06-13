import { ChakraProvider } from '@chakra-ui/react';
import { createInertiaApp } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import React from 'react';
import { createRoot } from 'react-dom/client'; // Import createRoot from 'react-dom/client'
import { theme } from './config/theme';

createInertiaApp({
  title: 'Job Suggest',
  resolve: (name) =>
    resolvePageComponent(`./pages/${name}.jsx`, import.meta.glob('./pages/**/*.jsx')),
  setup({ el, App, props }) {
    const root = createRoot(el);
    root.render(
      <ChakraProvider theme={theme}>
        <App {...props} />
      </ChakraProvider>,
    );
    return root;
  },
});

InertiaProgress.init();
