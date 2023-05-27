<?php

use App\Models\Datashare;
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
        Schema::create('datashare_form', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Form::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Datashare::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datashare_form');
    }
};
