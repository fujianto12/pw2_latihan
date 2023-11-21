@extends('layout.main')
@section('title', 'Falkutas')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Fakultas</h4>
                    <p class="card-description">
                        Daftar fakultas di Universitas UMDP
                    </p>
                    <a href="{{ route('falkutas.create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Fakultas</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($falkutas as $item)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>
                                        <form action="{{ route('falkutas.destroy', $item->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-rounded show_confirm"
                                                data-toggle="tooltip" title='Delete'
                                                data-nama='{{ $item->nama }}'>Hapus</button>

                                            <a href="{{ route('falkutas.edit', $item->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
