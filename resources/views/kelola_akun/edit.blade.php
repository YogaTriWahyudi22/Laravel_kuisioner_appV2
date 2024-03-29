@extends('layout.main')

@section('title', 'Edit Akun')

@section('content')

    <div class="button-container bg-white border shadow-sm">
        <form action="{{ route('akun_edit', $edit->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" value="{{ $edit->nama }}" aria-describedby="emailHelp"
                    required>
            </div>

            <div class="form-group">
                <label for="">Jabatan Pegawai</label>
                <input type="text" name="jabatan_pegawai" class="form-control"
                    value="{{ $edit->identitas->jabatan_pegawai }}" id="" required>
            </div>

            <div class="form-group">
                <label for="">Unit Kerja</label>
                <input type="text" name="unit_kerja" value="{{ $edit->identitas->unit_kerja }}" class="form-control" id=""
                    required>
            </div>

            <div class="form-group text-right">
                <a href="{{ route('kelola_akun') }}" class="btn btn-outline-theme"><i
                        class="fa fa-arrow-left mr-2"></i>Kembali</a>
                <button type="submit" class="btn btn-outline-theme mx-2" onclick="ubah()"><i
                        class="fa fa-edit mr-2"></i>Ubah</button>
            </div>

        </form>

    </div>

@endsection
