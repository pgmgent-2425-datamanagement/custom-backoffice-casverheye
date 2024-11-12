<?php

namespace App\Controllers;

class FilemanagerController extends BaseController
{

    public static function list()
    {
        $list = scandir(BASE_DIR . '/public/images');

        self::loadView('filemanager/list', [
            'list' => $list
        ]);
    }

    public static function delete($filename)
    {
        $filePath = BASE_DIR . '/public/images/' . basename($filename);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        header('Location: /filemanager');
        exit();
    }
}
