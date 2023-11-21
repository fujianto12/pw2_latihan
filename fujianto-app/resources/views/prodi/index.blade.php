@extends('layout.main')
@section('title', 'Prodi')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Prodi</h4>
                    <p class="card-description">
                        Daftar prodi di Universitas UMDP
                    </p>
                    <a href="{{ route('prodi.create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <b>
                                    <th style="color: purple">Nama Prodi</th>
                                    <th style="color: purple">Nama Fakultas</th>
                                    </b>
                                </tr>
                                @foreach ($prodis as $item)
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['falkutas']['nama'] }}</td>
                                    <td>
                                        <form action="{{ route('prodi.destroy', $item->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                            class="btn btn-danger btn-rounded show_confirm"
                                            data-toggle="tooltip" title='Delete'
                                            data-nama='{{ $item->nama }}'>Hapus</button>                                        </form>
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

