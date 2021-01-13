<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CronController extends Controller
{
    //

    public function move_images()
    {
        echo url('/');
        die;
        $array = [];
        // get all images stored in the db and save the filenames as an array

        $images = DB::table('product_images')
            ->get();

        foreach ($images as $image) {
            $arr = [
                'name' => str_replace('common/', '', $image->storage_path),
                'id' => $image->id,
            ];

            array_push($array, $arr);
        }

        // check if file exists
        foreach ($array as $key) {
            if (Storage::disk('public')->missing($key['name'])) {
                if (File::move(config('settings.catalogue') . $key['name'], public_path('img/uploads/' . $key['name']))) {
                    DB::table('product_images')
                        ->where('id', $key['id'])
                        ->update(['actual_path' => 'img/uploads/' . $key['name']]);
                } else {
                    echo "Failed in moving " . $key['name'] . "<br>";
                }
            }
        }
    }
}
