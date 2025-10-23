@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-center">login admin</h2>

    @if(session('error'))
        <div class="bg-red-100 text-red-700 p-2 mb-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('doLogin') }}">
        @csrf
        <div class="mb-3">
            <label class="block font-semibold">Username</label>
            <input type="text" name="username" class="w-full border p-2 rounded" placeholder="Masukkan username" value="{{ old('username') }}">
        </div>

        <div class="mb-3">
            <label class="block font-semibold">Password</label>
            <input type="password" name="password" class="w-full border p-2 rounded" placeholder="Masukkan password">
        </div>
        <button type="submit" class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">
            Login
        </button>
    </form>
</div>
@endsection
