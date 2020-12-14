<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Jobs\Admin\CsvImporter;

class ImportProduct extends Model
{
    protected $fillable = ['code_product', 'category', 'vendor', 'title', 'price', 'old_price', 'availability', 'manufacturer', 'description', 'image', 'option', 'published', 'viewed'];

    public function store($csv)
    {
        foreach ($csv as $value){
                self::updateOrCreate([
                'code_product' => $value[0]
            ], [
                'category' => $value[1],
                'vendor' => $value[2],
                'title' => $value[3],
                'price' => $value[4],
                'old_price' => $value[5],
                'availability' => $value[6],
                'manufacturer' => $value[7],
                'description' => $value[8],
                'image' => $value[9],
                'option' => $value[10],
                'published' => $value[11],
                'viewed' => $value[12]
            ]);
        }
//        dd($csv, $fields);
    }


//    protected $guarded = [];
//    public function getImportProductsToDB()
//    {
//
//    }
//        $path = resource_path('files\*.csv');
//        $global = glob($path);


//        $path = resource_path('files\20-12-12-23-12-010.csv');

//        foreach (array_slice($global, 0, 1) as $item){
//            $data = fopen($item, 'c+');
//            $s = fgetcsv($data, 3000, ";");
//            for ($line = 0; $sec = fgetcsv($data, 3000, ";"); $line++) {
//                foreach ($s as $i => $k){
//                    $sec1[$i] = $sec[$k];
//                    dd($sec[$k]);
//                }
//
//            }
//
//        }


//
//        $line = fopen($global,'c+'); // - раб вар
//        $file = fgetcsv($line, 3000, ";"); //- раб вар



//            self::updateOrCreate([
//                'code_product' => $file[0]
//            ], [
//                'category' => $file[1],
//                'vendor' => $file[2],
//                'title' => $file[3],
//                'price' => $file[4],
//                'old_price' => $file[5],
////                'availability' => $file[6],
//                'manufacturer' => $file[7],
//                'description' => $file[8],
//                'image' => $file[9],
//                'option' => $file[10],
////                'published' => $file[11],
//                'viewed' => $file[12]
//            ]);









//        foreach (array_slice($global, 0, 10) as $file){
////            $data = array_map('str_getcsv', fgetcsv($file));
//            $data = array_map(function($l) { return str_getcsv($l, ";", "\n"); }, file($file));
//
//            foreach ($data as $item){
//                dd($item);
//            }
//        }

//    }


}

