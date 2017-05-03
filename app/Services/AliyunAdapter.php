<?php

namespace App\Services;

use App\SDK\AliyunSDK;

class AliyunAdapter implements CloudSDK
{
    /**
     * @var AliyunSDK
     */
    private $aliyunSDK;

    /**
     * AliyunAdapter constructor.
     * @param AliyunSDK $aliyunSDK
     */
    public function __construct(AliyunSDK $aliyunSDK)
    {
        $this->aliyunSDK = $aliyunSDK;
    }

    /**
     * 上傳檔案
     * @param string $container
     * @param string $blob
     * @param string $file
     */
    public function pubObject(string $container, string $blob, string $file)
    {
        $this->aliyunSDK->setBucket($container);
        $this->aliyunSDK->uploadFile($blob, $file);
    }

    /**
     * 回傳下載檔案 url
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObjectUrl(string $container, string $blob)
    {
        $this->aliyunSDK->setBucket($container);
        return $this->aliyunSDK->getUrl($blob);
    }

    /**
     * 刪除檔案
     * @param string $container
     * @param string $blob
     */
    public function deleteObject(string $container, string $blob)
    {
        $this->aliyunSDK->deleteObject($container, $blob);
    }
}