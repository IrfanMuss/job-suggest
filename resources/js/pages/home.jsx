import { Badge, Box, Button, IconButton, VStack } from '@chakra-ui/react';
import React from 'react';
import { AlertCircle } from 'react-feather';

const home = () => {
  return (
    <VStack>
      <Box color='primary'> This is my BOX</Box>

      <Badge variant='warning'>
        Halaman ini punya fitur autosave untuk menyimpan setiap perubahan
      </Badge>

      <IconButton variant='redCircle' icon={<AlertCircle />} />

      <Button variant='secondary'>Primary Button</Button>
    </VStack>
  );
};

export default home;
