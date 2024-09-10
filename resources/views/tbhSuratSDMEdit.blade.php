@extends('layout/index')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard > Subbagian Sumber Daya Manusia> Form Input Surat
                </li>
            </ol>
        </div>

        <!-- Data FORM -->
        <form action="/tbhsuratSDM/update/{{$surat_sdm->id}}" method='POST' enctype="multipart/form-data">
            @csrf
            <div class="form1">
                <section id="step-1" class="form-step mr-9 ml-9">
                    <h4 class="card-title">Input Surat</h4><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="namesurat" placeholder="nama surat"
                                        value="{{old('namesurat', $surat_sdm->namesurat ?? '')}}" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Surat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Nomor" placeholder="nomor surat"
                                        value="{{old('Nomor', $surat_sdm->Nomor ?? '')}}" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Surat</label>
                                <div class="col-sm-9">
                                    <select name="id_jenis_surat" id="JenisSurat" class="form-control" required>
                                        <option value="" selected="selected" hidden="hidden">Pilih Jenis Surat
                                        </option>
                                        @foreach($jenis_surat as $item)
                                        <option value="{{$item->id}}">{{$item->JSurat}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="margin-top:5px">Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tgl" placeholder="Masukkan tanggal"
                                        value="{{old('tgl', $surat_sdm->tgl ?? '')}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Surat</label>
                                <div class="col-sm-9">
                                    <select name="id_tahun_surat" id="id_tahun" class="form-control" required>
                                        <option value="" selected="selected" hidden="hidden">Pilih Tahun
                                        </option>
                                        @foreach($tahun_surat as $item)
                                        <option value="{{$item->id}}">{{$item->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="margin-top:5px">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="keterangan"
                                        placeholder="Masukkan Keterangan"
                                        value="{{old('keterangan', $surat_sdm->keterangan ?? '')}}" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" style="margin-top:5px">Surat
                                    Tugas</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="nama_file" placeholder="Surat Tugas"
                                        required />
                                    <p class="mt-2" style="font-size: 10px;"><strong>*upload file pdf dengan
                                            ukuran
                                            max 1 mb</strong></p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-save" style="margin-top:30px">Submit</button>
                </section>
            </div>
        </form>
</div>
@endsection