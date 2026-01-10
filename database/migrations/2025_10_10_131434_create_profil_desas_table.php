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
        Schema::create('profil_desas', function (Blueprint $table) {
            $table->id();
            $table->string('logo_desa')->nullable();
            $table->string('nama_desa');
            $table->string('sub_judul')->nullable();
            $table->text('sejarah_desa')->nullable();
            $table->text('sambutan')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });

        DB::table('profil_desas')->insert([
            'nama_desa' => 'Desa Maju',
            'sub_judul' => 'Informasi mengenai sejarah, visi, misi desa beserta lebih mengenal aparatur-aparatur desa kelurahan tuwung',
            'sejarah_desa' => '<p>Kelurahan Mangalli merupakan salah satu wilayah di Kecamatan Pallangga, Kabupaten Gowa, Sulawesi Selatan, yang sejarah namanya berakar dari cerita lisan lokal masyarakat Gowa. Meskipun detail spesifik mengenai kisah asal usul nama &quot;Mangalli&quot; tidak terdokumentasi luas secara publik, wilayah ini secara historis terkait erat dengan eksistensi Kerajaan Gowa (Kerajaan Makassar) yang merupakan salah satu kerajaan maritim terbesar di Indonesia Timur.</p><p>Sejarah Mangalli lebih banyak diturunkan melalui tradisi lisan dan pengetahuan lokal tokoh masyarakat, yang menggambarkan wilayah ini sebagai bagian dari kesatuan adat dan administrasi Kerajaan Gowa di masa lampau, sebelum menjadi kelurahan administratif di era modern.</p>',
            'sambutan' => '<p>Website ini hadir sebagai wujud transformasi Kelurahan Mangalli menjadi desa yang mampu memanfaatkan teknologi informasi dan komunikasi, terintegrasi ke dalam sistem online. Keterbukaan informasi publik dan kegiatan perekonomian di desa, guna mewujudkan Desa Paccekke sebagai desa wisata yang berkelanjutan, adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa yang mandiri.</p>',
            'visi' => '<p> Visi yang dianut secara berjenjang hingga ke tingkat kelurahan adalah:
                            "Kabupaten Gowa Unggul, Maju dan Berkelanjutan" (Visi periode saat ini, sebelumnya adalah
                            "Terwujudnya Masyarakat yang Berkualitas, Mandiri dan Berdaya Saing dengan Tata Kelola
                            Pemerintahan yang Baik").</p>',
            'misi' => '<p style="text-align: justify;">Misi ini berfokus pada beberapa aspek pembangunan daerah yang relevan dan dilaksanakan di tingkat kelurahan melalui berbagai program kerja, antara lain:</p><p style="text-align: justify;">Meningkatkan kualitas Sumber Daya Manusia berbasis pada hak-hak dasar kesetaraan gender, nilai budaya dan agama.</p><p style="text-align: justify;">Meningkatkan pembangunan dan pengelolaan infrastruktur dan kualitas lingkungan hidup yang terencana dan terpadu.</p><p style="text-align: justify;">Meningkatkan tata kelola pemerintahan yang baik, bersih, transparan, dan akuntabel.</p>',
            'alamat' => 'Jl. Merdeka No. 1, Desa Maju',
            'kode_pos' => '12345',
            'telepon' => '021-12345678',
            'email' => 'kelurahan-tuwung@gmail.com',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_desas');
    }
};
