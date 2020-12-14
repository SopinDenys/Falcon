<?php

namespace App\Jobs\Admin;

use App\Models\Admin\ImportProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CsvImporter implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $fh;
    private $header;
    private $separator;
    private $length;
    private $headerKeys;

    public function __construct($fileName, $header = false, $separator = ';', $length = 8000)
    {
        $this->fh = fopen($fileName, "r");
        $this->header = $header;
        $this->separator = $separator;
        $this->length = $length;

        if ($this->header){
            $this->headerKeys = fgetcsv($this->fh, $this->length, $this->separator);
        }
    }

    public function __destruct()
    {
        if ($this->fh){
            fclose($this->fh);
        }
    }

    public function getImporter($max = 0){
        $data = [];

        for ($line = 0; $row = fgetcsv($this->fh, $this->length, $this->separator); $line++){

            if ($this->header){
                foreach ($this->headerKeys as $value => $key){
                    $row1[$key] = $row[$value];
                }
                $data[] = $row1;
            }else{
                $data[] = $row;
            }

            if ($max > 0){
                if ($max == $line){
                    break;
                }
            }
        }
        return $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
