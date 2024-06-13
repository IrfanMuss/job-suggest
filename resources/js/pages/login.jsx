import {
  Button,
  Flex,
  FormControl,
  FormLabel,
  IconButton,
  Image,
  Input,
  InputGroup,
  InputRightElement,
  Text,
  VStack,
} from '@chakra-ui/react';
import '@public/css/login.css';
import React, { useCallback, useState } from 'react';
import { Eye, EyeOff } from 'react-feather';

const Login = () => {
  const [showPassword, setShowPassword] = useState(false);

  const handleShowPassword = useCallback(() => {
    setShowPassword((prevShowPassword) => !prevShowPassword);
  }, []);

  return (
    <VStack
      height='100vh'
      width='full'
      className='main-section'
      paddingX='20px'
      alignItems='center'
      justifyContent='center'
    >
      <VStack width={{ base: 'full', md: '50%' }}>
        <Flex width='full' justifyContent='flex-end' marginY='20px' opacity={0.85}>
          <Image src='/assets/static/logo.png' width='120px' />
        </Flex>

        <Flex
          width='full'
          alignItems='center'
          justifyContent='start'
          columnGap='15px'
          marginBottom='20px'
        >
          <Image src='/assets/static/logoapp.svg' width='50px' />

          <VStack spacing='0px' alignItems='flex-start'>
            <Text fontSize='22px' fontWeight='bold' fontFamily='roboto' color='primary'>
              JOB SUGGEST
            </Text>
            <Text fontSize='small' opacity={0.8} fontFamily='roboto'>
              Please enter your credentials
            </Text>
          </VStack>
        </Flex>

        <VStack width='full' justifyContent='flex-start' spacing='20px'>
          <FormControl>
            <FormLabel>Email or username</FormLabel>
            <Input variant='filled' placeholder='Enter email or username' name='email' required />
          </FormControl>

          <FormControl>
            <FormLabel>Password</FormLabel>
            <InputGroup>
              <InputRightElement>
                <IconButton
                  aria-label={showPassword ? 'Hide password' : 'Show password'}
                  icon={showPassword ? <EyeOff size='12px' /> : <Eye size='12px' />}
                  onClick={handleShowPassword}
                />
              </InputRightElement>
              <Input
                variant='filled'
                type={showPassword ? 'text' : 'password'}
                placeholder='Enter password'
              />
            </InputGroup>
          </FormControl>

          <VStack width='full'>
            <Button width='full' variant='primary' fontWeight='semibold' fontFamily='roboto'>
              Sign in
            </Button>

            <Button width='full' variant='secondary'>
              Need help ?
            </Button>
          </VStack>
        </VStack>
      </VStack>
    </VStack>
  );
};

export default Login;
