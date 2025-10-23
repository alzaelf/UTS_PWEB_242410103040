@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4"> Halo, {{ $username }}! </h2>
    <h3 class="text-2xl font-bold mb-4">berikut profil kamu ya</h3>
    <p><strong>Nama Lengkap:</strong> {{ $profile['fullname'] }}</p>
    <p><strong>Email:</strong> {{ $profile['email'] }}</p>
    <p><strong>Role:</strong> {{ $profile['role'] }}</p>
</div>
@endsection
