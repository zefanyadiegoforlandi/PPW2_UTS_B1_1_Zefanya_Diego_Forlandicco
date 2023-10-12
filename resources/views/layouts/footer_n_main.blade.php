<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="bg-gradient-to-t from-blue-700 to-blue-500 mt-8 py-4 text-white">
        <div class="w-full max-w-screen-xl mx-auto">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://chelseafc.com/" class="flex items-center mb-2 sm:mb-0">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Chelsea FC</span>
                </a>
                <ul class="flex flex-wrap items-center text-sm font-medium sm:mb-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Kebijakan Privasi</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Lisensi</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Kontak</a>
                    </li>
                </ul>
            </div>
            <hr class="my-4 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-6" />
            <span class="block text-sm sm:text-center">
                &copy; 2023 <a href="#" class="hover:underline">Chelsea FC™</a>. Hak Cipta Dilindungi Undang-Undang.
            </span>
        </div>
    </footer>
</body>
</html>
