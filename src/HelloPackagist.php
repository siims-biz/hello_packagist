<?php
namespace Siims\HelloPackagist;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class HelloPackagist {
    public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
        print_r($installedPackage);
    }

    public static function postPackageUpdate(Event $event)
    {
//        $installedPackage = $event->getOperation()->getPackage();
        $composer = $event->getComposer();
        echo "postPackageUpdate";
        // do stuff
    }
}