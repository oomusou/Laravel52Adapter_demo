<?php

namespace App\Services;

use App\SDK\AzureSDK;

class AzureAdapter implements CloudSDK
{
    /** @var AzureSDK */
    private $azureSDK;

    /**
     * AzureAdapter constructor.
     * @param AzureSDK $azureSDK
     */
    public function __construct(AzureSDK $azureSDK)
    {
        $this->azureSDK = $azureSDK;
    }

    /**
     * 上傳檔案
     * @param string $container
     * @param string $blob
     * @param string $file
     */
    public function pubObject(string $container, string $blob, string $file)
    {
        $this->azureSDK->createBlob($container, $blob, $file);
    }

    /**
     * 回傳下載檔案 url
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObjectUrl(string $container, string $blob)
    {
        return $this->getObjectUrl($container, $blob);
    }

    /**
     * 刪除檔案
     * @param string $container
     * @param string $blob
     */
    public function deleteObject(string $container, string $blob)
    {
        $this->deleteObject($container, $blob);
    }
}