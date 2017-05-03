<?php

namespace App\Services;


use App\SDK\AWSSDK;

class CloudStorageService
{
    /** @var AWSSDK */
    private $awsSDK;

    /**
     * CloudStorageService constructor.
     */
    public function __construct()
    {
        $this->awsSDK = new AWSSDK();
    }

    public function uploadFile(string $folder, string $remoteFile, string $localFile)
    {
        $this->awsSDK->putObject($folder, $remoteFile, $localFile);
    }

    public function getFileUrl(string $folder, string $remoteFile)
    {
        return $this->awsSDK->getObject($folder, $remoteFile);
    }

    public function deleteFile(string $folder, string $remoteFile)
    {
        $this->awsSDK->deleteObject($folder, $remoteFile);
    }
}