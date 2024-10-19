@extends('layouts.app')

@section('title', 'Detail Tiket')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Detail Tiket</h2>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Nama:</strong></div>
                    <div class="col-sm-9">{{ $ticket->name }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Jenis:</strong></div>
                    <div class="col-sm-9">{{ $ticket->type }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Harga:</strong></div>
                    <div class="col-sm-9">Rp. {{ number_format($ticket->price, 2, ',', '.') }}</div>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
