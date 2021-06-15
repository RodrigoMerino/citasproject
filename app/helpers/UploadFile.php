<?php

namespace App\Helpers;

class UploadFile
{
    protected string $fileName;
    protected float $max_fileSize = 2046;
    protected string $extension;
    protected string $path;

    public  function getFileName()
    {
        return $this->fileName;
    }

    protected function setFileName(string $file, string $name = '')
    {

        if ($name === '') {
            //original file name
            $name = pathinfo($file, PATHINFO_FILENAME);
        }
        $name = strtolower(str_replace(['-', ' '], '-', $name));
        $hash = md5(microtime());
        $extension = $this->fileExtension($file);
        $this->fileName = "{$name}-{$hash}.{$extension}";
    }

    protected function fileExtension(string $file)
    {
        return $this->extension = pathinfo($file, PATHINFO_EXTENSION);
    }

    public static function checkFileSize(string $file)
    {
        $object = new static;
        return $file > $object->max_fileSize ? true : false;
    }

    public static  function isImage(string $file)
    {
        $object = new static;
        $extension = $object->fileExtension($file);
        $validExtension = array('jpg', 'png', 'jpeg', 'bmp', 'gif');

        if (!in_array(strtolower($extension), $validExtension)) {
            return false;
        }
        return true;
    }

    //where de image was uploaded to?
    public function path()
    {
        return $this->path;
    }

    public static function moveFile($temp_path, $folder, $file, $new_fileName)
    {
        $object = new static;
        $slash = DIRECTORY_SEPARATOR;
        $object->setFileName($file, $new_fileName);
        $fileName = $object->getFileName();

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $object->path = "{$folder}{$slash}{$fileName}";
        $absolute_path = BASE_PATH . "{$slash}public{$slash}$object->path";


        if (move_uploaded_file($temp_path,$absolute_path)) {
            return $object;
        }
        return null;
    }
}
