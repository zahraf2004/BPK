@extends('layout/index')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard > Data Master Jenis Surat</li>
            </ol>
        </div>

        <!-- table -->
        <div class="table shadow mb-4 mx-4">
            <div class="card-body">
                <div class="row" style="margin: 5px">
                    <div class="col-md-12 d-flex justify-content-start">
                        <a href="{{ url('/tbhDataMasterSurat') }}" class="btn btn-primary mb-4">
                            <span class="bx bx-plus"></span> Tambah Jenis Surat
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Surat</th>
                                <th>Keterangan Surat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jenis_surat as $key => $p)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $p->JSurat }}</td>
                                <td>{{ $p->keterangan}}</td>
                                <td><a href="{{ route('jenis_surat.edit', $p->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('jenis_surat.destroy', $p->id) }}" method="POST"
                                        style="display: inline;">
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