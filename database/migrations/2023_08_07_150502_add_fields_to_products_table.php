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
        Schema::table('products', function (Blueprint $table) {
            $table->tinyText('title');
            $table->tinyText('description');
            $table->double('portion_price');
            $table->double('kilogram_price');
            $table->bigInteger('category')->unsigned()->default(0);

            $table->foreign('category')->references('id')->on('categories')->constrained()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('portion_price');
            $table->dropColumn('kilogram_price');
            $table->dropColumn('category');
        });
    }
};
