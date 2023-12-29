@extends('layout.app')

@section('content')
    <h2>Daftar Resevarsi</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Tanggal Resevarsi</th>
                <th>Banyak Orang</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resevarsis as $resevarsi)
                <tr>
                    <td>{{ $resevarsi->id }}</td>
                    <td>{{ $resevarsi->namaPemesan }}</td>
                    <td>{{ $resevarsi->emailPemesan }}</td>
                    <td>{{ $resevarsi->teleponPemesan }}</td>
                    <td>{{ $resevarsi->tanggalResevarsi }}</td>
                    <td>{{ $resevarsi->banyakOrang }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection