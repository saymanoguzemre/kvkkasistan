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
        Schema::create('infopurposes', function (Blueprint $table) {
            $table->id();
            $table->string('purpose');
        });

        DB::table('infopurposes')->insert([
            ['purpose' => 'Acil Durum Yönetimi Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Bilgi Güvenliği Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Çalışan Adayı / Stajyer / Öğrenci Seçme Ve Yerleştirme Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Çalışan Adaylarının Başvuru Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Çalışan Memnuniyeti Ve Bağlılığı Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Çalışanlar İçin İş Akdi Ve Mevzuattan Kaynaklı Yükümlülüklerin Yerine Getirilmesi'],
            ['purpose' => 'Çalışanlar İçin Yan Haklar Ve Menfaatleri Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Denetim / Etik Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Eğitim Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Erişim Yetkilerinin Yürütülmesi'],
            ['purpose' => 'Faaliyetlerin Mevzuata Uygun Yürütülmesi'],
            ['purpose' => 'Finans Ve Muhasebe İşlerinin Yürütülmesi'],
            ['purpose' => 'Firma / Ürün / Hizmetlere Bağlılık Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Fiziksel Mekan Güvenliğinin Temini'],
            ['purpose' => 'Görevlendirme Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Hukuk İşlerinin Takibi Ve Yürütülmesi'],
            ['purpose' => 'İç Denetim/ Soruşturma / İstihbarat Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'İletişim Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'İnsan Kaynakları Süreçlerinin Planlanması'],
            ['purpose' => 'İş Faaliyetlerinin Yürütülmesi / Denetimi'],
            ['purpose' => 'İş Sağlığı / Güvenliği Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'İş Süreçlerinin İyileştirilmesine Yönelik Önerilerin Alınması Ve Değerlendirilmesi'],
            ['purpose' => 'İş Sürekliliğinin Sağlanması Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Lojistik Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Mal / Hizmet Satın Alım Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Mal / Hizmet Satış Sonrası Destek Hizmetlerinin Yürütülmesi'],
            ['purpose' => 'Mal / Hizmet Satış Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Mal / Hizmet Üretim Ve Operasyon Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Müşteri İlişkileri Yönetimi Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Müşteri Memnuniyetine Yönelik Aktivitelerin Yürütülmesi'],
            ['purpose' => 'Organizasyon Ve Etkinlik Yönetimi'],
            ['purpose' => 'Pazarlama Analiz Çalışmalarının Yürütülmesi'],
            ['purpose' => 'Performans Değerlendirme Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Reklam / Kampanya / Promosyon Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Risk Yönetimi Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Saklama Ve Arşiv Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Sosyal Sorumluluk Ve Sivil Toplum Aktivitelerinin Yürütülmesi'],
            ['purpose' => 'Sözleşme Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Sponsorluk Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Stratejik Planlama Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Talep / Şikayetlerin Takibi'],
            ['purpose' => 'Taşınır Mal Ve Kaynakların Güvenliğinin Temini'],
            ['purpose' => 'Tedarik Zinciri Yönetimi Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Ücret Politikasının Yürütülmesi'],
            ['purpose' => 'Ürün / Hizmetlerin Pazarlama Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Veri Sorumlusu Operasyonlarının Güvenliğinin Temini'],
            ['purpose' => 'Yabancı Personel Çalışma Ve Oturma İzni İşlemleri'],
            ['purpose' => 'Yatırım Süreçlerinin Yürütülmesi'],
            ['purpose' => 'Yetenek / Kariyer Gelişimi Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Yetkili Kişi, Kurum Ve Kuruluşlara Bilgi Verilmesi'],
            ['purpose' => 'Yönetim Faaliyetlerinin Yürütülmesi'],
            ['purpose' => 'Ziyaretçi Kayıtlarının Oluşturulması Ve Takibi'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infopurposes');
    }
};
