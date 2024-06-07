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
        Schema::table('shopping_cart', function (Blueprint $table) {
            $table->string('code')->default("");
            $table->integer('price_total')->unsigned()->default(0);
            $table->integer('qty')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shopping_cart', function (Blueprint $table) {
            $table->dropColumn('code');
            $table->dropColumn('price_total');
            $table->dropColumn('qty');
        });
    }
};
