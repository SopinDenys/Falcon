<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Admin\CsvImporter;
use App\Models\Admin\ImportProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ImportProduct::orderBy('id', 'desc')->get();

        return view('index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.import_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'file' => 'required'
        ]);

        $file = file($request->file->getRealPath());

        $data = array_slice($file, 1);

        $parts = (array_chunk($data, 5000));

        foreach ($parts as $index => $part){
            $fileName = resource_path('files/' . date('H-i-d-m-Y') . $index . '.csv');

            file_put_contents($fileName, $part);
        }

        session()->flash('status', 'Все прошло успешно, файл добавлен!');

        return redirect()->route('admin.import_products');
//        return redirect('admin/import_products');

    }

    private $objIm;
    public function __construct()
    {
//        $path = resource_path('files\*.csv');
//        $global = glob($path);
        $path = resource_path('files\20-12-12-23-12-010.csv');
        $this->objIm = new CsvImporter($path, false, ';');
        $result = $this->objIm->getImporter();
        $db = new ImportProduct();
        $db->store($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ImportProduct $importProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportProduct $importProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportProduct $importProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImportProduct  $importProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImportProduct $importProduct)
    {
        //
    }
}
