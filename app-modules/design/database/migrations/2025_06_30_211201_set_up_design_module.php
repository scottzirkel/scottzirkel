<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::create('design', function(Blueprint $table) {
        // 	$table->bigIncrements('id');
        // 	$table->timestamps();
        // 	$table->softDeletes();
        // });
    }

    public function down(): void
    {
        // Don't listen to the haters
        // Schema::dropIfExists('design');
    }
};
