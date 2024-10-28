<?php

namespace ContainerKVcW4gG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_RemotePackageDownloaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.remote_package_downloader' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\RemotePackageDownloader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'RemotePackageDownloader.php';

        return $container->privates['asset_mapper.importmap.remote_package_downloader'] = new \Symfony\Component\AssetMapper\ImportMap\RemotePackageDownloader(($container->privates['asset_mapper.importmap.remote_package_storage'] ??= new \Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage((\dirname(__DIR__, 4).'/assets/vendor'))), ($container->privates['asset_mapper.importmap.config_reader'] ?? self::getAssetMapper_Importmap_ConfigReaderService($container)), ($container->privates['asset_mapper.importmap.resolver'] ?? $container->load('getAssetMapper_Importmap_ResolverService')));
    }
}
