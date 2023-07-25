@extends("layouts.app")

@section("content")
    <p class="display-5 fw-bold text-center mt-4">Temukan Furniture</p>
    <p class="h3 fw-light text-center mt-0">Sesuai Keingin anda!</p>
    <div class="d-flex flex-wrap justify-content-center mt-4">
        @foreach ($Products as $Product)
            <div class="card m-4" style="width: 18rem;">
                    <img src="{{ Vite::asset('public/storage/files/img/'.$Product->encrypted_imagename) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize text-center">{{ $Product->name_product }}</h5>
                        <p class="card-text mb-0">Harga</p>
                        <p class="mt-0 h4 fw-medium">{{ $Product->harga }}</p>
                        <div class=" d-flex justify-content-center mt-4">
                            <a href="{{ route('detailproduct', [$Product->id]) }}" class="btn btn-primary px-5">Beli</a>
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
@endsection
