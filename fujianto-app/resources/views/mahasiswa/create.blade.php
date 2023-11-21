@extends('layout.main')
@section('title', 'Falkutas')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h4 class="card-title">Tambah Mahasiswa</h4>
                        <p class="card-description">
                            tambah Mahasiswa
                        </p>
                        <label for="npm">Masukan Npm</label>
                        <input type="text" class="form-control" placeholder="Npm" name="npm">

                        <label for="nama">Masukan Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">

                        <label for="tempat_lahir">Masukan Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">

                        <label for="tanggal_lahir">Masukan Tanggal</label>
                        <input type="date" class="form-control" placeholder="Tanggal" name="tanggal_lahir">

                        <label for="foto">Masukan Foto </label>
                        <input type="file" class="form-control" placeholder="Foto" name="foto">
                        <hr>

                        <h4 class="card-title">Pilih Program Studi</h4>
                        <select name="prodi_id" class="form-control">
                            <option value="">Pilih</option>
                            @foreach ($prodi as $item)
                                <option value="{{ $item->id }}">{{ $item['nama'] }}</option>
                            @endforeach
                        </select>
                        @error('prodi_id')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('mahasiswa') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
