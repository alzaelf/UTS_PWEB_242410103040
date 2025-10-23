@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6 text-center">Selamat datang, {{ $username }}!</h1>
    <p class="text-center mb-6 text-gray-600">Berikut ringkasan data PawStudio:</p>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="bg-blue-500 text-white p-4 rounded-lg shadow text-center">
            <h2 class="text-lg font-semibold">Total Hewan</h2>
            <p class="text-3xl font-bold mt-2">{{ $summary['total_hewan'] }}</p>
        </div>
        <div class="bg-green-500 text-white p-4 rounded-lg shadow text-center">
            <h2 class="text-lg font-semibold">Total Layanan</h2>
            <p class="text-3xl font-bold mt-2">{{ $summary['total_layanan'] }}</p>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded-lg shadow text-center">
            <h2 class="text-lg font-semibold">Total Transaksi</h2>
            <p class="text-3xl font-bold mt-2">{{ $summary['total_transaksi'] }}</p>
        </div>
    </div>
</div>
@endsection
