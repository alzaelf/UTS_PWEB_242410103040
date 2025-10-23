@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Daftar layanan Pawstudio</h2>

    <table class="w-full border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Pelayanan</th>
                <th class="p-2 border">Nama layanan</th>
                <th class="p-2 border">Harga</th>
                <th class="p-2 border">Durasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td class="p-2 border">{{ $item['id'] }}</td>
                <td class="p-2 border"> <img src="{{ asset($item['gambar']) }}" alt="{{ $item['nama'] }}" width="100" height="auto" class="rounded"></td>
                <td class="p-2 border">{{ $item['nama'] }}</td>
                <td class="p-2 border">{{ $item['harga'] }}</td>
                <td class="p-2 border">{{ $item['durasi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
