<?php

use App\Models\Form;
use App\Models\Infopurpose;
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
        Schema::create('form_infopurpose', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Form::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Infopurpose::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_infopurpose');
    }
};
