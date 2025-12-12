@extends('layouts.app')

@section('content')
    <section class="min-h-screen">
        <div class="m-24 space-y-14">
            <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                Kegiatan Kelurahan Mangalli
                <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                <p class="text-lg font-light text-black text-justify ">
                    Berikut adalah beberapa kegiatan yang dilakukan oleh kelurahan Mangalli
                </p>
            </h3>

            <div>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($kegiatan as $item)
                        <div
                            class="relative overflow-hidden rounded-lg shadow-lg
                        {{ $item['type'] == 'video' ? 'row-span-2' : '' }}">

                            <a href="{{ $item['image'] }}" class="glightbox" data-gallery="kegiatan-gallery">
                                <img class="w-full {{ $item['type'] == 'video' ? 'h-full' : 'h-80' }}  object-cover hover:scale-105 transition duration-200"
                                    src="{{ $item['image'] }}" alt="{{ $item['judul'] }}" />
                            </a>

                            <div class="absolute bottom-0 bg-white w-full px-6 py-4 z-10">
                                <h3 class="text-lg font-semibold text-gray-800">
                                    {{ $item['judul'] }}
                                </h3>
                                <p class="mt-2 text-sm text-gray-600">
                                    {{ $item['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
    </section>
@endsection
