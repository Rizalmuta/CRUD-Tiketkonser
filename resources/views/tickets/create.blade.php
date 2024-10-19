@extends('layouts.app')

@section('title', 'Tambah Tiket')

@section('content')
    <h2>Tambah Tiket</h2>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <select name="type" class="form-control" required>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Premium">Premium</option>
                <option value="VIP">VIP</option>
            </select>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-danger">Batal</a>
    </form>
@endsection
