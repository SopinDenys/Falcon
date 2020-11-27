<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    public function getImportProductsToDB(){

        $path = resource_path('files/*.csv');

        $global = glob($path);

        foreach (array_slice($global, 0, 1) as $file){

            $data = array_map(function($l) { return str_getcsv($l, ';'); }, file($file));

            foreach ($data as $item){
                dd($item);
            }
        }

    }
}
