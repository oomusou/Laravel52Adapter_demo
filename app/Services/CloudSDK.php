<?php

namespace App\Services;

interface CloudSDK
{
    /**
     * 上傳檔案
     * @param string $container
     * @param string $blob
     * @param string $file
     */
    public function pubObject(string $container, string $blob, string $file);
    /**
     * 回傳下載檔案 url
     * @param string $container
     * @param string $blob
     * @return string
     */
    public function getObjectUrl(string $container, string $blob);
    /**
     * 刪除檔案
     * @param string $container
     * @param string $blob
     */

    public function deleteObject(string $container, string $blob);
}