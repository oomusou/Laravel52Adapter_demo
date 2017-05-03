<?php

namespace App\Http\Controllers;

use App\Services\CloudStorageService;

class CloudStorageController extends Controller
{
    /** @var CloudStorageService */
    private $cloudStorageService;

    /**
     * CloudStorageController constructor.
     * @param CloudStorageService $cloudStorageService
     */
    public function __construct(CloudStorageService $cloudStorageService)
    {
        $this->cloudStorageService = $cloudStorageService;
    }

    /**
     * 下載檔案
     */
    public function index()
    {
        $url = $this->cloudStorageService->getFileUrl('MyFolder', 'MyRemoteFile');
        echo($url);
    }

    /**
     * 上傳檔案
     */
    public function store()
    {
        $this->cloudStorageService->uploadFile('MyFolder', 'MyRemoteFile', 'MyLocalFile');
    }

    /**
     * 刪除檔案
     */
    public function destroy()
    {
        $this->cloudStorageService->deleteFile('MyFolder', 'MyRemote');
    }
}
