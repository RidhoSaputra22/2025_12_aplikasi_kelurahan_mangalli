@extends('layouts.app')

@section('content')
    <section class="min-h-screen py-14">
        <div class="m-24 space-y-14">
            <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                Berita Kelurahan Mangalli
                <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                <p class="text-lg font-light text-black text-justify ">
                    Dapatkan informasi terbaru seputar Kelurahan Mangalli di sini
                </p>
            </h3>

            {{ $berita->links() }}

            <div>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-3">
                    @foreach ($berita as $item)
                        <a href="{{ route('berita.detail', $item->slug) }}"
                            class="relative overflow-hidden rounded-lg shadow-lg">
                            <div>
                                <img class="w-full object-cover h-full hover:scale-105 transition duration-200"
                                    src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" />
                            </div>

                            <div class="absolute overflow-hidden h-1/3 bottom-0 bg-white w-full px-6 py-4 z-10">
                                <h3 class="text-lg font-semibold text-gray-800 text-ellipsis">
                                    {{ $item->judul }}
                                </h3>
                                <p class="mt-2 text-sm text-gray-600 text-ellipsis">
                                    {{ $item['deskripsi'] }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
    </section>
@endsection
