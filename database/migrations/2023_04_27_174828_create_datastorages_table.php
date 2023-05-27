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
        Schema::create('datastorages', function (Blueprint $table) {
            $table->id();
            $table->string('datastorage');
            $table->boolean('type');
        });

        DB::table('datastorages')->insert([
            ['datastorage' => 'Sunucular (Etki alanı, yedekleme, e-posta, veri tabanı, web, dosya paylaşım, vb.)', 'type' => true],
            ['datastorage' => 'Yazılımlar', 'type' => true],
            ['datastorage' => 'Bilgi güvenliği cihazları (güvenlik duvarı, saldırı tespit ve engelleme, anti virüs vb. )', 'type' => true],
            ['datastorage' => 'Kişisel bilgisayarlar (Masaüstü, dizüstü)', 'type' => true],
            ['datastorage' => 'Mobil cihazlar (telefon, tablet vb.)', 'type' => true],
            ['datastorage' => 'Optik diskler (CD, DVD vb.)', 'type' => true],
            ['datastorage' => 'Çıkartılabilir bellekler (USB, Hafıza Kart vb.)', 'type' => true],
            ['datastorage' => 'Yazıcı, tarayıcı, fotokopi makinesi', 'type' => true],
            ['datastorage' => 'Kağıt', 'type' => false],
            ['datastorage' => 'Manuel veri kayıt sistemleri (sonuç teslim formları, ziyaretçi giriş defteri vb.)', 'type' => false],
            ['datastorage' => 'Yazılı, basılı, görsel ortamlar', 'type' => false],
        ]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datastorages');
    }
};
