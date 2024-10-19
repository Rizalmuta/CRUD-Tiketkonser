@extends('layouts.app')

@section('title', 'Lihat Tiket')

@section('content')
    <h2>Tiket Konser</h2>
    <a href="{{ route('tickets.create') }}" class="btn btn-success mb-3">Tambah Tiket</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->name }}</td>
                    <td>{{ $ticket->type }}</td>
                    <td>Rp. {{ number_format($ticket->price, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tickets.destroy', $ticket) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
