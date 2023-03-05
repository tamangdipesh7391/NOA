<?php

namespace App\General;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

trait General
{
    public $data = [];

    public function __construct()
    {
        $this->data('title', $this->makeTitle());
    }

    public function makeTitle(): string
    {
        $serverName = env('APP_NAME');
        $path = Request::path();
        if ($path == '/') {
            $path = $serverName;
        }
        return str_replace('/', ' | ', $path);

    }


    public function data($key, $value = '')
    {
        if (empty($key)) throw new \Exception('Key is messing');
        return $this->data[$key] = $value;
    }

    public function multipleFileUpload($directionPath = 'uploads')
    {
        if (!empty(Request::file())) {
            $allFileRequest = Request::file();
            $files = Arr::first($allFileRequest);
            $directionPath = trim($directionPath, '/');
            $uploadPath = public_path($directionPath);
            if (!File::exists($uploadPath)) {
                File::makeDirectory($directionPath, 0755, true);
            }
            $uploadFilePathResponse = [];
            foreach ($files as $file) {
                $ext = $file->getClientOriginalExtension();
                $fileName = md5(microtime()) . '.' . Str::lower($ext);
                if (!$file->move($uploadPath, $fileName)) {
                    return Redirect::back()->with('error', 'file upload errors');
                }
                $uploadFilePathResponse[] = $directionPath . '/' . $fileName;;
            }
            return $uploadFilePathResponse;
        } else {
            return '';
        }

    }

    public function deleteFile($filePath)
    {
        $getFilePath = public_path($filePath);
        if (file_exists($getFilePath) && is_file($getFilePath)) {
            unlink($filePath);
            return true;
        }
        return true;
    }

    public function customMessage($message, $type = 'success', $status = true)
    {
        return ['message' => $message, 'type' => $type, 'status' => $status];
    }

    public function singleFileUpload($directionPath = '')
    {
        if (!empty(Request::file())) {
            $directionPath = trim($directionPath, '/');
            $files = Request::file();
            $file = Arr::first($files);
            $ext = $file->getClientOriginalExtension();
            $imageName = md5(microtime()) . '.' . Str::lower($ext);
            $directionPath = trim($directionPath, '/');
            $uploadPath = public_path($directionPath);
            if (!File::exists($uploadPath)) {
                File::makeDirectory($directionPath, 0755, true);
            }

            if (!$file->move($uploadPath, $imageName)) {
                return Redirect::back()->with('error', 'file upload errors');
            }
            return $directionPath . '/' . $imageName;

        }

        return false;
    }


}
