<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assets;

class AssetsController extends Controller
 {

    private $imagePath = '/uploads/images/';
    private $imageTempPath = '/temp/';

    public function index() {
        try {
            $random_images = Assets::select(['name'])->inRandomOrder()->limit(1)->get();
            if (count($random_images) > 0) {
                //database file name
                $original_file = $random_images[0]['name'];

                //get file extesion
                $file_ext = pathinfo($original_file, PATHINFO_EXTENSION);

                //generate random file name
                $bytes = random_bytes(16);
                $random_file_name = bin2hex($bytes) . '.' . $file_ext;

                //set original file path
                $db_image_file = $_SERVER['DOCUMENT_ROOT'] . $this->imagePath . $original_file;

                //set new temp file path
                $new_temp_image_file = $_SERVER['DOCUMENT_ROOT'] . $this->imageTempPath . $random_file_name;

                if (file_exists($db_image_file)) {
                    //copy image with temp name
                    if (!copy($db_image_file, $new_temp_image_file)) {
                        return response()->json([
                                    'data' => 'Resource not found'
                                        ], 404);
                    }
                } else {
                    return response()->json([
                                'data' => 'Image file not found'
                                    ], 200);
                }


                //create end user url
                $url = 'http://' . $_SERVER['SERVER_NAME'] . $this->imageTempPath . $random_file_name;
                //get file size
                $size = filesize($new_temp_image_file);
            }
            return response()->json([
                        'fileSizeBytes' => $size,
                        'url' => $url,
                            ], 200);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
        }
    }

}
