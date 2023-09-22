<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pname');
            $table->string('unittype');
            $table->string('pcategory');
            $table->string('pimages');
            $table->string('pprice');
            $table->string('dpercentage');
            $table->string('damount');
            $table->string('dfdate');
            $table->string('dtdate');
            $table->string('tpercentage');
            $table->string('tamount');
            $table->string('seqty');
            $table->string('create');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
