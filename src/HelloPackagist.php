<?php
namespace Siims;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class HelloPackagist {
    public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
        print_r($installedPackage);
    }
}