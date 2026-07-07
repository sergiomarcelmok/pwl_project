<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ITBSS Academic System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

    <div class="container">

        <a class="navbar-brand fw-bold" href="/">

            🎓 ITBSS Academic System

        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Dashboard
                    </a>
                </li>

                @auth

                    {{-- ================= ADMIN ================= --}}

                    @if(Auth::user()->role == 'admin')

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle"
                               href="#"
                               role="button"
                               data-bs-toggle="dropdown">

                                Master Data

                            </a>

                            <ul class="dropdown-menu">

                                <li>
                                    <a class="dropdown-item" href="/mahasiswa">
                                        Mahasiswa
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/dosen">
                                        Dosen
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/jurusan">
                                        Jurusan
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/matakuliah">
                                        Mata Kuliah
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/kelas">
                                        Kelas
                                    </a>
                                </li>

                                <li><hr class="dropdown-divider"></li>

                                <li>
                                    <a class="dropdown-item" href="/krs">
                                        KRS
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="/krs-detail">
                                        KRS Detail
                                    </a>
                                </li>

                            </ul>

                        </li>

                    @endif

                    {{-- ================= MAHASISWA ================= --}}

                    @if(Auth::user()->role == 'mahasiswa')

                        <li class="nav-item">
                            <a class="nav-link" href="/krs">
                                KRS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/krs-detail">
                                Detail KRS
                            </a>
                        </li>

                    @endif

                    {{-- ================= DOSEN ================= --}}

                    @if(Auth::user()->role == 'dosen')

                        <li class="nav-item">
                            <a class="nav-link" href="/krs">
                                Approval KRS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/krs-detail">
                                Detail KRS
                            </a>
                        </li>

                    @endif

                @endauth

            </ul>

            @auth

            <div class="d-flex align-items-center">

                <span class="text-white me-3">

                    <strong>{{ Auth::user()->name }}</strong>

                    |

                    {{ strtoupper(Auth::user()->role) }}

                </span>

                <form action="{{ route('logout') }}"
                      method="POST">

                    @csrf

                    <button class="btn btn-outline-light">

                        Logout

                    </button>

                </form>

            </div>

            @endauth

        </div>

    </div>

</nav>

<!-- CONTENT -->

<div class="container mt-4">

    @yield('content')

</div>

<!-- FOOTER -->

<footer class="bg-dark text-white text-center py-3 mt-5">

    © {{ date('Y') }} ITBSS Academic Information System

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>