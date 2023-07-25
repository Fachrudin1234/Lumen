@extends("layouts.app")

@section("content")
<p class="display-4 fw-bold text-center my-4">Segera Lakukan Pembayaran</p>
<div class="container-md d-flex justify-content-center mt-5">
    <div class="border border-4 border-black p-3 rounded shadow">
        <div class="text-center">
            <p class="h3 fw-medium text-center my-4">Pembayaran Melalui Virtual Accoun</p>
            <p class="h4 fw-normal text-center ">No Virtual Accoun</p>
            <p class="h3 fw-normal text-center p-2 rounded text-bg-primary">{{ $vc }}</p>
        </div>
        <form action="">
            <div class="mt-5">
                <label for="formFile" class="form-label">Upload Bukti Pembayaran</label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </form>
    </div>
</div>
@endsection
