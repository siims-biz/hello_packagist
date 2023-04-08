<?php
/* License: OSL-3.0
   To be launched in shell environment
   php ExeampleHelloComposer.php
*/

require 'vendor/autoload.php';
use Siims\HelloPackagist\HelloComposer;
$hello = new HelloComposer();
print "$hello";