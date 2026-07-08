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

<div class="row g-4 mb-4">

    <div class="col-md-4">

        <div class="card shadow border-0 bg-primary text-white">

            <div class="card-body text-center">

                <h1>{{ $totalMahasiswa }}</h1>

                <h5>👨‍🎓 Mahasiswa</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-success text-white">

            <div class="card-body text-center">

                <h1>{{ $totalDosen }}</h1>

                <h5>👨‍🏫 Dosen</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-warning text-dark">

            <div class="card-body text-center">

                <h1>{{ $totalJurusan }}</h1>

                <h5>🏛 Jurusan</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-info text-white">

            <div class="card-body text-center">

                <h1>{{ $totalMatakuliah }}</h1>

                <h5>📚 Mata Kuliah</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-secondary text-white">

            <div class="card-body text-center">

                <h1>{{ $totalKelas }}</h1>

                <h5>🏫 Kelas</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-danger text-white">

            <div class="card-body text-center">

                <h1>{{ $totalKrs }}</h1>

                <h5>📝 Total KRS</h5>

            </div>

        </div>

    </div>

</div>

<div class="card shadow">

    <div class="card-header bg-dark text-white">

        <h4 class="mb-0">

            🚀 Quick Menu

        </h4>

    </div>

    <div class="card-body">

        <div class="row g-3">

            <div class="col-md-4">
                <a href="/mahasiswa" class="btn btn-primary w-100">Mahasiswa</a>
            </div>

            <div class="col-md-4">
                <a href="/dosen" class="btn btn-success w-100">Dosen</a>
            </div>

            <div class="col-md-4">
                <a href="/jurusan" class="btn btn-warning w-100">Jurusan</a>
            </div>

            <div class="col-md-4">
                <a href="/matakuliah" class="btn btn-info w-100 text-white">Mata Kuliah</a>
            </div>

            <div class="col-md-4">
                <a href="/kelas" class="btn btn-secondary w-100">Kelas</a>
            </div>

            <div class="col-md-4">
                <a href="/krs" class="btn btn-danger w-100">KRS</a>
            </div>

        </div>

    </div>

</div>


@endif

@if(Auth::user()->role == 'mahasiswa')

<div class="row g-4">

    <div class="col-md-4">

        <div class="card shadow border-0 bg-primary text-white">

            <div class="card-body text-center">

                <h1>{{ $totalKrs }}</h1>

                <h5>Total KRS</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-success text-white">

            <div class="card-body text-center">

                <h1>{{ $totalKrsDetail }}</h1>

                <h5>Total Detail</h5>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0 bg-warning">

            <div class="card-body text-center">

                <h1>{{ $pendingKrs }}</h1>

                <h5>Pending</h5>

            </div>

        </div>

    </div>

</div>

<div class="card shadow mt-4">

    <div class="card-header bg-dark text-white">

        <h4 class="mb-0">

            Menu Mahasiswa

        </h4>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-6">

               <a href="/krs"
   class="btn btn-primary w-100">

                    📝 KRS

                </a>

            </div>

            <div class="col-md-6">

              <a href="/krs-detail"
   class="btn btn-success w-100">

                    📚 Detail KRS

                </a>

            </div>

        </div>

    </div>

</div>

@endif

@if(Auth::user()->role == 'dosen')

<div class="row g-4">

    <div class="col-md-3">

        <div class="card shadow border-0 bg-warning">

            <div class="card-body text-center">

                <h1>{{ $pendingKrs }}</h1>

                <h5>Pending KRS</h5>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow border-0 bg-success text-white">

            <div class="card-body text-center">

                <h1>{{ $approvedKrs }}</h1>

                <h5>Approved</h5>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow border-0 bg-danger text-white">

            <div class="card-body text-center">

                <h1>{{ $declinedKrs }}</h1>

                <h5>Rejected</h5>

            </div>

        </div>

    </div>

    <div class="col-md-3">

        <div class="card shadow border-0 bg-info text-white">

            <div class="card-body text-center">

                <h1>{{ $totalKrsDetail }}</h1>

                <h5>Total Detail</h5>

            </div>

        </div>

    </div>

</div>

<div class="card shadow mt-4">

    <div class="card-header bg-dark text-white">

        <h4 class="mb-0">

            Menu Dosen

        </h4>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-6">

                <a href="/krs"
                   class="btn btn-warning w-100">

                    ✔ Approval KRS

                </a>

            </div>

            <div class="col-md-6">

                <a href="/krs-detail"
                   class="btn btn-primary w-100">

                    📄 Detail KRS

                </a>

            </div>

        </div>

    </div>

</div>

@endif

@endauth

@endsection