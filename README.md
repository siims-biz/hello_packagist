# hello_packagist
Sample vendor/package for packagist/composer

# 2023-04-07 23:00
composer require siims/hello_packagist:dev-main

composer show --platform

Tested, should work
```
./composer.json has been created
Running composer update siims/hello_packagist
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking siims/hello_packagist (dev-main 1fd7f1a)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Downloading siims/hello_packagist (dev-main 1fd7f1a)
  - Installing siims/hello_packagist (dev-main 1fd7f1a): Extracting archive
Generating autoload files
No security vulnerability advisories found
```
# 2023-04-07 22:00
```
Search for a package:
Add PSR-4 autoload mapping? Maps namespace "Siims\HelloPackagist" to the entered relative path. [src/, n to skip]:

{
    "name": "siims/hello_packagist",
    "description": "Hello World Packagist",
    "type": "library",
    "license": "OSL-3.0",
    "autoload": {
        "psr-4": {
            "Siims\\HelloPackagist\\": "src/"
        }
    },
    "authors": [
        {
            "name": "siims",
            "email": "system@siims.biz"
        }
    ],
    "require": {}
}

Do you confirm generation [yes]?
Generating autoload files
Generated autoload files
Would you like the vendor directory added to your .gitignore [yes]?
PSR-4 autoloading configured. Use "namespace Siims\HelloPackagist;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';
```
