@extends('layouts.admin_app')
@section('admin_content')
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">
            <h4 class="mb-3">{{ $pageTitle --}}</h4>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="listpembayaranTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No.</th>
                    <th>Nama penerima</th>
                    <th>Alamat</th>
                    <th>No_hp</th>
                    <th>Jumlah</th>
                    <th>Biaya</th>
                    <th>Metode</th>
                    <th>Status</th>
                    <th>Nama Pemesan</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

