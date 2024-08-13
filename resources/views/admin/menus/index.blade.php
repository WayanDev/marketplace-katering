@extends('layouts.base')

@section('title','Menu')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
    <h6 class="m-0 font-weight-bold text-primary">Data Menu</h6>
    {{-- <a href="{{ route('menus.create') }}" class="btn btn-primary">Tambah</a> --}}
</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    {{-- <tbody>
                        @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->deskripsi }}</td>
                            <td><img src="{{ Storage::url($menu->foto) }}" alt="{{ $menu->deskripsi }}" width="100"></td>
                            <td>{{ $menu->harga }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary"><i class="far fa-eye"></i></button>
                                    <button href="{{ route('menus.edit', $menu) }}" type="button" class="btn btn-outline-success"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
