# hello_packagist
Sample vendor/package for packagist/composer

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
