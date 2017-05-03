<?php

namespace App\SDK;

class AWSSDK
{
    /**
     * 上傳檔案
     * @param string $container
     * @param string $blob
     * @param string $file
     */
    public function putObject(string $container, string $blob, string $file)
    {
        echo('AWS S3 uploading file');
    }

    /**
     * 回傳下載檔案 url
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObject(string $container, string $blob): string
    {
        return 'http://www.aws.com';
    }

    /**
     * 刪除檔案
     * @param string $container
     * @param string $blob
     */
    public function deleteObject(string $container, string $blob)
    {
        echo('AWS S3 deleting file');
    }
}