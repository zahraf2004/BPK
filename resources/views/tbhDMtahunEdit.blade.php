@extends('layout/index')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat Datang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard > Data Master Tahun Surat > Form Input Tahun</li>
            </ol>
        </div>

        <!-- Data FORM -->
        <form
            action="{{ isset($tahun_surat) ? route('tahun_surat.update', $tahun_surat->id) : route('tahun_surat.store') }}"
            method="POST">
            @csrf
            @if(isset($tahun_surat))
            @method('PUT')
            @endif
            <div class="form1">
                <section id="step-1" class="form-step mr-9 ml-9">
                    <h4 class="card-title">Input Tahun Surat</h4><br>
                    <div class="row">

                        <div class="col-md-6">
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tahun"
                                        placeholder="Masukkan Tahun Surat"
                                        value="{{ old('tahun', $tahun_surat->tahun ?? '')}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="Keterangan"
                                        placeholder="Masukkan Keterangan"
                                        value="{{ old('Keterangan', $tahun_surat->Keterangan ?? '')}}" required />
                                </div>
                            </div>

                        </div>
                        <input type="hidden" class="form-control" name="status" id="status" value="draft" readonly />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
            </div>
        </form>

        </section>
</div>
@endsection