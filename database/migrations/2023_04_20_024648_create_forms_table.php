<?php

use App\Models\Customer;
use App\Models\Town;
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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Town::class)->constrained();
            $table->string('address');
            $table->boolean('companyType');
            $table->string('companyName');
            $table->string('companyNameShort')->nullable();
            $table->string('taxNo');
            $table->string('taxOffice');
            $table->string('tradeRegisterNo');
            $table->string('mersisNo');
            $table->boolean('hasKepAddress');
            $table->string('email');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('court');
            $table->string('titleOfRespect')->nullable();
            $table->boolean('hasEmployee');
            $table->string('logo', 500)->nullable();
            $table->boolean('isPaid')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
