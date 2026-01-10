@extends('layouts.app')

@section('content')
    <section class="min-h-screen py-14">
        <div class="m-4 lg:m-24 space-y-14">
            <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                {{ $berita->judul }}
                <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                <p class="text-lg font-light text-black text-center lg:text-justify ">
                    Admin, {{ date('d F Y', strtotime($berita->created_at)) }}
                </p>
            </h3>

            <div class="flex flex-col lg:flex-row  gap-14">
                <div class="flex-2 space-y-14">
                    <img class="w-full aspect-video object-cover object-center" src="{{ Storage::url($berita->gambar) }}"
                        alt="{{ $berita->judul }}" />
                    <div class="text-lg font-light text-black text-justify ">
                        {!! $berita->isi !!}
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-5">
                    <h3 class="text-3xl font-bold text-center text-primary lg:text-left">
                        Berita Lainnya
                        <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">

                    </h3>
                    @foreach ($beritaLainnya as $item)
                        <a href="{{ route('berita.detail', $item->slug) }}" class="flex gap-4 ">
                            <img class="h-24 aspect-video object-cover object-center"
                                src="{{ Storage::url($item->gambar) }}" alt="{{ $item->judul }}" />
                            <div class="">
                                <h3 class="text-lg font-semibold text-gray-800 text-ellipsis">
                                    {{ $item->judul }}
                                </h3>
                                <p class="mt-2 text-sm text-gray-600 text-ellipsis">


                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
    </section>
@endsection
