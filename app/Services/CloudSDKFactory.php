<?php

namespace App\Services;

class CloudSDKFactory
{
    /**
     * 建立 adapter
     * @return CloudSDK
     */
    public static function create(): CloudSDK
    {
        $lut = config('app.CloudLUT');
        $cloudStorage = config('app.CloudStorage');

        $className = collect($lut)
            ->get($cloudStorage, AWSAdapter::class);

        return new $className;
    }
}