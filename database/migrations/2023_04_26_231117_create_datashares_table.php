<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datashares', function (Blueprint $table) {
            $table->id();
            $table->string('datashare');
        });

        DB::table('datashares')->insert([
            ['datashare' => 'Gerçek kişiler veya özel hukuk tüzel kişileri'],
            ['datashare' => 'Hissedarlar'],
            ['datashare' => 'İş Ortakları'],
            ['datashare' => 'İştirakler ve bağlı ortaklıklar'],
            ['datashare' => 'Tedarikçiler'],
            ['datashare' => 'Topluluk Şirketleri'],
            ['datashare' => 'Yetkili Kamu Kurum ve Kuruluşları'],
            ['datashare' => 'Herkese açık'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datashares');
    }
};
