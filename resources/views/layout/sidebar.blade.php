<div id="sidebar-wrapper">
    <aside id="sidebar">
        <ul id="sidemenu" class="sidebar-nav">
            <li>
                <a href="{{url ('/dashboard')}}">
                    <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                    <span class="sidebar-title">Dashboard</span>
                </a>
            </li>
            @can('view', App\Models\User::class)
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
            @endcan
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