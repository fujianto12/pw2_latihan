@extends('layout.main')
@section('title', 'Falkutas')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('prodi.store') }}">
                        @csrf
                        <h4 class="card-title">Tambah Prodi</h4>
                        <p class="card-description">
                            tambah prodi
                        </p>
                        <input type="text" class="form-control" placeholder="Tulis Prodi" name="nama">
                        <hr>
                        <h4 class="card-title">Pilih Fakultas</h4>
                        <p class="card-description">
                            tambah fakultas
                        </p>
                        <select name="falkutas_id" class="form-control">
                            <option value="">Pilih</option>
                            @foreach ($falkutas as $item)
                                <option value="{{$item->id}}">{{$item['nama'] }}</option>
                            @endforeach
                        </select>
                        @error('falkutas_id')
                            <label class="text-danger">{{ $message }}</label>
                        @enderror
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('prodi') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
