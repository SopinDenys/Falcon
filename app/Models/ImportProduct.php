<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    public function getImportProductsToDB(){

//        $path = resource_path('files/*.csv');
//
//        $global = glob($path);
$path = resource_path('files/20-11-27-17-04-000.csv');
$line = fopen($path,'r');
$file = fgetcsv($line, 3000, ";");
//dd($file);



//        foreach (array_slice($global, 0, 10) as $file){
////            $data = array_map('str_getcsv', fgetcsv($file));
//            $data = array_map(function($l) { return str_getcsv($l, ";", "\n"); }, file($file));
//
//            foreach ($data as $item){
//                dd($item);
//            }
//        }

    }
}
