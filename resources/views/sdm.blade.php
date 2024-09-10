@extends('layout/index')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard >Subbagian Sumber Daya Manusia</li>
            </ol>
        </div>

        <div class="table shadow mb-4 mx-4">
            <div class="card-body">
                <!-- Filter ya broo -->
                <form class="filter" action="" method="GET">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 mb-3">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Jenis Surat</label>
                                <div class="col-sm-8">
                                    <select name="id_jenis_surat" id="JenisSurat" class="form-control form-control-sm"
                                        required>
                                        <option selected="selected" hidden="hidden">Pilih Jenis Surat
                                        </option>
                                        @foreach($jenis_surat as $item)
                                        <option value="{{$item->id}}">{{$item->JSurat}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tahun Surat</label>
                                <div class="col-sm-8">
                                    <select name="id_tahun_surat" id="id_tahun" class="form-control form-control-sm"
                                        required>
                                        <option value="" selected="selected" hidden="hidden">Pilih Tahun
                                        </option>
                                        @foreach($tahun_surat as $item)
                                        <option value="{{$item->id}}">{{$item->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3 d-flex justify-content-start">
                            <button type="submit" class="btn btn-primary btn-sm">Terapkan Filter</button>
                        </div>
                    </div>
                </form>
                <div class="row" style="margin-left: 5px">
                    <div class="col-md-12 d-flex justify-content-start">
                        <a href="{{ url('/tbhsuratSDM') }}" class="btn btn-primary mb-4">
                            <span class="bx bx-plus"></span> Tambah Surat
                        </a>
                    </div>
                </div>
                <br>
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
                            @foreach($surat_sdm as $key => $p)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $p->namesurat }}</td>
                                <td>{{ $p->Nomor }}</td>
                                <td>{{ $p->JenisSurat->JSurat }}</td>
                                <td>{{ $p->tgl }}</td>
                                <td>{{ $p->TahunSurat->tahun }}</td>
                                <td><a href="/storage/{{$p->nama_file}}">{{ $p->nama_file }}</a>
                                <td>{{ $p->keterangan }}</td>
                                </td>
                                <td>
                                    <a href="/tbhsuratSDM/edit/{{$p->id}}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="/tbhsuratSDM/delete/{{$p->id}}" method="POST" style="display:inline;">
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
@endsection