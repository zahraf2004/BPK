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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

                <!-- Data FORM -->
                <form action="{{ isset($pegawai) ? route('pegawai.update', $pegawai->id) : route('pegawai.store') }}"
                    method="POST">
                    @csrf
                    @if(isset($pegawai))
                    @method('PUT')
                    @endif

                    <div class="form1">
                        <section id="step-1" class="form-step mr-9 ml-9">
                            <h4 class="card-title">{{ isset($pegawai) ? 'Edit Pegawai' : 'Input Pegawai' }}</h4><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Nama Pegawai"
                                                value="{{ old('nama', $pegawai->nama ?? '') }}" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nip" placeholder="NIP"
                                                value="{{ old('nip', $pegawai->nip ?? '') }}" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="jabatan" required>
                                                <option value="">-- Pilih Jabatan --</option>
                                                <option value="Kepala Perwakilan"
                                                    {{ old('jabatan', $pegawai->jabatan ?? '') == 'Kepala Perwakilan' ? 'selected' : '' }}>
                                                    Kepala Perwakilan</option>
                                                <option value="Kepala Sekretariat"
                                                    {{ old('jabatan', $pegawai->jabatan ?? '') == 'Kepala Sekretariat' ? 'selected' : '' }}>
                                                    Kepala Sekretariat</option>
                                                <option value="Kepala Unit Pemeriksa"
                                                    {{ old('jabatan', $pegawai->jabatan ?? '') == 'Kepala Unit Pemeriksa' ? 'selected' : '' }}>
                                                    Kepala Unit Pemeriksa</option>
                                                <option value="Kepala Subbagian"
                                                    {{ old('jabatan', $pegawai->jabatan ?? '') == 'Kepala Subbagian' ? 'selected' : ''}}>
                                                    Kepala Subbagian</option>
                                                <option value="Pemeriksa"
                                                    {{ old('jabatan', $pegawai->jabatan ?? '') == 'Pemeriksa' ? 'selected' : ''}}>
                                                    Pemeriksa</option>
                                                <option value="Verifikatur"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Verifikatur' ? 'selected' : ''}}>
                                                    Verifikatur</option>
                                                <option value="Penilik"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Penilik' ? 'selected' : ''}}>
                                                    Penilik</option>
                                                <option value="Administrasi Umum"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Administrasi Umum' ? 'selected' : ''}}>
                                                    Administrasi Umum</option>
                                                <option value="Analisis SDM Aparatur"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Analisis SDM Aparatur' ? 'selected' : ''}}>
                                                    Analisis SDM Aparatur</option>
                                                <option value="Pengelola Kepegawaian"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Pengelola Kepegawaian' ? 'selected' : ''}}>
                                                    Pengelola Kepegawaian</option>
                                                <option value="Analis Keuangan"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Analis Keuangan' ? 'selected' : ''}}>
                                                    Analis Keuangan</option>
                                                <option value="Pranata Keuangan"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Pranata Keuangan' ? 'selected' : ''}}>
                                                    Paranata Komputer</option>
                                                <option value="Lainnya"
                                                    {{ old('jabatan', $pegawai->jabatan?? '') == 'Lainnya' ? 'selected' : ''}}>
                                                    Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Unit Kerja</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="unit_kerja" required>
                                                <option value="">-- Pilih Unit Kerja --</option>
                                                <option value="BPK Perwakilan Jambi"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'BPK Perwakilan Jambi' ? 'selected' : '' }}>
                                                    BPK Perwakilan Jambi</option>
                                                <option value="Sekretariat Perwakilan"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Sekretariat Perwakilan' ? 'selected' : '' }}>
                                                    Sekretariat Perwakilan</option>
                                                <option value="Subauditorat Jambi I"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Subauditorat Jambi I' ? 'selected' : '' }}>
                                                    Subauditorat Jambi I</option>
                                                <option value="Subauditorat Jambi II"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Subauditorat Jambi II' ? 'selected' : '' }}>
                                                    Subauditorat Jambi II</option>
                                                <option value="Subbagian Keuangan"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Subbagian Keuangan' ? 'selected' : '' }}>
                                                    Subbagian Keuangan</option>
                                                <option value="Sumber Daya Manusia"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Sumber Daya Manusia' ? 'selected' : '' }}>
                                                    Subbagian Sumber Daya Manusia</option>
                                                <option value="Subbagian Hukum"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Subbagian Hukum' ? 'selected' : '' }}>
                                                    Subbagian Hukum</option>
                                                <option value="Subbagian Umum & TI"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Subbagian Umum & TI' ? 'selected' : '' }}>
                                                    Subbagian Umum & TI</option>
                                                <option value="Subbagian Humas & TU"
                                                    {{ old('unit_kerja', $pegawai->unit_kerja ?? '') == 'Subbagian Humas & TU' ? 'selected' : '' }}>
                                                    Subbagian Humas & TU</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pangkat</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="pangkat" required>
                                                <option value="">-- Pilih Pangkat --</option>
                                                <option value="Pembina Utama / IV E"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pembina Utama / IV E' ? 'selected' : '' }}>
                                                    Pembina Utama / IV E</option>
                                                <option value="Pembina Utama Muda / IV C"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pembina Utama Muda / IV C' ? 'selected' : '' }}>
                                                    Pembina Utama Muda / IV C</option>
                                                <option value="Pembina Utama Muda / IV D"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pembina Utama Muda / IV D' ? 'selected' : '' }}>
                                                    Pembina Utama Muda / IV D</option>
                                                <option value="Pembina Tk. I / IV B"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pembina Tk. I / IV B' ? 'selected' : '' }}>
                                                    Pembina Tk. I / IV B</option>
                                                <option value="Pembina / IV A"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pembina  / IV A' ? 'selected' : '' }}>
                                                    Pembina / IV A</option>
                                                <option value="Penata Tk. I / III D"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Penata Tk. I / III D' ? 'selected' : '' }}>
                                                    Penata Tk. I / III D</option>
                                                <option value="Penata Tk. / III C"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Penata / III C' ? 'selected' : '' }}>
                                                    Penata / III C</option>
                                                <option value="Penata Muda Tk. I / III B"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Penata Muda Tk. I / III B' ? 'selected' : '' }}>
                                                    Penata Muda Tk. I / III B</option>
                                                <option value="Penata Muda/ III A"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Penata Muda/ III A' ? 'selected' : '' }}>
                                                    Penata Muda / III A</option>
                                                <option value="Pengatur Tk. I / II D"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pengatur Tk. I / II D' ? 'selected' : '' }}>
                                                    Pengatur Tk. I / II D</option>
                                                <option value="Pengatur / II C"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pengatur/ II C' ? 'selected' : '' }}>
                                                    Pengatur / II C</option>
                                                <option value="Pengatur Muda Tk. I / II B"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pengatur Muda Tk. I / II B' ? 'selected' : '' }}>
                                                    Pengatur Muda Tk. I / II B</option>
                                                <option value="Pengatur Muda/ II A"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Pengatur Muda/ II A' ? 'selected' : '' }}>
                                                    Pengatur Muda/ II A</option>
                                                <option value="Juru Tingkat I / I D"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Juru Tingkat I / I D' ? 'selected' : '' }}>
                                                    Juru Tingkat I / I D</option>
                                                <option value="Juru / I C"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Juru / I C' ? 'selected' : '' }}>
                                                    Juru / I C</option>
                                                <option value="Juru Muda Tk. I/ I B"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Juru Muda Tk. I/ I B' ? 'selected' : '' }}>
                                                    Juru Muda Tk. I/ I B</option>
                                                <option value="Juru Muda / I A"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == 'Juru Muda / I A' ? 'selected' : '' }}>
                                                    Juru Muda / I A</option>
                                                <option value="-"
                                                    {{ old('pangkat', $pegawai->pangkat ?? '') == '-' ? 'selected' : '' }}>
                                                    -</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Masukkan Email"
                                                value="{{ old('email', $pegawai->email ?? '') }}" required />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Hak Akses</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="hak_akses" required>
                                                <option value="">-- Pilih Hak Akses --</option>
                                                <option value="Admin"
                                                    {{ old('hak_akses', $pegawai->hak_akses ?? '') == 'Admin' ? 'selected' : '' }}>
                                                    Admin</option>
                                                <option value="Pegawai"
                                                    {{ old('hak_akses', $pegawai->hak_akses ?? '') == 'Pegawai' ? 'selected' : '' }}>
                                                    Pegawai</option>
                                                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status" required>
                                                <option value="">-- Pilih Status --</option>
                                                <option value="aktif"
                                                    {{ old('status', $pegawai->status ?? '') == 'aktif' ? 'selected' : '' }}>
                                                    Aktif</option>
                                                <option value="non-aktif"
                                                    {{ old('status', $pegawai->status ?? '') == 'non-aktif' ? 'selected' : '' }}>
                                                    Non-aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-save" style="margin-top: 10px">
                                {{ isset($pegawai) ? 'Update' : 'Submit' }}
                            </button>
                        </section>
                    </div>
                </form>

                <br>

                </section>
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