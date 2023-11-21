@extends('layout.main')
@section('title', 'Ubah Falkutas')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah` Fakultas</h4>
                    <p class="card-description">
                        Formulir Ubah fakultas
                    </p>
                    <form class="forms-sample" method="POST" action="{{ route('falkutas.update', $falkutas->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Fakultas</label>
                            <input type="text" class="form-control" placeholder="Nama Fakultas" name="nama" value="{{ $falkutas ->nama}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{url('falkutas')}}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
