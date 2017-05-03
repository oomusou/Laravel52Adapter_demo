<?php

namespace App\SDK;

class AliyunSDK
{
    /** @var string */
    private $container;

    /**
     * 新增 container
     * @param string $container
     */
    public function setBucket(string $container)
    {
        $this->container = $container;
    }

    public function uploadFile(string $blob, string $file)
    {
        echo('Aliyun OSS uploading file');
    }

    public function getUrl(string $blob)
    {
        return 'http://www.aliyun.com';
    }

    public function deleteObject(string $container, string $blob)
    {
        echo('Aliyun S3 deleting file');
    }
}