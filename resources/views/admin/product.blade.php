@extends('layouts.admin_app')
@section('admin_content')
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">
            <h4 class="mb-3">{{ $pageTitle }}</h4>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Products as $listbarang)
                <tr>
                    <td>{{ $listbarang->code_product }}</td>
                    <td>{{ $listbarang->name_product }}</td>
                    <td>{{ $listbarang->harga }}</td>
                    <td>{{ $listbarang->stock }}</td>
                    <td>{{ $listbarang->deskripsi}}</td>
                    <td>@include('layouts.menuadmin')</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
