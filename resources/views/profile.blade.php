@extends('layouts.app')

@section('content')
    <section class="">
        <div class="m-24 flex flex-col lg:flex-row  gap-14">
            <div class="flex-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18852.060581004516!2d119.4320376975351!3d-5.2294463659728825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee194a314ff6f%3A0x76b462fea8c17baf!2sMangalli%2C%20Kec.%20Pallangga%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1765565705356!5m2!1sid!2sid"
                    width="100%" height="680px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="flex-1">
                <div class="space-y-10">
                    <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                        Sejarah Kelurahan Mangalli
                        <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">

                    </h3>
                    <div class="space-y-5 text-lg font-light text-black text-justify">
                        {!! $profileDesa->sejarah_desa !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="m-24 flex flex-col lg:flex-row  gap-14">
            <div class="flex-2 space-y-5 ">
                <h3 class="text-4xl font-bold text-start text-primary">
                    Sarana dan Prasarana
                    <hr class="my-2 border-t-4 border-primary w-24 ">
                </h3>
                <div class="text-lg font-light text-black text-justify ">
                    <p class="">
                        Berdasarkan data Badan Pusat Statistik (BPS) tahun 2011–2015, Kelurahan Mangalli sebagai ibu kota
                        Kecamatan Pallangga didukung oleh ketersediaan sarana dan prasarana yang relatif memadai untuk
                        menunjang pelayanan publik dan aktivitas masyarakat.
                    </p>
                    <p>Pada sektor pendidikan, terdapat 39 unit Sekolah Dasar (SD) yang menjadi fasilitas pendidikan
                        terbanyak dan berperan penting dalam menjangkau kebutuhan pendidikan dasar masyarakat. Selain itu,
                        tersedia 37 unit Taman Kanak-kanak (TK) sebagai sarana pendidikan anak usia dini. Untuk jenjang
                        pendidikan menengah, terdapat 7 unit Sekolah Menengah Pertama (SMP) dan 3 unit Sekolah Menengah
                        Atas/Kejuruan (SMA/SMK) yang melayani pendidikan lanjutan bagi penduduk usia sekolah di wilayah
                        kecamatan.</p>

                </div>
                <div>
                    <div class="relative ">
                        <div id="infrastructure-loading"
                            class="absolute inset-0 flex items-center justify-center bg-white/70 z-10">
                            <div class="spinner"></div>
                        </div>

                        <div id="infrastructure-error"
                            class="hidden absolute inset-0  items-center justify-center bg-white/70 z-10">
                            <p class="text-center">Ada kesalahan</p>
                        </div>

                        <div class="flex justify-center order-2 col-span-1 lg:col-span-2 lg:order-1">
                            <canvas id="infrastructure-type" class="second"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex-1 space-y-14">
                <div>
                    <h3 class="text-4xl font-bold text-start text-primary">
                        Visi Kelurahan Mangalli
                        <hr class="my-2 border-t-4 border-primary w-24 ">
                    </h3>
                    <div class="text-lg font-light text-black text-justify ">
                        {!! $profileDesa->visi !!}

                    </div>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-start text-primary">
                        Misi Kelurahan Mangalli
                        <hr class="my-2 border-t-4 border-primary w-24 ">
                    </h3>
                    <div class="space-y-4 text-lg font-light text-black text-justify ">
                        {!! $profileDesa->misi !!}

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
