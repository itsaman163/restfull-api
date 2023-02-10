
### Rest api all the changes

=============================

In this article, we are going to learn how to create REST API in Codeigniter using POSTMAN in CodeIgniter 3 project. We will create the HTTP request like GET, POST, PUT, DELETE.

RESTful Api in Codeigniter is also know as rest web services.

We will be using one package called CodeIgniter RestServer to build this rest api in codeigniter 3.

Download the Zip file given below for Rest API in CodeIgniter 3:

Click to download and after successful download, extract the file and place all the files in your project, as given in below steps:

Step 1: API Adding Language: Copy the file named rest_controller_lang.php and paste the file in your project in the following path:  application/language/english/rest_controller_lang.php 

Step 2: Copy the file named rest.php and paste it in the following path: application/config/rest.php

Step 3: Copy the file named RestController.php and Format.php and paste it in the following path: application/libraries/RestController.php & application/libraries/Format.php

=====

## Auth key generation

### in rest.php

1. $config['rest_api_table'] = "api_keys";
2. $config['rest_enable_keys'] = TRUE;
3. $config['rest_key_column'] = 'my_key';
4. take value from
        $config['rest_key_name'] = 'X-API-KEY';
    and paste it in your postman header key and also for value take from table
5. change authrorization :- type into BasicAuth
        and write username and password

METHOD - 1:
Now, Once your API is built. it needs securing. So the only users who have the access (Login Credentials) can get data through API.

1. To set the login credentials which is username and password & open the rest.php file in the following path -  application/config/rest.php and search for
        $config['rest_valid_logins'] = ['admin' => '1234'];

2.Change these details into
// default
> $config['rest_auth'] = FALSE;
// Change it to
> $config['rest_auth'] = 'basic';

3.once we set the $config['rest_auth'] = 'basic' we have to give one more permission to access this as follows:

//default
// $config['auth_source'] = 'ldap';
// Change it to
> $config['auth_source'] = '';

Now, Open POSTMAN Software and choose Authorization and select TYPE as Basic Auth and then provide your username and password as shown above.

===============