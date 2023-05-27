<?php

use App\Models\Datacategory;
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
        Schema::create('datacategory_form', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Datacategory::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Form::class)->constrained()->cascadeOnDelete();
            $table->boolean('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datacategory_form');
    }
};
