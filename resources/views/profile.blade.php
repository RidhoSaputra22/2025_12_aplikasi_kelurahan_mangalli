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
                    <div class="space-y-5">
                        <p class="text-lg font-light text-black text-justify ">
                            Kelurahan Mangalli merupakan salah satu wilayah
                            di Kecamatan Pallangga, Kabupaten Gowa, Sulawesi Selatan, yang sejarah namanya berakar dari
                            cerita
                            lisan lokal masyarakat Gowa. Meskipun detail spesifik mengenai kisah asal usul nama "Mangalli"
                            tidak terdokumentasi luas secara publik, wilayah ini secara historis terkait erat dengan
                            eksistensi Kerajaan Gowa (Kerajaan Makassar) yang merupakan salah satu kerajaan maritim terbesar
                            di Indonesia Timur.
                        </p>
                        <p class="text-lg font-light text-black text-justify ">
                            Sejarah Mangalli lebih banyak diturunkan melalui tradisi lisan dan
                            pengetahuan lokal tokoh masyarakat, yang menggambarkan wilayah ini sebagai bagian dari kesatuan
                            adat dan administrasi Kerajaan Gowa di masa lampau, sebelum menjadi kelurahan administratif di
                            era modern.
                        </p>
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
                <div class="">
                    <p class="text-lg font-light text-black text-justify ">
                        Kelurahan Mangalli merupakan salah satu wilayah
                        di Kecamatan Pallangga, Kabupaten Gowa, Sulawesi Selatan, yang sejarah namanya berakar dari
                        cerita
                        lisan lokal masyarakat Gowa. Meskipun detail spesifik mengenai kisah asal usul nama "Mangalli"
                        tidak terdokumentasi luas secara publik, wilayah ini secara historis terkait erat dengan
                        eksistensi Kerajaan Gowa (Kerajaan Makassar) yang merupakan salah satu kerajaan maritim terbesar
                        di Indonesia Timur.
                    </p>
                    <p class="text-lg font-light text-black text-justify ">
                        Sejarah Mangalli lebih banyak diturunkan melalui tradisi lisan dan
                        pengetahuan lokal tokoh masyarakat, yang menggambarkan wilayah ini sebagai bagian dari kesatuan
                        adat dan administrasi Kerajaan Gowa di masa lampau, sebelum menjadi kelurahan administratif di
                        era modern.
                    </p>
                </div>
                <div>
                    <div class="    ">
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
                    <div class="">
                        <p class="text-lg font-light text-black text-justify ">
                            Visi yang dianut secara berjenjang hingga ke tingkat kelurahan adalah:
                            "Kabupaten Gowa Unggul, Maju dan Berkelanjutan" (Visi periode saat ini, sebelumnya adalah
                            "Terwujudnya Masyarakat yang Berkualitas, Mandiri dan Berdaya Saing dengan Tata Kelola
                            Pemerintahan yang Baik").
                        </p>
                    </div>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-start text-primary">
                        Misi Kelurahan Mangalli
                        <hr class="my-2 border-t-4 border-primary w-24 ">
                    </h3>
                    <div class="space-y-4">
                        <p class="text-lg font-light text-black text-justify ">
                            Misi ini berfokus pada beberapa aspek pembangunan daerah yang relevan dan dilaksanakan di
                            tingkat kelurahan melalui berbagai program kerja, antara lain:
                        </p>
                        <p class="text-lg font-light text-black text-justify ">
                            Meningkatkan kualitas Sumber Daya Manusia berbasis pada hak-hak dasar kesetaraan gender, nilai
                            budaya dan agama.
                        </p>
                        <p class="text-lg font-light text-black text-justify ">
                            Meningkatkan pembangunan dan pengelolaan infrastruktur dan kualitas lingkungan hidup yang
                            terencana dan terpadu.
                        </p>
                        <p class="text-lg font-light text-black text-justify ">
                            Meningkatkan tata kelola pemerintahan yang baik, bersih, transparan, dan akuntabel.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
