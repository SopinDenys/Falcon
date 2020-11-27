<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code_product')->unique();
            $table->string('category')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('vendor')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('price')->nullable();
            $table->integer('old_price')->nullable();
            $table->tinyInteger('availability')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('option')->nullable();
            $table->boolean('published');
            $table->integer('viewed')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_products');
    }
}
