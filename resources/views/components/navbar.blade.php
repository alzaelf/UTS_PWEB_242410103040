{{-- resources/views/components/navbar.blade.php --}}
@php
    $username = session('username');
@endphp

<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            {{-- Logo kiri --}}
            <h1 class="text-xl font-bold text-blue-600">PawStudio</h1>

            {{-- Menu kanan --}}
            <ul class="flex items-center space-x-6 text-gray-700 font-medium">
                <li><a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-blue-600 transition-colors duration-200">Dashboard</a></li>
                <li><a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:text-blue-600 transition-colors duration-200">Pengelolaan</a></li>
                <li><a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-blue-600 transition-colors duration-200">Profil</a></li>
                @if(session()->has('username'))
                    <li>
                        <a href="{{ route('logout') }}" 
                           class="text-blue-500 hover:text-blue-600 transition-colors duration-200 ease-in-out">
                           Logout
                        </a>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>
