<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImportProduct;
use Illuminate\Http\Request;

class ImportProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $fileName = resource_path('files/' . date('y-m-d-H-i-s') . $index . '.csv');

            file_put_contents($fileName, $part);
        }

        session()->flash('status', 'Файл добавлен');

        return redirect('admin/import_products');

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
