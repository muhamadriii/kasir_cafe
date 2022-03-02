@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create New</h3>
                    </div>
                    <form action="{{ route('menu.store') }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="nama_menu" class="form-control" placeholder="Enter Nama menu">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="Enter Harga">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" placeholder="Enter Deskripsi">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Ketersediaan</label>
                                <input type="number" name="ketersediaan" class="form-control" placeholder="Enter Ketersediaan">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection