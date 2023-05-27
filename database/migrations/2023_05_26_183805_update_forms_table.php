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
        Schema::table('forms', function (Blueprint $table) {
            $table->integer('dataStorageTime')->after('hasEmployee');
            $table->tinyInteger('dataStorageTimeType')->after('hasEmployee');
            $table->string('referenceNo')->unique()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn('dataStorageTime');
            $table->dropColumn('dataStorageTimeType');
            $table->dropColumn('referenceNo');
        });
    }
};
