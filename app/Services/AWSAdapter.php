<?php

namespace App\Services;

use App\SDK\AWSSDK;

class AWSAdapter implements CloudSDK
{
    /** @var AWSSDK */
    private $awsSDK;

    /**
     * AWSAdapter constructor.
     * @param AWSSDK $awsSDK
     */
    public function __construct(AWSSDK $awsSDK)
    {
        $this->awsSDK = $awsSDK;
    }

    /**
     * 上傳檔案
     * @param string $container
     * @param string $blob
     * @param string $file
     */
    public function pubObject(string $container, string $blob, string $file)
    {
        $this->awsSDK->putObject($container, $blob, $file);
    }

    /**
     * 回傳下載檔案 url
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObjectUrl(string $container, string $blob)
    {
        return $this->awsSDK->getObject($container, $blob);
    }

    /**
     * 刪除檔案
     * @param string $container
     * @param string $blob
     */
    public function deleteObject(string $container, string $blob)
    {
        $this->awsSDK->deleteObject($container, $blob);
    }
}