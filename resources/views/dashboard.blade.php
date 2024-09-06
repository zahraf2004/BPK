<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style2.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>SiMail</title>
</head>

</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    <!--Main Navigation-->
    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #92bce0;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img src="{{ asset('img/Logo-BPK.png') }}" alt="logo" height="45px">
                        <a class="navbar-brand" href="{{ url('/dashboard') }}"
                            style="color: #ffffff; margin-left: 30px; font-size:25px;">SiMail</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <form class="navbar-form navbar-left" role="search" style="margin-left: 20px">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span
                                            class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('img/flag.png') }}" alt="flag" width="28px" height="18px">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('img/flag.png') }}" alt="flag" width="28px"
                                                height="18px">
                                            <span>Indonesia</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                        src="{{ asset('img/foto.jpeg') }}"
                                        class="img-responsive img-thumbnail img-circle"> Username</a>
                                <ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#">Profil edition</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li>
                                        <!-- Form untuk Logout -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="{{url ('/dashboard')}}">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <!-- Menggunakan data-target untuk menghubungkan dengan ID panel -->
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Data Master</span>
                            <b class="caret"></b>
                        </a>
                        <!-- Menambahkan ID yang sesuai dengan data-target -->
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="{{ url('/DataMasterPegawai')}}"><i class="fa fa-caret-right"></i>Data
                                    Pegawai</a>
                            </li>
                            <li><a href="{{ url('/DataMasterSurat')}}"><i class="fa fa-caret-right"></i>Jenis Surat</a>
                            </li>
                            <li><a href="{{ url('/DataMasterTahun')}}"><i class="fa fa-caret-right"></i>Tahun Surat</a>
                            </li>
                        </ul>
                    </li>
                    <li style="background-color: #428bca; color: #ffffff;">
                        <!-- Menggunakan data-target untuk menghubungkan dengan ID panel -->
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                            <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
                            <span class="sidebar-title">Kategori</span>
                            <b class="caret"></b>
                        </a>
                        <!-- Pastikan ID sesuai dengan data-target -->
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="{{ url('/hukum')}}"><i class="fa fa-caret-right"></i>Subbagian Hukum</a></li>
                            <li><a href="{{ url('/umum')}}"><i class="fa fa-caret-right"></i>Subbagian Umum & TI</a>
                            </li>
                            <li><a href="{{ url('/sdm')}}"><i class="fa fa-caret-right"></i>Subbagian SDM</a></li>
                            <li><a href="{{ url('/keuangan')}}"><i class="fa fa-caret-right"></i>Subbagian Keuangan</a>
                            </li>
                            <li><a href="{{ url('/humas')}}"><i class="fa fa-caret-right"></i>Subbagian Humas & TU</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
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
                                            <h2 class="d-flex align-items-center mb-0">3,243</h2>
                                            <h4 class="card-title mb-0">Hukum</h4>
                                            <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                                <a class="small text-white stretched-link"
                                                    href="{{ url('/hukum')}}">View Details</a>
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
                                            <h2 class="d-flex align-items-center mb-0">3,243</h2>
                                            <h4 class="card-title mb-0">Umum & TI</h4>
                                            <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                                <a class="small text-white stretched-link" href="{{ url('/umum')}}">View
                                                    Details</a>
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
                                            <h2 class="d-flex align-items-center mb-0">15.07k</h2>
                                            <h5 class="card-title mb-0">Keuangan</h5>
                                            <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                                <a class="small text-white stretched-link"
                                                    href="{{ url('/keuangan')}}">View Details</a>
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
                                            <h2 class="d-flex align-items-center mb-0">578</h2>
                                            <h5 class="card-title mb-0">SDM</h5>
                                            <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                                <a class="small text-white stretched-link" href="{{ url('/sdm')}}">View
                                                    Details</a>
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
                                            <h2 class="d-flex align-items-center mb-0">$11.61k</h2>
                                            <h5 class="card-title mb-0">Humas & TU</h5>
                                            <div class="card-footer" style="border-top:1px; margin-bottom: 10px;">
                                                <a class="small text-white stretched-link"
                                                    href="{{ url('/humas')}}">View Details</a>
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
        </div>

    </div>

    <!--Main Navigation-->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>

</html>