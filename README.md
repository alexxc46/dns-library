# DNS Library

This is a custom and very basic Laravel package for querying DNS records of a domain. The main purpose of the application is to show how a library added and registered inside a Laravel application

## What was done

Added the library file to /packages/alexxc46/dns-library/src/DnsLibrary.php\
Added the service provider to /packages/alexxc46/dns-library/src/DnsLibraryServiceProvider.php\
Ran "composer init" command to create composer.json inside the directory\
Added autoload information to the "autoload" section of this file\
To help the main service provider to discover installed packages added the "providers" array under "extra"-> "laravel" headings.\
We are using "Alexx\DnsLibrary\" namespace for accessing the library in the application\
To our applications composer.json file which is in the root I added the "repository" object:\
"type": "path": Specifies the type of repository.\
"url": "packages/alexxc46/dns-library": Path of the library\
"options": { "symlink": true }: Indicates that Composer should create a symbolic link to the local repository instead of copying the files.\
Added the library name to the "require" object of the root package.json file\
Run "composer update" command in the project's root directory to install our package\
In our DnsLibraryServiceProvider file used the "register" function to access the library:\
$this->app->bind('DnsLibrary', function ($app) { ... }) is registering a binding in the Laravel container.\
$this->app->booting(function () { ... }) is registering a callback to be executed during the booting process of the application.\


## Installation

PHP and composer should be installed on your local machine\
Clone the repository with : git clone https://github.com/alexxc46/dns-library.git\
Run "cd ./dns-library"\
Run "composer install"\
Run "php artisan serve"\
Once the server has started you can paste the suggested url into your browser (http://127.0.0.1:8000/ in most cases)\
You can see the test output on the main page\

## Testing

To run tests run the command "php artisan test tests/Unit/DnsLibraryTest.php"\
Once the test has been run you can see the output in your terminal\
