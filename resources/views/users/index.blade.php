@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3"></h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3 mb-5">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="usersTable">
                <thead>
                    <tr>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->notelp }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>@include('users.action')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
