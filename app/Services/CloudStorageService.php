<?php

namespace App\Services;

class CloudStorageService
{
    /** @var CloudSDK */
    private $cloudSDK;

    /**
     * CloudStorageService constructor.
     */
    public function __construct()
    {
        $this->cloudSDK = CloudSDKFactory::create();
    }

    public function uploadFile(string $folder, string $remoteFile, string $localFile)
    {
        $this->cloudSDK->pubObject($folder, $remoteFile, $localFile);
    }

    public function getFileUrl(string $folder, string $remoteFile)
    {
        return $this->cloudSDK->getObjectUrl($folder, $remoteFile);
    }

    public function deleteFile(string $folder, string $remoteFile)
    {
        $this->cloudSDK->deleteObject($folder, $remoteFile);
    }
}