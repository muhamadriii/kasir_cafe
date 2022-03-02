@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>

                        <div class="card-tools">
                            <a href="{{ route('menu.create') }}" class="btn btn-primary btn-sm">Create</a>
                        </div>
                    </div>  
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Deskkripsi</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($data as $datum)
                                    <tr>
                                        <td>{{ $datum->nama_menu}}</td>
                                        <td>{{ $datum->harga}}</td>
                                        <td>{{ $datum->deskripsi}}</td>
                                        <td>{{ $datum->ketersediaan}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Action</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a class="dropdown-item"
                                                        href="{{ route('menu.show', $datum->id) }}">Detail</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('menu.edit', $datum->id) }}">Edit</a>

                                                    <form action="{{ route('menu.destroy', $datum->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection