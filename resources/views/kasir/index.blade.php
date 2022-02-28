@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>

                        <div class="card-tools">
                            <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Create</a>
                            <a href="{{ route('category.export') }}" class="btn btn-primary btn-sm">Export</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datum)
                                    <tr>
                                        <td>{{ $datum->id }}</td>
                                        <td>{{ $datum->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default">Action</button>
                                                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a class="dropdown-item"
                                                        href="{{ route('category.show', $datum->id) }}">Detail</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('category.edit', $datum->id) }}">Edit</a>

                                                    <form action="{{ route('category.destroy', $datum->id) }}"
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