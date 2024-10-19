@extends('layouts.app')

@section('title', 'Edit Tiket')

@section('content')
    <h2>Edit Tiket</h2>
    <form action="{{ route('tickets.update', $ticket) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $ticket->name }}" required>
        </div>
        <div class="form-group">
            <label>Jenis</label>
            <select name="type" class="form-control" required>
                <option value="Ekonomi" {{ $ticket->type == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                <option value="Premium" {{ $ticket->type == 'Premium' ? 'selected' : '' }}>Premium</option>
                <option value="VIP" {{ $ticket->type == 'VIP' ? 'selected' : '' }}>VIP</option>
            </select>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $ticket->price }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-danger">Batal</a>
    </form>
@endsection
