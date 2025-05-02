<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.heads')

<body class="flex items-center justify-center min-h-screen bg-gray-100 py-[5px]">
    <main class="w-[393px] max-h-screen bg-white relative shadow-xl rounded-xl overflow-hidden flex flex-col">
        @yield('content')
    </main>
</body>

</html>
