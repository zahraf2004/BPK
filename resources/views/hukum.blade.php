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
                                        <!-- Form Logout -->
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
                        <li class="breadcrumb-item active">Dashboard > Subbagian Hukum</li>
                    </ol>
                </div>

                <!-- table -->
                <div class="table shadow mb-4 mx-4">
                    <div class="card-body">
                        <!-- Form Filter -->
                        <form class="filter" action="{{ route('hukum') }}" method="GET">
                            <div class="row d-flex align-items-center">
                                <!-- Jenis Surat -->
                                <div class="col-md-5 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Jenis Surat</label>
                                        <div class="col-sm-8">
                                            <select name="id_jenis_surat" id="JenisSurat"
                                                class="form-control form-control-sm">
                                                <option selected="selected" hidden="hidden">Pilih Jenis Surat
                                                </option>
                                                @foreach($jenis_surat as $item)
                                                <option value="{{ $item->id }}">{{ $item->JSurat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tahun Surat -->
                                <div class="col-md-5 mb-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Tahun Surat</label>
                                        <div class="col-sm-8">
                                            <select name="id_tahun_surat" id="id_tahun"
                                                class="form-control form-control-sm">
                                                <option selected="selected" hidden="hidden">Pilih Tahun
                                                </option>
                                                @foreach($tahun_surat as $item)
                                                <option value="{{ $item->id }}">{{ $item->tahun }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tombol Terapkan Filter -->
                                <div class="col-md-2 mb-3 d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary btn-sm">Terapkan Filter</button>
                                </div>
                            </div>
                        </form>
                        <!-- Tombol Tambah Surat -->
                        <div class="row" style="margin-left: 5px">
                            <div class="col-md-12 d-flex justify-content-start">
                                <a href="{{ url('/tbhsurathukum') }}" class="btn btn-primary mb-4">
                                    <span class="bx bx-plus"></span> Tambah Surat
                                </a>
                            </div>
                        </div>
                        <br>
                        <!-- Tabel Data Surat -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Surat</th>
                                        <th>No Surat</th>
                                        <th>Jenis Surat</th>
                                        <th>Tanggal</th>
                                        <th>Tahun</th>
                                        <th>File Surat</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($surat_hukum as $key => $p)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $p->namesurat }}</td>
                                        <td>{{ $p->Nomor }}</td>
                                        <td>{{ $p->JenisSurat->JSurat }}</td>
                                        <td>{{ $p->tgl }}</td>
                                        <td>{{ $p->TahunSurat->tahun }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td><a href="/storage/{{$p->nama_file}}">{{ $p->nama_file }}</a></td>
                                        <td>
                                            <a href="/tbhsurathukum/edit/{{$p->id}}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="/tbhsurathukum/delete/{{$p->id}}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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