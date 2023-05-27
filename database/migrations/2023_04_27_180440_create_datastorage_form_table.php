<?php

use App\Models\Datastorage;
use App\Models\Form;
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
        Schema::create('datastorage_form', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Form::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Datastorage::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datastorage_form');
    }
};
