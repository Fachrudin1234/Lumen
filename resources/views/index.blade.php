@extends("layouts.app")

@section("content")
<div class="container-md d-flex justify-content-center">
    <div class="container-md mt-4">
        <p class="display-4 fw-bold">Selamat Datang di Toko Furniture Terbaik! </p>
        <p class="h4 fw-normal ">Temukan beragam pilihan furniture berkualitasuntuk melengkapi ruang kesayangan Anda.
        </p>
        <a class=" shadow icon-link mt-2 px-5 bg-primary py-2 rounded link-light link-offset-2 link-underline-opacity-25 text-decoration-none h4 fw-medium link-offset-2"
            href="{{ route('product.index') }}">
            Temukan Sekarang<i class="bi bi-search"></i>
        </a>
    </div>
    <div class="container-md mt-4">
        <img class="img-fluid float-lg-start"
            src="{{ Vite::asset('resources/images/undraw_winter_designer_a-2-m7(1) 1.svg') }}" alt="bg">
    </div>
</div>
@endsection
