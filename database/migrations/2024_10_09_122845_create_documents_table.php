<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Document title
            $table->string('file_path'); // Path to the uploaded file
            $table->string('description')->nullable(); // Optional description
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
