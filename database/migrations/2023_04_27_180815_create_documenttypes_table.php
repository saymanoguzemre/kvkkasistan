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
        Schema::create('documenttypes', function (Blueprint $table) {
            $table->id();
            $table->string('documenttype');
        });

        DB::table('documenttypes')->insert([
            ['documenttype' => 'Aydınlatma Metni - Çalışan ve Çalışan Adayı'],
            ['documenttype' => 'Aydınlatma Metni - Tedarikçi ve İlgili Taraf'],
            ['documenttype' => 'Aydınlatma Metni - Bülten Üyeliği'],
            ['documenttype' => 'İlgili Kişi Başvuru Formu'],
            ['documenttype' => 'Açık Rıza Formu - Tedarikçi ve İlgili Taraf'],
            ['documenttype' => 'doküman Kullanım Rehberi'],
            ['documenttype' => 'Çerez Politikası'],
            ['documenttype' => 'Çerez Rehberi'],
            ['documenttype' => 'Kişisel Verilerin Korunması ve İşlenmesi Politikası'],
            ['documenttype' => 'Kişisel Veri Saklama ve İmha Politikasi'],
            ['documenttype' => 'Özel Nitelikli Kişisel Verilerin Korunması ve İşlenmesi Politikası'],
            ['documenttype' => 'Bilgi Güvenliği Politikaları'],
            ['documenttype' => 'Personel Gizlilik Sözleşmesi'],
            ['documenttype' => 'Tedarikçi Gizlilik Sözleşmesi'],
            ['documenttype' => 'Satın Alma Gizlilik Sözleşmesi'],
            ['documenttype' => 'KVK Uyum Rehberi'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documenttypes');
    }
};
