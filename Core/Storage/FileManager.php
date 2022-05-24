<?php

namespace Core\Storage;

class FileManager {

    public static function upload ($path, $max_size, $available_formats = []) {
        $error = null;
        $status = true;
        $file = request('file')['image'];
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $name = uniqid() . ".$ext";
        $uploadPath = $_SERVER['DOCUMENT_ROOT'] . $path . $name;
        if (count($available_formats) > 0) {
            if (!array_search($ext, $available_formats)) {
                $error = "Format";
                $status = false;
            }
        }
        if ($max_size) {
            if ($file['size'] > $max_size * 1000000) {
                $error = "Size";
                $status = false;
            }
        }
        if (file_exists($uploadPath)) {
            $error = "Exists";
            $status = false;
        }
        if ($status) {
            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                return ['status' => $status, 'file' => $name];
            } else {
                return ['status' => false, 'error' => "Error"];
            }
        } else {
            return ['status' => $status, 'error' => $error];
        }
    }

    public static function remove ($path) {
        return unlink($path) ? true : false;
    }

}