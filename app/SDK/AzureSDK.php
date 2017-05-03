<?php

namespace App\SDK;

class AzureSDK
{
    /**
     * 上傳檔案
     * @param string $container
     * @param string $blob
     * @param string $file
     */
    public function createBlob(string $container, string $blob, string $file)
    {
        echo('Azure Blob uploading file');
    }

    /**
     * 回傳下載檔案 url
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getBlobUrl(string $container, string $blob): string
    {
        return 'http://www.azure.com';
    }

    /**
     * 刪除檔案
     * @param string $container
     * @param string $blob
     */
    public function deleteBlob(string $container, string $blob)
    {
        echo('Azure Blob deleting file');
    }
}