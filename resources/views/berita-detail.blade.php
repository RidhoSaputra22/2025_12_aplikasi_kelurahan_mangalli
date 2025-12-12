@extends('layouts.app')

@section('content')
    <section class="min-h-screen">
        <div class="m-24 space-y-14">
            <h3 class="text-4xl font-bold text-center text-primary lg:text-left">
                {{ $berita['judul'] }}
                <hr class="my-2 border-t-3 border-primary w-24 lg:mx-0 mx-auto">
                <p class="text-lg font-light text-black text-justify ">
                    Admin, {{ now()->format('d F Y') }}
                </p>
            </h3>

            <div class="flex gap-14">
                <div class="flex-2 space-y-14">
                    <img class="w-full aspect-video object-cover object-center" src="{{ $berita['image'] }}"
                        alt="{{ $berita['judul'] }}" />
                    <div class="text-lg font-light text-black text-justify ">
                        {{ $berita['content'] }}
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-5">
                    @foreach ($beritaLainnya as $item)
                        <a href="{{ route('berita.detail', '1') }}" class="flex gap-4 ">
                            <img class="w-32 aspect-video object-cover object-center" src="{{ $item['image'] }}"
                                alt="{{ $item['judul'] }}" />
                            <div class="">
                                <h3 class="text-lg font-semibold text-gray-800 text-ellipsis">
                                    {{ $item['judul'] }}
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
