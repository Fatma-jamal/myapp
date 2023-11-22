<?php

namespace Tamm\Core;

class File {

    public function upload(){}

    public function download(){}

    public function move($sourcePath, $targetPath) {
        return rename($sourcePath, $targetPath);
    }

    public function rename($filePath, $newFileName) {
        $newFilePath = dirname($filePath) . '/' . $newFileName;
        return rename($filePath, $newFilePath);
    }

    public function copy($sourcePath, $targetPath) {
        return copy($sourcePath, $targetPath);
    }

    public function delete($filePath) {
        return unlink($filePath);
    }

}