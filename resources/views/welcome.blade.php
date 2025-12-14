@extends('layouts.app')

@section('content')
    <section id="hero" class="w-full h-[700px] overflow-hidden rounded-b-3xl">
        <div class="w-full h-full swiper swiper-banner">
            <div class="w-full h-full swiper-wrapper">
                <div class="relative w-full h-full swiper-slide">
                    <img src="{{ Storage::url('banner-1.jpeg') }}" alt="" class="object-cover w-full h-full">
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-black/30 to-transparent">
                    </div>
                    <div class="absolute inset-0 w-full h-full px-6 md:px-10 lg:px-20">
                        <div class="grid h-full max-w-4xl mx-auto place-content-center">
                            <h1
                                class="text-6xl font-semibold tracking-tighter text-center text-white capitalize break-words md:text-8xl">
                                selamat datang di website resmi kelurahan Mangalli
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="relative w-full h-full swiper-slide">
                    <img src="{{ Storage::url('banner-2.jpeg') }}" alt="kantor " class="object-cover w-full h-full">
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-black/50 via-black/50 to-black/25">
                    </div>
                    <div class="absolute inset-0 w-full h-full px-6 md:px-10 lg:px-40">
                        <div class="flex items-center h-full max-w-7xl mx-auto">
                            <div class="space-y-8">
                                <h1
                                    class="text-6xl font-semibold tracking-tighter text-center text-white capitalize break-words lg:text-left md:text-8xl">
                                    Berita Desa
                                </h1>
                                <div class="grid grid-cols-1 lg:grid-cols-2">
                                    <div class="px-10 lg:px-0">
                                        <p
                                            class="text-xl font-light leading-snug text-center text-white md:text-2xl lg:text-left">
                                            Dengan adanya Berita Desa, sekarang jadi lebih mudah untuk
                                            mendapatkan informasi terbaru tentang desa tanpa harus pergi
                                            kekantor desa
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-center lg:justify-start">
                                    <a href="#"
                                        class="flex items-center justify-center px-4 py-2 space-x-2 text-lg text-white transition bg-primary border border-primary rounded-md w-fit hover:bg-primary/95 focus:ring-4 focus:ring-green-400">
                                        Pelajari lebih lanjut
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full h-full swiper-slide">
                    <img src="{{ Storage::url('banner-3.jpeg') }}" alt="salah satu bangunan di "
                        class="object-cover w-full h-full">
                    <div class="absolute inset-0 w-full h-full bg-gradient-to-l from-black/50 via-black/50 to-black/25">
                    </div>
                    <div class="absolute inset-0 w-full h-full px-6 md:px-10 lg:px-40">
                        <div class="flex items-center justify-center h-full max-w-7xl mx-auto">
                            <div class="space-y-8">
                                <h1
                                    class="text-6xl font-semibold tracking-tighter text-center text-white capitalize break-words md:text-8xl">
                                    pengaduan masyarakat
                                </h1>
                                <div class="w-full px-10 mx-auto lg:w-1/2 lg:px-0">
                                    <p class="text-xl font-light leading-snug text-center text-white md:text-2xl">
                                        Laporkan segala pengaduan anda seputar permasalahan yang ada di
                                        , petugas akan menindaklanjuti pengaduan dengan
                                        cepat dan tanggap
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a href="#"
                                        class="flex items-center justify-center px-4 py-2 space-x-2 text-lg text-white transition bg-primary border border-primary rounded-md w-fit hover:bg-primary/95 focus:ring-4 focus:ring-green-400">
                                        Pelajari lebih lanjut
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="absolute top-0 left-0 lg:left-5 w-14 h-full button-prev z-[1] grid place-content-center">
                <a href="#"
                    class="flex items-center justify-center w-10 h-10 text-white rounded-full cursor-pointer bg-black/30 hover:bg-black/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="15 6 9 12 15 18"></polyline>
                    </svg>
                </a>
            </div>
            <div class="absolute top-0 right-0 lg:right-5 w-14 h-full button-next z-[1] grid place-content-center">
                <a href="#"
                    class="flex items-center justify-center w-10 h-10 text-white rounded-full cursor-pointer bg-black/30 hover:bg-black/25">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="9 6 15 12 9 18"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="px-6 md:px-10">
            <div class="max-w-7xl py-32 mx-auto">
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-10">
                    <div class="order-2 space-y-5 lg:order-1">
                        <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                            Sambutan Lurah Kelurahan Mangalli
                            <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                        </h3>
                        <div class="space-y-5 text-center divide-y divide-slate-200 lg:text-left description">
                            <div class="pt-5 space-y-1">
                                <h6 class="text-xl font-semibold">
                                    Farizah Latief, HS. S.Stp
                                </h6>
                                <p class="text-lg font-light">
                                    lurah kelurahan mangalli
                                </p>
                            </div>
                            <p class="text-xl font-light leading-relaxed">
                                Website ini hadir sebagai wujud transformasi Kelurahan Mangalli menjadi desa yang mampu
                                memanfaatkan teknologi informasi dan komunikasi, terintegrasi ke dalam sistem online.
                                Keterbukaan informasi publik dan kegiatan perekonomian di desa, guna mewujudkan Desa
                                Paccekke sebagai desa wisata yang berkelanjutan, adaptasi dan mitigasi terhadap perubahan
                                iklim serta menjadi desa yang mandiri.
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center lg:order-2 content">
                        <img src="{{ Storage::url('default-user.jpg') }}" class="w-96 h-96 rounded-full bg-right"
                            alt="lurah-kelurahan-tuwung">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" relative bg-primary">
        <div class="px-6 md:px-10">
            <div class="max-w-7xl py-32 mx-auto text-white ">

                <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-10">
                    <div class=" space-y-5   ">
                        <h3 class=" text-4xl font-bold text-center lg:text-left">
                            Visi dan Misi Kelurahan Mangalli
                            <hr class="my-2 border-t-3 border-white w-24 lg:mx-0 mx-auto">
                        </h3>
                        <div class="space-y-5 text-center  lg:text-left description">
                            <div class="pt-5 space-y-1">
                                <h6 class="text-xl font-semibold">
                                    Visi
                                </h6>
                                <p class="text-lg font-light">

                                </p>
                            </div>
                            <div class="text-xl font-light leading-relaxed text-justify">
                                {!! $profileDesa->visi !!}
                            </div>
                        </div>
                        <div class="space-y-5 text-center  lg:text-left description">
                            <div class="pt-5 space-y-1">
                                <h6 class="text-xl font-semibold">
                                    Misi
                                </h6>
                                <p class="text-lg font-light">

                                </p>
                            </div>
                            <div class="text-xl font-light leading-relaxed">
                                {!! $profileDesa->misi !!}
                            </div>
                        </div>
                    </div>
                    <div class="relative  h-100 ">
                        <div class="hidden lg:block absolute top-0 inset-0 bg-white h-32 aspect-square rounded-sm">
                        </div>
                        <div
                            class="lg:absolute lg:top-10 lg:left-10 lg:inset-0 z-10 swiper visi-misi-swiper h-100 w-100  rounded-sm">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url('banner-1.jpeg') }}" alt="visi-misi-1"
                                        class="object-cover w-full h-full">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url('banner-2.jpeg') }}" alt="visi-misi-1"
                                        class="object-cover w-full h-full">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url('banner-3.jpeg') }}" alt="visi-misi-1"
                                        class="object-cover w-full h-full">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ Storage::url('banner-4.jpeg') }}" alt="visi-misi-1"
                                        class="object-cover w-full h-full">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative content text-center lg:text-left">
        <div class="max-w-7xl  py-32 mx-auto space-y-16 ">

            <h3 class="text-4xl font-bold text-center text-primary">
                Struktur Aparatur Kelurahan Mangalli
                <hr class="my-2 border-t-4 border-primary w-24 mx-auto">
                <p class="text-lg font-light text-black">Struktur kepemimpinan dan perangkat kelurahan</p>
            </h3>

            <!-- Slider main container -->
            <div class="swiper swiper-aparat">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($aparat as $item)
                        <div class="swiper-slide space-y-3 ">
                            <img src="{{ Storage::url($item->foto) }}"
                                class="object-cover w-full rounded-lg h-60 md:h-80 lg:h-96 md:rounded-xl"
                                alt="Heriyani, S.Sos">
                            <div class="space-y-1 text-center md:space-y-2">
                                <h6 class="text-base font-semibold md:text-xl">
                                    {{ $item->jabatan }}
                                </h6>
                                <p class="text-sm font-light leading-snug md:text-lg md:leading-tight">
                                    {{ $item->nama }}
                                </p>
                            </div>
                        </div>
                    @endforeach


                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </section>
    <section class="relative content text-center lg:text-left">
        <div class="max-w-7xl py-20 pt-0 mx-auto space-y-10">
            <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                Administrasi Penduduk Kelurahan Mangalli
                <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                <p class="text-lg font-light text-black">Data Administrasi Penduduk Kelurahan Mangalli Tahun 2025</p>
            </h3>
            <div class="grid grid-cols-1 gap-5 gap-y-8 md:grid-cols-3 lg:grid-cols-4 md:gap-10">
                <div class="flex gap-3  ">
                    <div class="p-3 rounded-sm bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>

                    </div>
                    <div>
                        <div class="text-xl">Penduduk</div>
                        <div class="text-left">{{ $penduduk['total'] }}</div>
                    </div>
                </div>
                <div class="flex gap-3  ">
                    <div class="p-3 rounded-sm bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg></div>
                    <div>
                        <div class="text-xl">Laki laki</div>
                        <div class="text-left">{{ $penduduk['laki'] }}</div>
                    </div>
                </div>
                <div class="flex gap-3  ">
                    <div class="p-3 rounded-sm bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg></div>
                    <div>
                        <div class="text-xl">Perempuan</div>
                        <div class="text-left">{{ $penduduk['perempuan'] }}</div>
                    </div>
                </div>
                <div class="flex gap-3  ">
                    <div class="p-3 rounded-sm bg-primary text-white"><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                    <div>
                        <div class="text-xl">Kepala Keluarga</div>
                        <div class="text-left">{{ $penduduk['kk'] }}</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-3 md:gap-10 lg:gap-20">
                    <!-- Spinner -->

                    <div class="relative flex justify-center order-2 col-span-1 lg:col-span-2 lg:order-1">
                        <div id="age-loading" class="absolute inset-0 flex items-center justify-center bg-white/70 z-10">
                            <div class="spinner"></div>
                        </div>
                        <div id="display-error"
                            class="hidden absolute inset-0  items-center justify-center bg-white/70 z-10">
                            <p class="text-center">Ada kesalahan</p>
                        </div>
                        <canvas id="population-by-age" class="second"></canvas>
                    </div>
                    <div class="grid order-1 place-content-center lg:order-2">
                        <div class="space-y-10 first">
                            <div class="mt-5 space-y-2 md:mt-0">
                                <h1
                                    class="text-3xl font-light leading-tight text-center text-black capitalize lg:text-4xl lg:text-left">
                                    penduduk berdasarkan usia
                                </h1>
                                <h6
                                    class="text-lg font-bold leading-tight text-center text-black capitalize lg:text-xl lg:text-left">
                                    data tahun 2024
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="publication">
        <div class="px-6 md:px-10">
            <div class="max-w-7xl py-20 pt-10 mx-auto lg:pt-20">
                <div class="space-y-10">
                    <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                        Berita Kelurahan Mangalli
                        <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                        <p class="text-lg font-light text-black">Ketahui informasi terbaru seputar Kelurahan Mangalli di
                            sini
                        </p>
                    </h3>
                    <div class="grid grid-cols-1 gap-8 md:gap-10 lg:grid-cols-2">
                        <div class="row-span-1 lg:row-span-3">
                            @if ($berita)
                                <div class="hidden lg:block">
                                    <a href="{{ route('berita.detail', $berita[0]->slug) }}" class="sequenced">
                                        <div class="relative w-full overflow-hidden rounded-xl h-96">
                                            <img src="{{ Storage::url($berita[0]->gambar) }}"
                                                class="object-cover w-full h-full">
                                            <div
                                                class="absolute inset-0 w-full h-full bg-linear-to-br from-black/10 via-black/40 to-black/60">
                                            </div>
                                            <div class="absolute inset-x-0 bottom-0 w-full p-4 space-y-2">
                                                <h6 class="text-2xl leading-tight text-white">
                                                    {{ $berita[0]->judul }}
                                                </h6>
                                                <p class="text-lg font-light text-white/80">
                                                    {{ $berita[0]->created_at->format('d F Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            {{-- mobile --}}
                            <div class="block lg:hidden space-y-3">
                                @forelse ($berita as $data)
                                    <a href="{{ route('berita.detail', $data->slug) }}"
                                        class="flex flex-row space-x-5 space-y-0 sequenced">
                                        <div class="shrink-0 w-24 h-16 md:h-24 md:w-36">
                                            <img src="{{ Storage::url($data->gambar) }}" alt="{{ $data->judul }}"
                                                class="object-cover w-full h-full rounded-md md:rounded-lg lg:rounded-xl">
                                        </div>
                                        <div class="space-y-2">
                                            <h3 class="-mt-1 text-xl leading-snug text-black line-clamp-3 md:mt-0"
                                                title="{{ $data->judul }}">
                                                {{ $data->judul }}
                                            </h3>
                                            <p class="font-light text-black">
                                                {{ $berita[0]->created_at->format('d F Y') }}

                                            </p>
                                        </div>
                                    </a>
                                @empty
                                    <div class="text-start">
                                        Tidak ada berita
                                    </div>
                                @endforelse

                            </div>
                        </div>
                        <div class="hidden lg:block space-y-5">
                            @forelse ($berita as $data)
                                <a href="{{ route('berita.detail', $data->slug) }}"
                                    class="flex flex-row space-x-5 space-y-0 sequenced">
                                    <div class="shrink-0 w-24 h-16 md:h-24 md:w-36">
                                        <img src="{{ Storage::url($data->gambar) }}" alt="{{ $data->judul }}"
                                            class="object-cover w-full h-full rounded-md md:rounded-lg lg:rounded-xl">
                                    </div>
                                    <div class="space-y-2">
                                        <h3 class="-mt-1 text-xl leading-snug text-black line-clamp-3 md:mt-0"
                                            title="{{ $data->judul }}">
                                            {{ $data->judul }}
                                        </h3>
                                        <p class="font-light text-black">
                                            {{ $berita[0]->created_at->format('d F Y') }}

                                        </p>
                                    </div>
                                </a>
                            @empty
                                <div class="text-start hidden lg:block">
                                    Tidak ada berita
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
