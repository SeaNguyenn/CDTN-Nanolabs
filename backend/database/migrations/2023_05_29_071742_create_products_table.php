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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price',12,2)->nullable();
            $table->decimal('promotion_price',12,2)->nullable();
            $table->bigInteger('include_vat')->nullable();
            $table->bigInteger('evaluate')->default(0)->comment('1:relly bad 2:bad 3:normal 4:good 5:relly good');
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('supplier_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('warranty')->nullable();
            $table->bigInteger('state')->default(1)->comment('1:live 9:kill');
            $table->bigInteger('view_count')->nullable();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
