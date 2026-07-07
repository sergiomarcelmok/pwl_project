@extends('layouts.app')

@section('content')

@guest

<div class="card shadow">

    <div class="card-body text-center py-5">

        <h1 class="display-4 text-primary fw-bold">

            Selamat Datang di Sistem Akademik ITBSS

        </h1>

        <p class="lead mt-3">

            Silakan login terlebih dahulu untuk mengakses sistem akademik.

        </p>

        <a href="/login" class="btn btn-primary me-2">

            Login

        </a>

        <a href="/register" class="btn btn-success">

            Register

        </a>

    </div>

</div>

@endguest


@auth

<div class="row mb-4">

    <div class="col-12">

        <div class="card shadow border-0">

            <div class="card-body text-center py-5">

                <h1 class="fw-bold text-primary">

                    Sistem Akademik ITBSS

                </h1>

                <p class="fs-5 mt-3">

                    Selamat Datang,

                    <strong>{{ Auth::user()->name }}</strong>

                </p>

                <span class="badge bg-primary fs-6">

                    {{ strtoupper(Auth::user()->role) }}

                </span>

            </div>

        </div>

    </div>

</div>

@if(Auth::user()->role == 'admin')

<div class="alert alert-primary">

    <h4>Dashboard Admin</h4>

    <p>Silakan pilih menu melalui navbar untuk mengelola seluruh data akademik.</p>

</div>

@endif

@if(Auth::user()->role == 'mahasiswa')

<div class="alert alert-success">

    <h4>Dashboard Mahasiswa</h4>

    <p>Silakan membuka menu KRS dan KRS Detail melalui navbar.</p>

</div>

@endif

@if(Auth::user()->role == 'dosen')

<div class="alert alert-warning">

    <h4>Dashboard Dosen</h4>

    <p>Silakan melakukan Approval KRS melalui menu KRS.</p>

</div>

@endif

@endauth

@endsection