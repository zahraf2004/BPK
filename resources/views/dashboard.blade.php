@extends('layout/index')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <!-- Card pertama -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4">
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8" style="margin-left:30px">
                                    <h2 class="d-flex align-items-center mb-0">{{count($InputSuratHukum)}}</h2>
                                    <h4 class="card-title mb-0">Hukum</h4>
                                    <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                        <a class="small text-white stretched-link"
                                            href="{{ url('/hukum')}}">Selengkapnya</a>
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card kedua -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card l-bg-red">
                        <div class="card-statistic-3 p-4">
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8" style="margin-left:30px">
                                    <h2 class="d-flex align-items-center mb-0">{{count($InputSuratUmum)}}</h2>
                                    <h4 class="card-title mb-0">Umum & TI</h4>
                                    <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                        <a class="small text-white stretched-link"
                                            href="{{ url('/umum')}}">Selengkapnya</a>
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card ketiga -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8" style="margin-left:30px">
                                    <h2 class="d-flex align-items-center mb-0">{{count($InputSuratKeu)}}</h2>
                                    <h5 class="card-title mb-0">Keuangan</h5>
                                    <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                        <a class="small text-white stretched-link"
                                            href="{{ url('/keuangan')}}">Selengkapnya</a>
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row kedua untuk card berikutnya -->
            <div class="row">
                <!-- Card keempat -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8" style="margin-left:30px">
                                    <h2 class="d-flex align-items-center mb-0">{{count($InputSuratSDM)}}</h2>
                                    <h5 class="card-title mb-0">SDM</h5>
                                    <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                        <a class="small text-white stretched-link"
                                            href="{{ url('/sdm')}}">Selengkapnya</a>
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card kelima -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8" style="margin-left:30px">
                                    <h2 class="d-flex align-items-center mb-0">{{count($InputSuratHumas)}}</h2>
                                    <h5 class="card-title mb-0">Humas & TU</h5>
                                    <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                        <a class="small text-white stretched-link"
                                            href="{{ url('/humas')}}">Selengkapnya</a>
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2024</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>@endsection