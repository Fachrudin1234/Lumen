@extends('layouts.admin_app')
@section('admin_content')
<div class="container-md d-flex justify-content-center">
    <div class="container-md mt-4">
        <p class="display-4 fw-bold">Selamat Datang Admin</p>
        <p class="h4 fw-normal ">Semangat!
        </p>
    </div>
    <div class="container-md mt-4">
        <img class="img-fluid float-lg-start"
            src="{{ Vite::asset('resources/images/undraw_winter_designer_a-2-m7(1) 1.svg') }}" alt="bg">
    </div>
</div>
@endsection
