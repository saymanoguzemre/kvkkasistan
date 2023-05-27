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
        Schema::create('datacategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('info', 2000)->nullable();
        });

        DB::table('datacategories')->insert([
            ['name' => 'Kimlik', 'info' => 'ad soyad, anne - baba adı, anne kızlık soyadı, doğum tarihi, doğum yeri, medeni hali, nüfus cüzdanı seri sıra no, tc kimlik no gibi'],
            ['name' => 'İletişim', 'info' => 'adres no, e-posta adresi, iletişim adresi, kayıtlı elektronik posta adresi (KEP), telefonno gibi'],
            ['name' => 'Lokasyon', 'info' => 'bulunduğu yerin konum bilgileri'],
            ['name' => 'Özlük', 'info' => 'bordro bilgileri, disiplin soruşturması, işe giriş-çıkış belgesi kayıtları, mal bildirimibilgileri, özgeçmiş bilgileri, performans değerlendirme raporları gibi'],
            ['name' => 'Hukuki İşlem', 'info' => 'adli makamlarla yazışmalardaki bilgiler, dava dosyasındaki bilgiler gibi'],
            ['name' => 'Fiziksel Mekân Güvenliği', 'info' => 'çalışan ve ziyaretçilerin giriş çıkış kayıt bilgileri, kamera kayıtları gibi'],
            ['name' => 'İşlem Güvenliği', 'info' => 'IP adresi bilgileri, internet sitesi giriş çıkış bilgileri, şifre ve parola bilgileri gibi'],
            ['name' => 'Risk Yönetimi', 'info' => 'ticari, teknik, idari risklerin yönetilmesi için işlenen bilgiler gibi'],
            ['name' => 'Finans', 'info' => 'bilanço bilgileri, finansal performans bilgileri, kredi ve risk bilgileri, malvarlığı bilgileri gibi'],
            ['name' => 'Mesleki Deneyim', 'info' => 'diploma bilgileri, gidilen kurslar, meslek içi eğitim bilgileri, sertifikalar, transkript bilgileri gibi'],
            ['name' => 'Görsel ve İşitsel Kayıtlar', 'info' => 'görsel ve işitsel kayıtlar gibi'],
            ['name' => 'Irk ve Etnik Köken', 'info' => 'ırk ve etnik kökeni bilgileri gibi'],
            ['name' => 'Siyasi Düşünce Bilgileri', 'info' => 'siyasi düşüncesini belirten bilgiler, siyasi parti üyeliği bilgisi gibi'],
            ['name' => 'Felsefi İnanç, Din, Mezhep ve Diğer İnançlar', 'info' => 'dini aidiyetine ilişkin bilgiler, felsefi inancına ilişkin bilgiler, mezhep aidiyetine ilişkin bilgiler, diğer inançlarına ilişkin bilgiler gibi'],
            ['name' => 'Kılık ve Kıyafet', 'info' => 'kılık ve kıyafete ilişkin bilgiler'],
            ['name' => 'Dernek Üyeliği', 'info' => 'dernek üyeliği bilgileri gibi'],
            ['name' => 'Vakıf Üyeliği', 'info' => 'vakıf üyeliği bilgileri gibi'],
            ['name' => 'Sendika Üyeliği', 'info' => 'sendika üyeliği bilgileri gibi'],
            ['name' => 'Sağlık Bilgileri', 'info' => 'engellilik durumuna ait bilgiler, kan grubu bilgisi, kişisel sağlık bilgileri, kullanılan cihaz ve protez bilgileri gibi'],
            ['name' => 'Ceza Mahkûmiyeti Ve Güvenlik Tedbirleri', 'info' => 'ceza mahkûmiyetine ilişkin bilgiler, güvenlik tedbirlerine ilişkin bilgiler gibi'],
            ['name' => 'Biyometrik Veri', 'info' => 'avuç içi bilgileri, parmak izi bilgileri, retina taraması bilgileri, yüz tanıma bilgileri gibi'],
            ['name' => 'Genetik Veri', 'info' => 'genetik veriler gibi'],
            ['name' => 'Diğer Bilgiler', 'info' => 'kullanıcı tarafından belirlenecek veri türleri gibi'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datacategories');
    }
};
