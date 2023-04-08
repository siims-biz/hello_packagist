<?php
namespace Siims\HelloPackagist;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class HelloPackagist {
    //public static function postPackageInstall(PackageEvent $event)
    public static function postPackageInstall(Event $event)
    {
//        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
  echo "postPackageInstall";
    }

    public static function postPackageUpdate(Event $event)
    {
//        $installedPackage = $event->getOperation()->getPackage();
        $composer = $event->getComposer();
        echo "postPackageUpdate";
        // do stuff
    }
    public static function postInstallCmd(Event $event)
    {
//        $installedPackage = $event->getOperation()->getPackage();
        $composer = $event->getComposer();
        echo "postInstallCmd";
        // do stuff
    }    
    public static function postUpdateCmd(Event $event)
    {
//        $installedPackage = $event->getOperation()->getPackage();
        $composer = $event->getComposer();
        echo "postUpdateCmd\n";
        // do stuff
    }        
}