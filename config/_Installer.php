<?php
use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 *  Custom installer class for composer 
 */
class _Installer extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath( PackageInterface $package ) {
        $prefix = substr( $package->getPrettyName(), 0, 23 );
        return '_php/'.substr( $package->getPrettyName(), 23 );
    }

    /**
     * {@inheritDoc}
     */
    public function supports( $packageType ) {
        return '_php' === $packageType;
    }
}
