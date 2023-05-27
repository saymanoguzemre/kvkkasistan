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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city', 255);
        });

        DB::table('cities')->insert([
            ['city' => 'ADANA'],
            ['city' => 'ADIYAMAN'],
            ['city' => 'AFYON'],
            ['city' => 'AĞRI'],
            ['city' => 'AMASYA'],
            ['city' => 'ANKARA'],
            ['city' => 'ANTALYA'],
            ['city' => 'ARTVİN'],
            ['city' => 'AYDIN'],
            ['city' => 'BALIKESİR'],
            ['city' => 'BİLECİK'],
            ['city' => 'BİNGÖL'],
            ['city' => 'BİTLİS'],
            ['city' => 'BOLU'],
            ['city' => 'BURDUR'],
            ['city' => 'BURSA'],
            ['city' => 'ÇANAKKALE'],
            ['city' => 'ÇANKIRI'],
            ['city' => 'ÇORUM'],
            ['city' => 'DENİZLİ'],
            ['city' => 'DİYARBAKIR'],
            ['city' => 'EDİRNE'],
            ['city' => 'ELAZIĞ'],
            ['city' => 'ERZİNCAN'],
            ['city' => 'ERZURUM'],
            ['city' => 'ESKİŞEHİR'],
            ['city' => 'GAZİANTEP'],
            ['city' => 'GİRESUN'],
            ['city' => 'GÜMÜŞHANE'],
            ['city' => 'HAKKARİ'],
            ['city' => 'HATAY'],
            ['city' => 'ISPARTA'],
            ['city' => 'İÇEL'],
            ['city' => 'İSTANBUL'],
            ['city' => 'İZMİR'],
            ['city' => 'KARS'],
            ['city' => 'KASTAMONU'],
            ['city' => 'KAYSERİ'],
            ['city' => 'KIRKLARELİ'],
            ['city' => 'KIRŞEHİR'],
            ['city' => 'KOCAELİ'],
            ['city' => 'KONYA'],
            ['city' => 'KÜTAHYA'],
            ['city' => 'MALATYA'],
            ['city' => 'MANİSA'],
            ['city' => 'KAHRAMANMARAŞ'],
            ['city' => 'MARDİN'],
            ['city' => 'MUĞLA'],
            ['city' => 'MUŞ'],
            ['city' => 'NEVŞEHİR'],
            ['city' => 'NİĞDE'],
            ['city' => 'ORDU'],
            ['city' => 'RİZE'],
            ['city' => 'SAKARYA'],
            ['city' => 'SAMSUN'],
            ['city' => 'SİİRT'],
            ['city' => 'SİNOP'],
            ['city' => 'SİVAS'],
            ['city' => 'TEKİRDAĞ'],
            ['city' => 'TOKAT'],
            ['city' => 'TRABZON'],
            ['city' => 'TUNCELİ'],
            ['city' => 'ŞANLIURFA'],
            ['city' => 'UŞAK'],
            ['city' => 'VAN'],
            ['city' => 'YOZGAT'],
            ['city' => 'ZONGULDAK'],
            ['city' => 'AKSARAY'],
            ['city' => 'BAYBURT'],
            ['city' => 'KARAMAN'],
            ['city' => 'KIRIKKALE'],
            ['city' => 'BATMAN'],
            ['city' => 'ŞIRNAK'],
            ['city' => 'BARTIN'],
            ['city' => 'ARDAHAN'],
            ['city' => 'IĞDIR'],
            ['city' => 'YALOVA'],
            ['city' => 'KARABÜK'],
            ['city' => 'KİLİS'],
            ['city' => 'OSMANİYE'],
            ['city' => 'DÜZCE'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
